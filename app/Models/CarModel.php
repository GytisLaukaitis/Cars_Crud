<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    public $fillable = ['title', 'yearsReleased', 'topSpeed', 'price', 'description', 'car_id'];

    public function car(){
        return $this->belongsTo('App\Models\Car');
    }
}
