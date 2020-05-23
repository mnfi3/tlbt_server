<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Discount extends Model
{
  use SoftDeletes;

  protected $fillable = ['code', 'type', 'percent', 'count', 'remaining', 'started_at', 'finished_at'];
}
