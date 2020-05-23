@extends('layouts.app')

@section('content')
  @include('include.auth_head')

  <div class="panel-container">


    <div id="particles-panel-js"></div>

    <div class="container text-center d-flex justify-content-center">
      <div class="payment-result-card d-flex flex-column align-items-center animated fadeInUp">
        <div class="alert @if($success == 1) alert-success @else alert-danger @endif  payment-result-card-header ">
            @if($success == 1)
                خرید با موفقیت انجام گرفت
            @else
                خطایی در پرداخت رخ داده است.لطفا دوباره امتحان کنید
            @endif
        </div>
          @if($success == 1)
        <div class="mt-4 p-5 payment-result-card-body w-100">
          <div class="d-flex justify-content-between">
            <h5>کد پیگیری : </h5>
            <h5>{{$ref_id}}</h5>
          </div>
          <div class="d-flex justify-content-between mt-2">
            <h5>مبلغ : </h5>
            <h5>{{number_format($price)}} <span>تومان</span></h5>
          </div>
        </div>
          @endif
        <a class="btn btn-primary mb-2 w-25 " href="{{url('/panel')}}">پنل کاربری</a>
      </div>
    </div>




  </div>

@endsection
