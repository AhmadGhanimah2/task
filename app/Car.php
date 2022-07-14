<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $guarded=[];
    public $timestamps=false;
    public function subcar(){
        return $this->hasMany(subCar::class);
    }
}
