<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    //

    const SMOKER ='1';
    const NON_SMOKER ='0';
    const PARKING ='1';
    const NON_PARKING ='0';
    const PARTY ='1';
    const NON_PARTY ='0';

    protected $fillable = [
        'name','smoker', 'parking', 'party','image','address','lat','long',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */



    public function isSmoker(){
        return $this->smoker == Restaurant::SMOKER;
    }

    public function isParking(){
        return $this->parking == Restaurant::PARKING;
    }

    public function isParty(){
        return $this->party == Restaurant::PARTY;
    }

    public function tables(){
        return $this->hasMany(Table::class);
    }

    public function events(){
        return $this->hasMany(Event::class);
    }
}
