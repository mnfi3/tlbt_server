<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MemberApp extends Model
{
  use SoftDeletes;

  protected $fillable = ['user_id', 'user_name', 'client_key', 'password', 'plain_password', 'token_key', 'app_version', 'auth_at', 'is_trail'];

  protected $hidden = ['client_key', 'password', 'plain_password', 'token_key', 'auth_at', 'is_trail'];
}
