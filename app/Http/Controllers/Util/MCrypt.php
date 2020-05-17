<?php
/**
 * Created by PhpStorm.
 * User: Mohsen
 * Date: 5/12/2020
 * Time: 9:00 PM
 */

namespace App\Http\Controllers\Util;


use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Contracts\Encryption\EncryptException;
use Illuminate\Encryption\Encrypter;

class MCrypt {

  //default crypt key
  private static $key = '2ac590752ac59075';


  public static function encrypt($str, $key = null){
    if (is_null($key)){
      $key = self::$key;
    }

    $crypt = new Encrypter($key,"AES-128-CBC");
    try {
      $result = $crypt->encryptString($str);
    }catch (EncryptException $e){
      $result = $e->getMessage();
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
      $result = $e->getMessage();
    }
    return $result;
  }



  const RSA_PUBLIC_KEY = "-----BEGIN PUBLIC KEY----- MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDDkkehbJ/ipNwH8MhhCRktoiHS XqmgWoG6q9gBjwO6Nx7dMI3NKnEWegLnu0Yk8VYHX88b3ALRtxL6W2nf+sWVo0O8 Ci7tcKnrJIywXyHJCO/8T9R1WfLijJM7AAKomviBpd7Mc5Nt3UK8aHA0+7HnSHXy 1RN9MLHU4mpfTRApWwIDAQAB -----END PUBLIC KEY-----";
  const RSA_PRIVATE_KEY = "-----BEGIN RSA PRIVATE KEY----- MIICXgIBAAKBgQDDkkehbJ/ipNwH8MhhCRktoiHSXqmgWoG6q9gBjwO6Nx7dMI3N KnEWegLnu0Yk8VYHX88b3ALRtxL6W2nf+sWVo0O8Ci7tcKnrJIywXyHJCO/8T9R1 WfLijJM7AAKomviBpd7Mc5Nt3UK8aHA0+7HnSHXy1RN9MLHU4mpfTRApWwIDAQAB AoGBAJ2egHKeTEHq4pbXvXdPUOaRXDbjKkzdhN7A7sdazwM+t3ZHUpG/GgOmdD71 lTPi+ZXZ5t6qM+93YCk8kZj90E0+DAK7btqV8MiUcFq3im3e1WA0ZSZc1Bw93egj YV+jUbeOuESIwUuuuC/a2Y3QItqhYG6QO27dysx0KDOS2Vk5AkEA970OlusunPPx uv3CpbTLLg3PEzINr00VI0guEHhzT+v0r55KAJQW0G3UBo5sLMBhSRl3vmNBy1xp QLelOS7ylwJBAMoX31cn0YMeELCuAVH4qvg5d2DpGIixpv8DW4Yyxdu/Kw0A4Vzh 8AXbm6YI7GjAZKVd3gWdBODsHnPNGqiNy90CQQCM/NH9v5BCkG4EngAVb+OlrQQp B3ZUSoj6EEzu4K23UTBqdanl1GF7ctWUeZ9EhKOZB15nQnOiOVBJHXpxJa+3AkB7 wl7Net79Er5Z1FWOo1/gHyESQez6WQDRjnbQGeu9BLcSgYWBYgOhMrmA1logVCHO e0tp2JySOUb015gJvLwpAkEA6h8apU//Bnvc3MgZyZUV9reLeT+lniCIRGIcZocT GyToyVCFyklG7te15/YS7v8w/vtAEmR3YHL0mkcF3mu4CQ== -----END RSA PRIVATE KEY-----";

  public static function encryptRSA_PUB($plain_text)
  {
    $rsa = new RSA();
    $rsa->loadKey(self::RSA_PUBLIC_KEY);
    return $rsa->encrypt($plain_text);
  }

  public static function encryptRSA_PRV($plain_text)
  {
    $rsa = new RSA();
    $rsa->loadKey(self::RSA_PRIVATE_KEY);
    return $rsa->encrypt($plain_text);
  }

  public static function decryptRSA_PRV($cipher_text)
  {
    $rsa = new RSA();
    $rsa->loadKey(self::RSA_PRIVATE_KEY);
    return $rsa->decrypt($cipher_text);
  }

  public static function decryptRSA_PUB($cipher_text)
  {
    $rsa = new RSA();
    $rsa->loadKey(self::RSA_PUBLIC_KEY);
    return $rsa->decrypt($cipher_text);
  }

}