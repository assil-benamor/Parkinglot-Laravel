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

    public function getFreeSlotsNumber($size){
       return  $this->slots()->where('size' ,$size )->where('available', 1)->count();

    }
    public function parkVehicle(Vehicle $v) {
        if ($this->getFreeSlotsNumber($v->size)>0) {
            $s = $this->slots()->where('size' ,$v->size )->where('available', 1)->first() ;
            OccupiedSlot::create([
                'slot_id' => $s->id ,
                'vehicle_id' => $v->id
            ]);
            $s->available = 0 ;
            $v->isParked = 1 ;
            $s->save();
            $v->save();

        } 
    }
}
