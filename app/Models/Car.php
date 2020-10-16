<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public $fillable = ['title', 'madein', 'description'];

    public function carModels(){
        return $this->hasMany('App\Models\CarModel');
    }

    public function customers(){
        return $this->hasMany('App\Models\Customer');
    }
}
