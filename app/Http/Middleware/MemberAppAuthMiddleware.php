<?php

namespace App\Http\Middleware;

use App\Http\Controllers\Crypt\MAAuth;
use App\Http\Controllers\Ws\ws;
use Closure;

class MemberAppAuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

      MAAuth::init($request);
      $app = MAAuth::app();

      if ($app == null) {
        return ws::r(0, '', 200, 'لطفا وارد حساب کاربری خود شوید');
      }

      $client_key = $request->header('client-key');
      if($app->client_key != $client_key)  {
        return ws::r(0, '', 200, 'قبلا با سیستم دیگری به این اکانت وارد شده اید.لطفا دوباره از طریق این سیستم وارد حساب شوید.');
      }

      return $next($request);
    }
}
