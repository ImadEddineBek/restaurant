<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    //

    const SMOKER ='1';
    const NON_SMOKER ='0';
    const PARTY ='1';
    const NON_PARTY ='0';


    protected $fillable = [
        'nb_places','smoker','party',
    ];

    public function isSmoker(){
        return $this->smoker == Restaurant::SMOKER;
    }


    public function isParty(){
        return $this->party == Restaurant::PARTY;
    }


    public function restaurant(){
        return $this->belongsTo(Restaurant::class);
    }

    public function reservations(){
        return $this->hasMany(Reservation::class);
    }
}
