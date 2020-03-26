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
    $this->middleware('member_app_auth', ['only'=>['authCheck']]);
  }



  public function login(Request $request){
    $user_name = $request->user_name;
    $client_key = $request->client_key;
    $password = $request->password;
    $app = MemberApp::where('user_name', '=', $user_name)->first();
    if ($app == null) return ws::r(0, '', 200, 'نام کاربری اشتباه می باشد');
    if (!Hash::check($password, $app->password)){
      return ws::r(0, '', 200, 'رمز عبور اشتباه می باشد');
    }
    $app->client_key = $client_key;
    $app->save();
    $token = MAAuth::generateToken($app);
    $time_token = MAAuth::generateTimeToken();
    return ws::r(1, ['app' => $app, 'token' => $token, 'time_token' => $time_token]);
  }





  public function authCheck(){
    $app = MAAuth::app();
    $token = MAAuth::getToken();
    $time_token = MAAuth::generateTimeToken();
    return ws::r(1, ['app' => $app, 'token' => $token, 'time_token' => $time_token]);
  }
}
