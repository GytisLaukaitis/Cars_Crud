<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public $fillable = ['name', 'surname', 'phone', 'email', 'comment', 'car_id'];

    public function car(){
        return $this->belongsTo('App\Models\Car');
    }
}
