<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parkinglot extends Model
{
    protected $table='parkinglot';
    public function slots()
    {
       return $this->hasMany(Slot::class , "parking_id");
   
    }
}
