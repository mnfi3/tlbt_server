<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use \App\Http\Controllers\TelegramBotEngine\types\Dice;

Route::get('/test', function () {
  $key = 'd88es5dse64s';
  $plaintext = 'mohsen';
  $password = $key;
  $method = 'aes-256-cbc';
  $key = substr(hash('sha256', $password, true), 0, 32);
  $iv = chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0);
  $encrypted = base64_encode(openssl_encrypt($plaintext, $method, $key, OPENSSL_RAW_DATA, $iv));
  return $encrypted;
  return openssl_decrypt(base64_decode($encrypted), $method, $key, OPENSSL_RAW_DATA, $iv);
});


Route::get('/test2', function () {
  $obj = ['id'=>'5', 'first_name'=>'mohsen', 'last_name'=>'farjami'];
//  $obj = json_decode(json_encode($obj));
//  die($obj->first_name);
  $user = new \App\Http\Controllers\TelegramBotEngine\types\User($obj);
//  $user = \App\Http\Controllers\TelegramBotEngine\types\User::create(['id'=>'5', 'first_name'=>'mohsen', 'last_name'=>'farjami']);
});


Route::get('/test3', function () {
  $main_url =  "https://api.telegram.org/file/bot963731874:AAGbQWz-V-ke0zH7FI2Z1ghq68xuLFAHzNE/music/file_0.mp3";
//  $main_url = "http://dl.aviny.com/voice/marsieh/moharram/92/shab-02/mirdamad/mirdamad-m92-sh2-01.mp3";
  $file = 'music';
  header("Content-disposition:attachment; filename=$file");
  readfile($main_url);
});

Route::get('/test4', function () {

});




Route::post('/telbot/group-bot', 'GroupBotController@index')->name('group-bot');
Route::post('/telbot/public-link-bot1', 'PublicLinkBot\PublicLinkBotController@index')->name('public-link-bot1');
Route::post('/telbot/public-link-bot', 'PublicLinkBot\PublicLinkBotController@index')->name('public-link-bot');












Route::get('/', function () {
  return view('main');
})->name('main');




//-----------------------------auth-------------------------------
Route::post('/verification/code-request/register', 'Auth\VerificationCodeController@getRegisterCode');
Route::post('/verification/code-verify-register', 'Auth\VerificationCodeController@verifyCodeRegister');
Route::post('/verification/code-request/reset-password', 'Auth\VerificationCodeController@getResetPasswordCode');
Route::post('/verification/code-verify-reset-password', 'Auth\VerificationCodeController@verifyCodeResetPassword');

Route::get('/send-code', 'Auth\RegisterController@sendCodePage')->name('send-code');
Route::get('/send-code-password', 'Auth\ResetPasswordController@sendCodePasswordPage')->name('send-code-password');
Route::post('/password/reset', 'Auth\ResetPasswordController@passwordReset')->name('password-reset');

//Auth::routes();
// Authentication Routes For User...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
//
//// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
//Route::post('register', 'Auth\RegisterController@register');
Route::post('register', 'Auth\RegisterController@register1');
//
//// Password Reset Routes...
//Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
//Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
//Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
//Route::post('password/reset', 'Auth\ResetPasswordController@reset');






//----------------panel------------------------

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/panel', 'MemberApp\UserPanelController@panel')->name('user-panel');
Route::post('/panel/change-password', 'MemberApp\UserPanelController@changePassword');
Route::get('/panel/active-trail', 'MemberApp\UserPanelController@activeTrail');
Route::post('/panel/validate-discount', 'MemberApp\UserPanelController@validateDiscount');


Route::get('/test-ajax', function () {
  $dummy = [
    "isUsed"=>"0",
    "username"=>"test1",
    "password"=>"123456"
  ];

  return json_encode($dummy);
})->name('testAjax');

Route::get('/test-ajax-price', function () {
  $dummy = [
    "isValid"=>"1",
    "price"=>"250000",
  ];

  return json_encode($dummy);
})->name('testAjax');




