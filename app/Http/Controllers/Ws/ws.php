<?php


namespace App\Http\Controllers\Ws;


class ws {
  public static function r($status, $data, $httpCode = 200, $message = ''){
    if($data === '') $data = null;
    if($data === []) $data = null;
    return response()->json(['status' => $status, 'message' => $message, 'data' => $data], $httpCode )->setEncodingOptions(JSON_UNESCAPED_UNICODE);
  }
}