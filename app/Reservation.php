<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    //
    const SMOKER ='1';
    const NON_SMOKER ='0';
    const PARKING ='1';
    const NON_PARKING ='0';
    const CONFIRMED ='1';
    const UNCONFIRMED ='0';

    protected $fillable = [
        'start','end','nb_places', 'confirmed','parking','smoker',
    ];


    public function isConfirmed(){
        return $this->confirmed == Reservation::CONFIRMED;
    }

    public function isParking(){
        return $this->parking == Reservation::PARKING;
    }

    public function isSmoker(){
        return $this->smoker == Reservation::SMOKER;
    }

    public function table(){
        return $this->belongsTo(Table::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
