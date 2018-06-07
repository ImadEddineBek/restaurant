<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //


    const CONFIRMED ='1';
    const UNCONFIRMED ='0';


    protected $fillable = [
        'start','end','nb_places', 'confirmed',
    ];


    public function isConfirmed(){
        return $this->confirmed == Event::CONFIRMED;
    }

    public function restaurant(){
        return $this->belongsTo(Restaurant::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
