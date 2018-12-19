<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slot extends Model
{
    public function parkingLot()
    {
        return $this->belongsTo(Parkinglot::class);
    }

    
    public function OccupiedSlot()
    {
        return $this->hasOne('App\OccupiedSlot');
    }
}
