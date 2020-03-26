<?php


namespace App\Http\Controllers\Crypt;


use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Contracts\Encryption\EncryptException;
use Illuminate\Encryption\Encrypter;

class MyCrypt {
  private static $key = '2ac590752ac59075';


  public static function encrypt($str, $key = null){
    if (is_null($key)){
      $key = self::$key;
    }

    $crypt = new Encrypter($key,"AES-128-CBC");
    try {
      $result = $crypt->encryptString($str);
    }catch (EncryptException $e){
//      $result = $e->getMessage();
      $result = '#';
    }
    return $result;
  }



  public static function decrypt($encrypted, $key = null){
    if (is_null($key)){
      $key = self::$key;
    }

    $crypt = new Encrypter($key,"AES-128-CBC");
    try {
      $result = $crypt->decryptString($encrypted);
    }catch (DecryptException $e){
//      $result = $e->getMessage();
      $result = '#';
    }
    return $result;
  }


}