<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use App\VerificationCode;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }



    //my code---------------------------------------------------
    public function sendCodePasswordPage(){
      return view('auth.passwords.password_code');
    }

    public function passwordReset(Request $request){


      $data = $request->toArray();
      $validator1 = Validator::make($data, [
        'password' => 'required|string|min:6|max:255',
      ]);

      $vc = VerificationCode::validateToken($request->mobile_token, $request->mobile);
      $mobile = $request->mobile;
      if($validator1->fails()) return view('auth.passwords.reset', compact('vc', 'mobile'))->with('error1', 'رمز عبور وارد شده صحیح نیست.(حداقل 6 کاراکتر)');



      if($vc == null) return view('auth.passwords.password_code')->with('error1', 'زمان تایید موبایل شما به اتمام رسیده است لطفا دوباره امتحان کنید');
      $vc->expireToken();
      $vc->delete();
      $user = User::where('mobile', '=', $request->mobile)->first();
      if ($user == null) return view('auth.passwords.password_code')->with('error1', 'مشکلی در سرور رخ داده است لطفا دوباره امتحان کنید');
      $user->password = Hash::make($request->password);
      $user->save();
      return redirect('login')->with('mobile', $request->mobile)->with('password', $request->password);
    }
}
