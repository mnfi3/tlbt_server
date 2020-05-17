@extends('layouts.app')

@section('content')
  @include('include.auth_head')
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100 animated fadeInUp faster">
        <div class="login100-pic js-tilt" data-tilt>
          <img class="img-reset-password" src="{{asset('images/reset_password.jpg')}}" alt="IMG">
        </div>

        <form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
          @csrf
          <span class="login100-form-title">
						 رمز عبور جدید!
					</span>

          <div class="wrap-input100 validate-input @if ($errors->has('password')) alert-validate @endif " data-validate = "@if ($errors->has('password')) {{ $errors->first('password') }} @endif ">
            <input class="input100{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" placeholder="رمز عبور جدید">

            <span class="focus-input100"></span>
            <span class="symbol-input100">
							<i class="fa fa-lock " style="transform: rotateY(180deg)" aria-hidden="true"></i>
						</span>
          </div>


          <div class="container-login100-form-btn">
            <button type="submit" class="btn btn-primary btn-outline-dark px-5 py-3">
              تغییر رمز عبور
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection

