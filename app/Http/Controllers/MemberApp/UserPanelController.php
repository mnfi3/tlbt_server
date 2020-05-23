<?php

namespace App\Http\Controllers\MemberApp;

use App\Discount;
use App\Http\Controllers\Util\Zarinpal;
use App\MemberApp;
use App\Setting;
use App\User;
use App\ZarinpalRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Zarinpal\Drivers\SoapDriver;

class UserPanelController extends Controller
{
  public function __construct() {
    $this->middleware('auth');
  }


  public function panel(){
    $user = Auth::user();
    $member_apps = $user->memberApps()->where('is_trail', '=', '0')->get();
    $trail = $user->memberApps()->where('is_trail', '=', '1')->first();
    $app_price = Setting::getWithKey(Setting::MEMBER_APP_PRICE)->value;
    return view('user.panel', compact('user', 'member_apps', 'trail', 'app_price'));
  }

  public function changePassword(Request $request){
    $user = Auth::user();
    $old_pass = $request->password;
    $new_pass1 = $request->new_password;
    $new_pass2 = $request->new_password_confirm;
    if ($new_pass1 != $new_pass2) return back()->with('fail', 'رمزهای وارد شده مطابقت ندارند');
    if (strlen($new_pass1) < 6) return back()->with('fail', 'طول رمز جدید کمتر می باشد.(حداقل 6 کاراکتر)');
    if (!Hash::check($old_pass, $user->password)) return back()->with('fail', 'عدم مطابقت رمز فعلی');
    $user->password = Hash::make($new_pass1);
    $user->save();
    return back()->with('success', 'رمز شما با موفقیت تغییر یافت');
  }


  public function activeTrail(){
    $user = Auth::user();
    $trail = $user->memberApps()->where('is_trail', '=', '1')->first();
    if ($trail != null)
      return json_encode([
        "isUsed" => "1",
        "username" => "$trail->user_name",
        "password" => "$trail->plain_password"
      ]);

    $pass = generateRandomNumber();
    $trail = MemberApp::create([
      'user_id' => $user->id,
      'user_name' => $user->mobile . '_t',
      'client_key' => '',
      'password' => Hash::make($pass),
      'plain_password' => $pass,
      'token_key' => '',
      'app_version' => '',
      'auth_at' => 0,
      'is_trail' => 1,
    ]);

    return json_encode([
      "isUsed" => "0",
      "username" => "$trail->user_name",
      "password" => "$trail->plain_password"
    ]);
  }

  public function validateDiscount(Request $request){
    $price = Setting::getWithKey(Setting::MEMBER_APP_PRICE)->value;
    $code = $request->code;
    $now = date('Y-m-d H:i:s');
    $discount = Discount::where('code', '=', $code)
      ->where('started_at', '<=', $now)
      ->where('finished_at', '>=', $now)
      ->where('remaining', '>', 0)->first();

    if ($discount == null)
      return json_encode([
        "isValid" => "0",
        "price" => number_format($price),
        "message" => 'کد تخفیف اشتباه می باشد و یا منقضی شده است',
      ]);



    $price = $price - (($price * $discount->percent) / 100);
    return json_encode([
      "isValid" => "1",
      "price" => number_format($price),
      "message" => 'کد تخفیف با موفقیت اعمال شد',
    ]);

  }

  public function payMemberApp(Request $request) {
    $user = Auth::user();
    $price = Setting::getWithKey(Setting::MEMBER_APP_PRICE)->value;
    $code = $request->code;
    $discount_id = 0;
    $now = date('Y-m-d H:i:s');
    $discount = Discount::where('code', '=', $code)
      ->where('started_at', '<=', $now)
      ->where('finished_at', '>=', $now)
      ->where('remaining', '>', 0)->first();
    if ($discount != null) {
      $price = $price - (($price * $discount->percent) / 100);
      $discount_id = $discount->id;
    }


    $data = json_encode([
      'user_id' => $user->id,
      'type' => 'member_app',
      'price' => $price,
      'discount_id' => $discount_id,
    ]);

    $req = ZarinpalRequest::create([
      'user_id' => $user->id,
      'discount_id' => $discount_id,
      'type' => 'member_app',
      'authority' => '',
      'amount' => $price,
      'data' => $data,
      'is_verified' => 0,
      'is_success' => 0,
      'ref_id' => '',
    ]);

    $zarinpal = new Zarinpal(env('ZARINPAL_MERCHANT_ID'), new SoapDriver());
    json_encode($answer = $zarinpal->request(
      url('/panel/pay-member-app-callback', ['request_id' => $req->id,]),
      $price, 'pay member app'));
    if (isset($answer['Authority'])) {
      $req->authority = $answer['Authority'];
      $req->save();

      $payment_url = $zarinpal->getStartPayAddress() . $answer['Authority'];
      return redirect($payment_url);
    }
  }



  public function payMemberAppCallback($request_id){
    $z_request = ZarinpalRequest::find($request_id);
//    if ($z_request->is_verified == 1) return redirect(url('/panel'));
    if ($z_request->user_id != Auth::user()->id) return redirect(url('/panel'));
    $user = User::find($z_request->user_id);
    $z_request->is_verified = 1;
    $z_request->save();
    $authority = $z_request->authority;
//    $data = json_decode($z_request->data);

    $zarinpal = new Zarinpal(env('ZARINPAL_MERCHANT_ID'), new SoapDriver());
    $result = ($zarinpal->verify('OK', $z_request->amount, $authority));
    //echo json_encode($result);
    $status = $result['Status'];


    if ($status == 'success') {
      $RefID = $result['RefID'];
      $z_request->is_success = 1;
      $z_request->ref_id = $RefID;
      $z_request->save();

      if($z_request->discount_id > 0) {
        $discount = Discount::find($z_request->discount_id);
        $discount->remaining = $discount->remaining - 1;
        $discount->save();
      }

      $user_apps_count = $user->memberApps()->where('is_trail', '=', '0')->count();
      $user_name = $user->mobile . '_' . ($user_apps_count + 1);
      $pass = generateRandomNumber();
      $app = MemberApp::create([
        'user_id' => $user->id,
        'user_name' => $user_name,
        'client_key' => '',
        'password' => Hash::make($pass),
        'plain_password' => $pass,
        'token_key' => '',
        'app_version' => '',
        'auth_at' => 0,
        'is_trail' => 0,
      ]);

      $success = 1;
      $ref_id = $RefID;
      $price = $z_request->amount;
      return view('user.payment_result', compact('success', 'ref_id', 'price'));

    } else {
      $success = 0;
      $ref_id = '';
      $price = $z_request->amount;
     return view('user.payment_result', compact('success', 'ref_id', 'price'));
    }

  }



}
