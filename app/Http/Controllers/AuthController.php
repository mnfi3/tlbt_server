<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{

  public function __construct() {
    $this->middleware('auth', ['only'=>[]]);
  }

  public function enterMobile(){
    return view('');
  }

  public function enterVerifyCodeLogin(){
    return view('');

  }
}
