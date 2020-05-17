<?php

namespace App;

use App\Http\Controllers\Util\MCrypt;
use DateInterval;
use DateTime;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VerificationCode extends Model
{
  use SoftDeletes;

  const CODE_EXPIRE_DURATION = 4;//minutes
  const TOKEN_EXPIRE_DURATION = 30;//minutes

  protected $fillable = ['mobile', 'code', 'token', 'is_verified', 'expired_at'];




  public static function generateCode($mobile){
    $vc = new VerificationCode();
    $vc->mobile = $mobile;
    $vc->code = generateRandomNumber(5);
    $vc->token = '';
    $vc->is_verified = 0;
    $dateTime = new DateTime(date('Y-m-d H:i:s'));
    $dateTime->add(new DateInterval('PT' . self::CODE_EXPIRE_DURATION . 'M'));
    $time = $dateTime->format('Y-m-d H:i:s');
    $vc->expired_at = $time;
    $vc->save();
    return $vc;
  }


  public function expireToken(){
    $now = date('Y-m-d H:i:s');
    $obj = json_decode(MCrypt::decrypt($this->token));
    $obj->token_status = 'expired';
    $obj->token_expired_at =  $now;
    $this->token = MCrypt::encrypt(json_encode($obj));
    $this->save();
  }

  public static function validateToken($token, $mobile){
    $vc = VerificationCode::orderBy('id', 'desc')->where('mobile', '=', $mobile)->where('token', '=', $token)->where('is_verified', '=', 1)->first();
    if ($vc == null) return null;

    $obj = json_decode(MCrypt::decrypt($token));
    if($obj->token_status == 'expired')  return null;

    $token_expired_at = new DateTime($obj->token_expired_at);
    $now = new DateTime(date('Y-m-d H:i:s'));
    if ($token_expired_at < $now) return null;

    return $vc;
  }
}
