<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;


    protected $fillable = [
        'name', 'email', 'password','user_type'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function profile(){
        return $this->hasOne('App\Profile');
    }

    public function company(){
        return $this->hasOne('App\Company');
    }

    public function favourites(){
        return $this->belongsToMany(Job::class,'favourites','user_id','job_id')->withTimestamps();
    }

    public function roles(){
        return $this->belongsToMany('App\Role');
    }

}
