<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'brand', 'model', 'year', 'maxSpeed', 'isAutomatic', 'engine', 'numberOfDoors'
    ];
}
