<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends \TCG\Voyager\Models\User
{
    use Notifiable;

    const VERIFIED_USER ='1';
    const UNVERIFIED_USER ='0';
    const CASHIER_USER ='2';
    const ADMIN_USER ='1';
    const NORMAL_USER ='0';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'user_name',
        'email',
        'password',
        'type',
        'Birth_Date',
        'phone_number',
        'location',
        'verified',
        'verification_token',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token','verification_token',
    ];


    public function isVerified(){
        return $this->verified == User::VERIFIED_USER;
    }

    public function isAdmin(){
        return $this->type == User::ADMIN_USER;
    }

    public function isCashier(){
        return $this->type == User::CASHIER_USER;
    }

    //static because we don't need any object related attributes and the 40 is to make sure that no brut force will be used on it
    public static function generateVerificationCode(){
        return str_random(40);
    }

    public function reservations(){
        return $this->hasMany(Reservation::class);
    }
    public function events(){
        return $this->hasMany(Event::class);
    }
}
