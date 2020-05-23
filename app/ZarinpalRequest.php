<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ZarinpalRequest extends Model
{
  use SoftDeletes;

  protected $fillable = ['user_id', 'discount_id', 'type', 'authority', 'amount', 'data', 'is_verified', 'is_success', 'ref_id'];
}
