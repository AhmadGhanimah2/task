<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdvCars extends Model
{
    protected $guarded=[];
    public $timestamps=false;
    public function SubCar(){
        return $this->belongsTo(SubCar::class);
    }
}
