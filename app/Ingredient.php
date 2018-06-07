<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    //
    protected $fillable = [
        'name','image',
    ];
    public function plats(){
        return $this->belongsToMany(Plat::class);
    }
}
