<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plat extends Model
{
    //
    protected $fillable = [
        'name','image','description', 'nb_people',
    ];

    public function restaurants(){
        return $this->belongsToMany(Restaurant::class);
    }

    public function ingredients(){
        return $this->belongsToMany(Ingredient::class);
    }
}
