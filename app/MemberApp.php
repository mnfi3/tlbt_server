<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MemberApp extends Model
{
  use SoftDeletes;

  protected $fillable = ['user_id', 'user_name', 'client_key', 'password', 'token_key', 'app_version'];

  protected $hidden = ['client_key', 'password', 'token_key'];
}
