<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes;

    protected $fillable = [
        'name', 'is_admin', 'inviter_id', 'mobile', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];


    public function memberApps(){
      return $this->hasMany('App\MemberApp');
    }


}
