@extends('layouts.app')

@section('content')

  @include('include.auth_head')
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100 animated fadeInUp faster">
        <div class="login100-pic js-tilt" data-tilt>
          <img src="{{asset('images/send_code2.jpg')}}" alt="IMG">
        </div>

        <form class="login100-form validate-form" method="POST" action="{{ url('verification/code-request/register') }}">
          @csrf
          <span class="login100-form-title">
						  ثبت نام با شماره موبایل
					</span>

          <div class="wrap-input100 validate-input @if ($errors->has('mobile')) alert-validate @endif " data-validate = "@if ($errors->has('mobile')) {{ $errors->first('mobile') }} @endif شماره موبایل صحیح وارد کنید.مثال:09101234567">
            <input class="input100{{ $errors->has('mobile') ? ' is-invalid' : '' }}" type="number" name="mobile" placeholder="شماره موبایل">

              @if(\Illuminate\Support\Facades\Session::get('error') != null)
                  <span class="text-danger">{{\Illuminate\Support\Facades\Session::get('error')}}</span>
              @endif

            <span class="focus-input100"></span>
            <span class="symbol-input100">
							<i class="fa fa-phone " style="transform: rotateY(180deg)" aria-hidden="true"></i>
						</span>
          </div>


          <div class="container-login100-form-btn">
            <button type="submit" class="btn btn-primary btn-outline-dark px-5 py-3">
              ارسال کد
            </button>
          </div>

          <div class="text-center p-t-12">
            <span class="txt1">
							حساب کاربری دارید!
						</span>
            <a class="txt2" href="{{ route('login') }}">
              وارد شوید
            </a>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
