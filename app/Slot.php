<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slot extends Model
{
    protected $table ='slot';
    public function parkingLot()
    {
        return $this->belongsTo(Parkinglot::class);
    }

    
    public function OccupiedSlot()
    {
        return $this->hasOne('App\OccupiedSlot');
    }
}
