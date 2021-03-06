<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});


Route::post('/v1/member-app/login', 'Api\MemberApp\AuthController@login');
Route::get('/v1/member-app/auth-check', 'Api\MemberApp\AuthController@authCheck');
Route::get('/v1/member-app/logout', 'Api\MemberApp\AuthController@lougout');