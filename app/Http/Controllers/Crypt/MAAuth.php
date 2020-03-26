<?php


namespace App\Http\Controllers\Crypt;


use App\MemberApp;

class MAAuth {

  private static $app = null;
  private static $token = null;

  public static function init($request){
    $token = $request->header('app-token');
    $app_vesion = $request->header('app-version');
    self::$token = $token;
    if (strlen($token) < 10) return;
    $obj = Jwt::getModeldata($token);
    $obj = json_decode($obj, true);
    if ($obj['status'] == 0) return;
    $app = MemberApp::where('id', '=', $obj['model_id'])->where('token_key', '=', $obj['model_key'])->first();
    if($app != null) {
      $app->app_version = $app_vesion;
      $app->save();
    }
    self::$app = $app;
  }


  public static function app(){
    return self::$app;
  }

  public static function getToken(){
    return self::$token;
  }


  public static function generateToken($app){
    $key = time() .'-' . generateRandomString(4) ;
    $app->token_key = $key;
    $app->save();
    $token = Jwt::getToken($app->id, $key);
    return $token;
  }

  public static function generateTimeToken(){
    $key = 'd88es5dse64s';
    $time = time();
    $plaintext = $time;
    $password = $key;
    $method = 'aes-256-cbc';
    $key = substr(hash('sha256', $password, true), 0, 32);
    $iv = chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0);
    $encrypted = base64_encode(openssl_encrypt($plaintext, $method, $key, OPENSSL_RAW_DATA, $iv));
    return $encrypted;
//    $decrypted = openssl_decrypt(base64_decode($encrypted), $method, $key, OPENSSL_RAW_DATA, $iv);
  }




}