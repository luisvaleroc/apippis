<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;

//use Caffeinated\Shinobi\Concerns\HasRolesAndPermissions;
use Caffeinated\Shinobi\Traits\ShinobiTrait;
use Laravel\Passport\HasApiTokens;


use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Notifications\ResetPasswordNotification;

class User extends Authenticatable
{
    use HasApiTokens, ShinobiTrait;
    //use HasRolesAndPermissions;
    //use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'brand_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

       /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }
    public function scopeName($query, $name){
       if (trim($name) != ""){
        $query->where('name', "LIKE",  "%$name%");
       }
    }

    // public function Brand()
    //  {

    //     return $this->hasMany('App\Brand');
    //  }

     public function Brand(){
        return $this->belongsTo('App\Brand');
    }
    public function Store(){
        return $this->belongsTo('App\Store');
    }
}
