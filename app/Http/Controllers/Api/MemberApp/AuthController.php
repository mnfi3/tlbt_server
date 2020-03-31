<?php

namespace App\Http\Controllers\Api\MemberApp;

use App\Http\Controllers\Crypt\MAAuth;
use App\Http\Controllers\Ws\ws;
use App\MemberApp;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
  public function __construct() {
    $this->middleware('member_app_auth', ['only'=>['authCheck', 'logout']]);
  }



  public function login(Request $request){
    $user_name = $request->user_name;
    $client_key = $request->client_key;
    $password = $request->password;
    $app = MemberApp::where('user_name', '=', $user_name)->first();

    //check username and password
    if ($app == null) return ws::r(0, '', 200, 'نام کاربری اشتباه می باشد');
    if (!Hash::check($password, $app->password)){
      return ws::r(0, '', 200, 'رمز عبور اشتباه می باشد');
    }

    //check is other device is online
    $time = time();
    if ($app->client_key != $client_key){
      if($app->auth_at > 0 && ($app->auth_at + 36000) > $time){
        $wait_to_other_login = (int)(($app->auth_at + 36000 - $time) / 60 / 60); //hour
        return ws::r(0, ['app' => null, 'token' => null, 'time_token' => null], 200, " قبلا دستگاه دیگری به این حساب وارد شده است.لطفا در آن دستگاه از حساب خارج شوید و دوباره امتحان کنید و اگر به آن سیستم دسترسی ندارید  $wait_to_other_login ساعت صبر کنید.");
      }
    }


    $app->client_key = $client_key;
    $app->auth_at = time();
    $app->save();
    $token = MAAuth::generateToken($app);
    $time_token = MAAuth::generateTimeToken();
    return ws::r(1, ['app' => $app, 'token' => $token, 'time_token' => $time_token]);
  }





  public function authCheck(){
    $app = MAAuth::app();
    $app->auth_at = time();
    $app->save();
    $token = MAAuth::getToken();
    $time_token = MAAuth::generateTimeToken();
    return ws::r(1, ['app' => $app, 'token' => $token, 'time_token' => $time_token]);
  }



  public function lougout(){
    $app = MAAuth::app();
    $app->client_key = '';
    $app->token_key = '';
    $app->auth_at = 0;
    $app->save();
    return ws::r(1, ['app' => $app, 'token' => '', 'time_token' => ''], 200, 'با موفقیت از حساب کاربری خارج شدید.');
  }
}
