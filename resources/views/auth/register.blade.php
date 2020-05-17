@extends('layouts.app')

@section('content')

  @include('include.auth_head')
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100 animated fadeInUp faster">
        <div class="login100-pic js-tilt" data-tilt>
          <img src="{{asset('images/img-01.png')}}" alt="IMG">
        </div>

        <form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
          @csrf
            <input type="hidden" name="mobile_token" value="{{$vc->token}}">
            <input type="hidden" name="mobile" value="{{$mobile}}">
          <span class="login100-form-title">
						ثبت نام
					</span>

          <div class="wrap-input100 validate-input @if ($errors->has('full_name')) alert-validate @endif " data-validate = "@if ($errors->has('full_name')) {{ $errors->first('phone_number') }} @endif نام و نام خانوادگی خود را وارد کنید.">
            <input class="input100{{ $errors->has('full_name') ? ' is-invalid' : '' }}" type="text" name="full_name" placeholder="نام و نام خانوادگی ">

            <span class="focus-input100"></span>
            <span class="symbol-input100">
							<i class="fa fa-user"  aria-hidden="true"></i>
						</span>
          </div>

          <div class="wrap-input100 validate-input @if ($errors->has('password')) alert-validate @endif " data-validate = "@if ($errors->has('password')) {{ $errors->first('password') }} @endif  رمز عبور خود را وارد کنید.">
            <input class="input100 {{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" placeholder="رمز عبور">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
          </div>

          <div class="container-login100-form-btn">
            <button type="submit" class="btn btn-primary btn-outline-dark px-5 py-3">
              ثبت نام
            </button>
          </div>



        </form>
      </div>
    </div>
  </div>

@endsection
