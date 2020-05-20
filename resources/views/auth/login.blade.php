@extends('layouts.app')

@section('content')
  @include('include.auth_head')
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100 animated fadeInUp faster">
        <div class="login100-pic js-tilt" data-tilt>
          <img src="{{asset('images/img-01.png')}}" alt="IMG">
        </div>

        <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
          @csrf
          <span class="login100-form-title">
						ورود
					</span>

          <div class="wrap-input100 validate-input @if ($errors->has('mobile')) alert-validate @endif " data-validate = "@if ($errors->has('mobile')) {{ $errors->first('mobile') }} @endif شماره موبایل صحیح وارد کنید.مثال:09141232233">
            <input class="input100{{ $errors->has('phone_number') ? ' is-invalid' : '' }}" type="number" name="mobile" placeholder="شماره موبایل" value="{{\Illuminate\Support\Facades\Session::get('mobile')}}">

            <span class="focus-input100"></span>
            <span class="symbol-input100">
							<i class="fa fa-phone " style="transform: rotateY(180deg)" aria-hidden="true"></i>
						</span>
          </div>

          <div class="wrap-input100 validate-input @if ($errors->has('password')) alert-validate @endif " data-validate = "@if ($errors->has('password')) {{ $errors->first('password') }} @endif  رمز عبور خود را وارد کنید.">
            <input class="input100 {{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" placeholder="رمز عبور" value="{{\Illuminate\Support\Facades\Session::get('password')}}">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
          </div>

          <div class="container-login100-form-btn">
            <button type="submit" class="btn btn-primary btn-outline-dark px-5 py-3">
              ورود به حساب
            </button>
          </div>

          <div class="text-center p-t-12">
            {{--@if (Route::has('password.request'))--}}
              <a class="txt2" href="{{ route('send-code-password') }}">
                رمز عبور
              </a>

              <span class="txt1">
							یادت رفته!
						</span>
            {{--@endif--}}
          </div>

          <div class="text-center p-t-136">
            <a class="txt2" href="{{route('send-code')}}">
              ثبت نام
              <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
            </a>
          </div>
        </form>
      </div>
    </div>
  </div>

@endsection
