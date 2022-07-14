<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCar extends Model
{
    protected $guarded=[];
    public $timestamps=false;
    protected $table= 'SubCar';
    public function car(){
        return $this->belongsTo(Car::class);
    }
    public function advcar(){
        return $this->hasMany(AdvCars::class);
    }
}
