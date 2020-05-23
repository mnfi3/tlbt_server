@extends('layouts.app')

@section('content')
  @include('include.auth_head')

  <div class="panel-container">
    <p class="text-white p-5 user-welcome">{{$user->name}} خوش آمدید!</p>
    <div class="card-container align-items-start">
      <button id="btnChangePassword" type="button"  data-toggle="modal" data-target="#changePassword" class="user-panel-card gradient-orange animated fadeInUp faster">
        <h4>تغییر رمز عبور</h4>
        <span class="user-panel-card-icon icon-lock icc"></span>

      </button>
      <button type="button"  data-toggle="modal" data-target="#oneDayFreeAccount" class="user-panel-card gradient-blue animated fadeInUp faster">
        <h4>تست رایگان یک روزه</h4>
        <span class="user-panel-card-icon icon-money_off"></span>

      </button>
      <button type="button"  data-toggle="modal" data-target="#buyProduct" class="user-panel-card gradient-green animated fadeInUp faster">
        <h4>خرید اشتراک دائمی</h4>
        <span class="user-panel-card-icon icon-shopping-cart"></span>

      </button>
    </div>

    <div class="container p-5 text-center ">
      <h5 class="text-right text-white mb-3">
        اشتراک های خریداری شده :
      </h5>
      <table class="table table-bordered bg-white">
        <thead>
        <tr>
          <th scope="col">ردیف</th>
          <th scope="col">نام کاربری</th>
          <th scope="col">رمز ورود</th>
          <th scope="col">آخرین ورود</th>
          <th scope="col">ورژن برنامه</th>
        </tr>
        </thead>
        <tbody>
        @php($i=0)
        @foreach($member_apps as $app)
        <tr>
          <th scope="row">{{++$i}}</th>
          <td>{{$app->user_name}}</td>
          <td>{{$app->plain_password}}</td>

            @if(strlen($app->auth_at) > 3)
                @php($date = new \App\Http\Controllers\Util\PDate())
                <td>{{gmdate("H:i", $app->auth_at) . ' - '. $date->toPersian(gmdate("Y-m-d\TH:i:s\Z", $app->auth_at), 'Y/m/d')}}</td>
            @else
                <td></td>
            @endif

          <td>{{$app->app_version}}</td>
        </tr>
        @endforeach

        </tbody>
      </table>
    </div>


    <!-- Change Password Modal -->
    <div class="modal fade" id="changePassword">
      <div class="modal-dialog">
        <div class="modal-content panel-modal">

          <div class="p-2">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <div class="modal-body">
              <form class="validate-form" method="post" action="{{url('/panel/change-password')}}">
              @csrf
              <span class="login100-form-title">تغییر رمز عبور</span>

              <div class="wrap-input100 validate-input @if ($errors->has('password')) alert-validate @endif " data-validate = "@if ($errors->has('password')) {{ $errors->first('password') }} @endif رمز عبور فعلی خود را وارد کنید.">
                <input class="input100{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" placeholder="رمز عبور">

                <span class="focus-input100"></span>
                <span class="symbol-input100">
							    <i class="fa fa-lock " style="transform: rotateY(180deg)" aria-hidden="true"></i>
						    </span>
              </div>
              <div class="wrap-input100 validate-input @if ($errors->has('new_password')) alert-validate @endif " data-validate = "@if ($errors->has('new_password')) {{ $errors->first('new_password') }} @endif رمز عبور جدید خود را وارد کنید.">
                <input class="input100{{ $errors->has('new_password') ? ' is-invalid' : '' }}" type="password" name="new_password" placeholder="رمز عبور جدید">

                <span class="focus-input100"></span>
                <span class="symbol-input100">
							    <i class="fa fa-lock " style="transform: rotateY(180deg)" aria-hidden="true"></i>
						    </span>
              </div>

              <div class="wrap-input100 validate-input @if ($errors->has('new_password_confirm')) alert-validate @endif " data-validate = "@if ($errors->has('new_password_confirm')) {{ $errors->first('new_password_confirm') }} @endif  تکرار رمز عبور خود را وارد کنید.">
                <input class="input100 {{ $errors->has('new_password_confirm') ? ' is-invalid' : '' }}" type="password" name="new_password_confirm" placeholder="تکرار رمز عبور جدید">
                <span class="focus-input100"></span>
                <span class="symbol-input100">
							    <i class="fa fa-lock" aria-hidden="true"></i>
						    </span>
              </div>

              <div class="container-login100-form-btn">
                <button type="submit" class="btn btn-primary btn-outline-dark px-5 py-3">
                  تغییر رمز
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Free One Day Account -->
    <div class="modal fade" id="oneDayFreeAccount">
      <div class="modal-dialog">
        <div class="modal-content panel-modal">

          <div class="p-2">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <div class="modal-body text-center d-flex flex-column justify-content-between  ">

                  <h4>حساب تست یک روزه</h4>
                  <input id="testUsername" class="input100 m-1 @if($trail == null) d-none @endif" type="text" name="username"  @if($trail != null) value="{{$trail->user_name}}" @endif disabled>
                  <input id="testPassword" class="input100 m-1 @if($trail == null) d-none @endif" type="text" name="password"  @if($trail != null) value="{{$trail->plain_password}}" @endif disabled>
              @if($trail == null)
                  <p class="mt-3">
                      توجه فرمائید که حساب یک روزه فقط یک بار قابل استفاده می باشد و بعد از 24 ساعت غیر فعال می شود.
                  </p>
              @endif

              @if($trail != null)
                  @php($date = new \App\Http\Controllers\Util\PDate())
                  @php($active = gmdate("H:i", strtotime($trail->created_at)) . ' - '. $date->toPersian($trail->created_at, 'Y/m/d'))
                  <p class="mt-3">
                     شما در  تاریخ {{$active}} تست یک روزه را فعال کرده اید
                  </p>

                  @if( (strtotime($trail->created_at) + 86400) > strtotime(date('Y-m-d H:i:s')))
                  <p class="mt-3 text-success">
                      وضعیت : فعال
                  </p>
                  @else
                      <p class="mt-3 text-danger">
                          وضعیت : منقضی شده
                      </p>
                  @endif

              @else


                  <div>
                      <p id="serverResponseMessage" class="alert d-none"></p>
                      <button id="generateFreeLicense" class="btn btn-success "  >فعال سازی <i  class="fa fa-spinner fa-spin loadingIc"></i></button>
                  </div>
              @endif

          </div>
        </div>
      </div>
    </div>

    <!-- Buy Product -->
    <div class="modal fade" id="buyProduct">
      <div class="modal-dialog">
        <div class="modal-content panel-modal">

          <div class="p-2">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <div class="modal-body">
            <h4 class="text-center">خرید اشتراک دایمی برنامه</h4>

            <p class="mt-3">

            </p>
            <form action="#" method="post">
              @csrf
              {{--                <div class="form-group">--}}
              {{--                  <label for="count" class="float-right">تعداد اشتراک :</label>--}}
              {{--                  <a href="#" data-toggle="tooltip" title="به ازای هر اشتراک ">*</a>--}}
              {{--                  <select class="form-control rounded-pill" name="" id="count">--}}
              {{--                    <option value="1">1</option>--}}
              {{--                    <option value="2">2</option>--}}
              {{--                    <option value="3">3</option>--}}
              {{--                    <option value="4">4</option>--}}
              {{--                    <option value="5">5</option>--}}
              {{--                  </select>--}}
              {{--                </div>--}}
              <div class="form-group">
                <label for="s" class="float-right">کد تخفیف :</label>
                <div class="d-flex w-100 ">
                  <input id="discountCode" class="input100 w-75" type="text" name="discount" placeholder="کد تخفیف خود را وارد کنید" >
                  <button id="btnDiscount" class="btn btn-primary btn-sm w-25" type="button"> اعمال <i class="fa fa-spinner fa-spin loadingIc"></i></button>
                </div>
              </div>
              <div class="alert alert-success text-right">
                <span>مبلغ قابل پرداخت :</span>
                <span id="price">300،000</span>
                <span>تومان</span>
              </div>
              <button class="btn btn-success float-right w-50" type="submit">پرداخت</button>
            </form>
          </div>
        </div>
      </div>
    </div>


  </div>

@endsection
