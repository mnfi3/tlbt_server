<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use App\VerificationCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'full_name' => ['required', 'string', 'max:255'],
            'mobile' => ['required', 'unique:users', 'string', 'max:11', 'min:11'],
            'password' => ['required', 'string', 'min:6', 'max:255'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
      $vc = VerificationCode::validateToken($data['mobile_token'], $data['mobile']);
      if($vc == null) return view('auth.code')->with('error', 'زمان تایید موبایل شما به اتمام رسیده است لطفا دوباره امتحان کنید');

      $vc->expireToken();
      $vc->delete();

        return User::create([
            'name' => $data['full_name'],
            'is_admin' => 0,
            'inviter_id' => 0,
            'mobile' => $data['mobile'],
            'password' => Hash::make($data['password']),
        ]);


    }


    //--------------------------------my code--------------------------------------------
    public function sendCodePage(){
      return view('auth.code');
    }


    public function register1(Request $request){
      $this->validate($request, [
        'full_name' => 'required|string|max:255',
        'mobile' => 'required|unique:users|string|max:11|min:11',
        'password' => 'required|string|min:6|max:255',
      ]);

      $vc = VerificationCode::validateToken($request->mobile_token, $request->mobile);
      if($vc == null) return view('auth.code')->with('error1', 'زمان تایید موبایل شما به اتمام رسیده است لطفا دوباره امتحان کنید');

      $vc->expireToken();
      $vc->delete();


      User::create([
        'name' => $request->full_name,
        'is_admin' => 0,
        'inviter_id' => 0,
        'mobile' => $request->mobile,
        'password' => Hash::make($request->password),
      ]);

      return redirect('login')->with('mobile', $request->mobile)->with('password', $request->password);

    }




}
