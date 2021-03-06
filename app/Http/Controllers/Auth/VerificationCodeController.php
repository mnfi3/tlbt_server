<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Util\MCrypt;
use App\User;
use App\VerificationCode;
use DateInterval;
use DateTime;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Ipecompany\Smsirlaravel\Smsirlaravel;

class VerificationCodeController extends Controller
{


  public function getRegisterCode(Request $request){
    $this->validate($request, [
      'mobile' => 'required|unique:users|string|max:11|min:11',
    ]);

    $mobile = $request->mobile;
    $vc = VerificationCode::generateCode($mobile);
//      Smsirlaravel::sendVerification($vc->code, $mobile);
    Smsirlaravel::ultraFastSend(['VerificationCode' => $vc->code], 26219, $mobile);
    return view('auth.verify_code', compact('mobile'));
  }


  public function verifyCodeRegister(Request $request){

    $code = $request->code;
    $mobile = $request->mobile;
    $now = date('Y-m-d H:i:s');
    $vc = VerificationCode::orderBy('id', 'desc')->where('mobile', '=', $mobile)->where('code', '=', $code)->where('is_verified', '=', 0)->where('expired_at', '>', $now)->first();


    if ($vc == null) return view('auth.verify_code', compact('mobile'))->with('error1', 'کد وارد شده اشتباه می باشد و یا منقضی شده است.');

    $dateTime = new DateTime(date('Y-m-d H:i:s'));
    $dateTime->add(new DateInterval('PT' . VerificationCode::TOKEN_EXPIRE_DURATION . 'M'));
    $token_expire_time = $dateTime->format('Y-m-d H:i:s');

    $obj = ['token_status' => 'valid', 'token_expired_at' => $token_expire_time, 'mobile' => $mobile, 'code' => $code, 'verified_at' => $now];
    $vc->token = MCrypt::encrypt(json_encode($obj));
    $vc->is_verified = 1;
    $vc->save();



    return view('auth.register', compact('vc', 'mobile'));
  }




  public function getResetPasswordCode(Request $request){
    $data = $request->toArray();
    $validator1 = Validator::make($data, [
      'mobile' => 'required|string|max:11|min:11',
    ]);
    if($validator1->fails()) return view('auth.password.password_code')->with('error1', 'شماره موبایل وارد شده اشتباه است');

    $mobile = $request->mobile;
    $user = User::where('mobile', '=', $mobile)->first();
    if ($user == null){
      return view('auth.passwords.password_code')->with('error1', 'شماره موبایل در سیستم وجود ندارد لطفا ثبت نام کنید.');
    }

    $vc = VerificationCode::generateCode($mobile);
//      Smsirlaravel::sendVerification($vc->code, $mobile);
    Smsirlaravel::ultraFastSend(['VerificationCode' => $vc->code], 26219, $mobile);
    return view('auth.passwords.password_verify_code', compact('mobile'));
  }









  public function verifyCodeResetPassword(Request $request){
    $code = $request->code;
    $mobile = $request->mobile;
    $now = date('Y-m-d H:i:s');
    $vc = VerificationCode::orderBy('id', 'desc')->where('mobile', '=', $mobile)->where('code', '=', $code)->where('is_verified', '=', 0)->where('expired_at', '>', $now)->first();


    if ($vc == null) return view('auth.passwords.password_verify_code', compact('mobile'))->with('error1', 'کد وارد شده اشتباه می باشد و یا منقضی شده است.');

    $dateTime = new DateTime(date('Y-m-d H:i:s'));
    $dateTime->add(new DateInterval('PT' . VerificationCode::TOKEN_EXPIRE_DURATION . 'M'));
    $token_expire_time = $dateTime->format('Y-m-d H:i:s');

    $obj = ['token_status' => 'valid', 'token_expired_at' => $token_expire_time, 'mobile' => $mobile, 'code' => $code, 'verified_at' => $now];
    $vc->token = MCrypt::encrypt(json_encode($obj));
    $vc->is_verified = 1;
    $vc->save();



    return view('auth.passwords.reset', compact('vc', 'mobile'));
  }

}
