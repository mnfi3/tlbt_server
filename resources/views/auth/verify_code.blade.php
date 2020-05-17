@extends('layouts.app')

@section('content')

  @include('include.auth_head')
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100 animated fadeInUp faster">
        <div class="login100-pic js-tilt" data-tilt>
          <img src="{{asset('images/img-01.png')}}" alt="IMG">
        </div>

        <form class="login100-form validate-form" method="POST" action="{{ url('verification/code-verify-register') }}">
          @csrf
            <input type="hidden" name="mobile" value="{{$mobile}}">
          <span class="login100-form-title">
						  کد 5 رقمی ارسال شده را وارد کنید
					</span>

          <div class="wrap-input100 validate-input @if ($errors->has('code')) alert-validate @endif " data-validate = "@if ($errors->has('code')) {{ $errors->first('code') }} @endif کد 5 رقمی را وارد کنید">
            <input class="input100{{ $errors->has('code') ? ' is-invalid' : '' }}" type="number" name="code" placeholder=" کد 5 رقمی ارسال شده">
              @if(\Illuminate\Support\Facades\Session::get('error') != null)
                  <span class="text-danger">{{\Illuminate\Support\Facades\Session::get('error')}}</span>
              @endif


            <span class="focus-input100"></span>
            <span class="symbol-input100">
							<i class="fa fa-check-circle " aria-hidden="true"></i>
						</span>
          </div>


          <div class="container-login100-form-btn">
            <button type="submit" class="btn btn-primary btn-outline-dark px-5 py-3">
               ثبت
            </button>
          </div>

          <div class="text-center p-t-12">
            <span class="txt1">

						</span>
            <a class="txt2" href="{{ route('login') }}">
             ارسال دوباره!
            </a>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
