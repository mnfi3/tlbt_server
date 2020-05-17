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
						  بازیابی رمز عبور
					</span>

          <div class="wrap-input100 validate-input @if ($errors->has('phone_number')) alert-validate @endif " data-validate = "@if ($errors->has('phone_number')) {{ $errors->first('phone_number') }} @endif شماره موبایل صحیح وارد کنید.مثال:09141232233">
            <input class="input100{{ $errors->has('phone_number') ? ' is-invalid' : '' }}" type="number" name="phone_number" placeholder="شماره موبایل">

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


        </form>
      </div>
    </div>
  </div>
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Reset Password') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    @if (session('status'))--}}
{{--                        <div class="alert alert-success" role="alert">--}}
{{--                            {{ session('status') }}--}}
{{--                        </div>--}}
{{--                    @endif--}}

{{--                    <form method="POST" action="{{ route('password.email') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>--}}

{{--                                @if ($errors->has('email'))--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $errors->first('email') }}</strong>--}}
{{--                                    </span>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row mb-0">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Send Password Reset Link') }}--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
@endsection

