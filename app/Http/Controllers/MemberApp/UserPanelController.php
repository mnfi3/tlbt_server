<?php

namespace App\Http\Controllers\MemberApp;

use App\Discount;
use App\MemberApp;
use App\Setting;
use function GuzzleHttp\Psr7\str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserPanelController extends Controller
{
  public function __construct() {
    $this->middleware('auth');
  }


  public function panel(){
    $user = Auth::user();
    $member_apps = $user->memberApps()->where('is_trail', '=', '0')->get();
    $trail = $user->memberApps()->where('is_trail', '=', '1')->first();
    return view('user.panel', compact('user', 'member_apps', 'trail'));
  }

  public function changePassword(Request $request){
//    $this->validate($request, [
//      'password' => 'required|min:6',
//      'new_password' => 'required|min:6',
//      'new_password_confirm' => 'required|min:6',
//    ]);

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
    if ($trail != null) return response()->json( [
      "isUsed" => "1",
      "username" => $trail->user_name,
      "password" => $trail->plain_password
    ]);

    $pass = generateRandomNumber();
    $trail = MemberApp::create([
      'user_id' => $user->id,
      'user_name' => $user->mobile . '-t',
      'client_key' => '',
      'password' => Hash::make($pass),
      'plain_password' => $pass,
      'token_key' => '',
      'app_version' => '',
      'auth_at' => 0,
      'is_trail' => 1,
    ]);

    return response()->json( [
      "isUsed" => "0",
      "username" => $trail->user_name,
      "password" => $trail->plain_password
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

    if ($discount == null) return response()->json([
        "isValid" => "0",
        "price" => $price,
      ]);


    $price = $price - (($price * $discount->percent) / 100);
    return response()->json([
      "isValid" => "1",
      "price" => $price,
    ]);
  }



}
