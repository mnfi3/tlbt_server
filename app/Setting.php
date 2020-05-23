<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Setting extends Model
{
  use SoftDeletes;

  protected $fillable = ['key', 'value', 'description', 'image', 'file'];

  //keys

  const MEMBER_APP_PRICE = 'member_app_price';

  public static function getWithKey($key){
    $setting = Setting::orderBy('id', 'desc')->where('key', '=', $key)->first();
    return $setting;
  }
}
