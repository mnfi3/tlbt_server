<?php


namespace App\Http\Controllers\Crypt;


class Jwt {

  private $token_key = '9u8jk434j3098u43';
  private const TOKEN_LIFETIME = 31536000;// 1 year




  public static function getToken($model_id, $model_key){

    $tokenId    = base64_encode($model_id . '-' . time());
    $issuedAt   = time();
    $notBefore  = $issuedAt ;
    $expire     = $issuedAt + self::TOKEN_LIFETIME;
    $serverName = 'telbot';
    $data = [
      'iat'  => $issuedAt,         // Issued at: time when the token was generated
      'jti'  => $tokenId,          // Json Token Id: an unique identifier for the token
      'iss'  => $serverName,       // Issuer
      'nbf'  => $notBefore,        // Not before
      'exp'  => $expire,           // Expire
      'data' => [                  // Data related to the signer user
        'model_id'   => $model_id, // model_id from the model table
        'model_key'   => $model_key, // model_key from the model table
      ]
    ];

    return self::generateToken($data);
  }

  public static function getModeldata($token){
    return self::decodeToken($token);
  }






  private static function generateToken($data){
    $data = json_encode($data);
    $data = MyCrypt::encrypt($data);
    return $data;
  }



  private static function decodeToken($token){
    $token = MyCrypt::decrypt($token);
    $data = array();

    if ($token == '#') {
      $data['status'] = 0;
      $data['message'] = 'invalid token';
      $data['model_id'] = 0;
      $data['model_key'] = '#';
    }else{
      $obj = json_decode($token);
//    if ($data->iat < time()) return ['model_id' => 0, 'model_key' => ''];
      $data['status'] = 1;
      $data['message'] = 'token valid';
      $data['model_id'] =  $obj->data->model_id;
      $data['model_key'] = $obj->data->model_key;
    }

    return json_encode($data);
  }

}