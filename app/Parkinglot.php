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
                'vehicle_id' => $v->id,
                'vehicle_lisense' => $v->lisense ,
                'size' => $v->size
            ]);
            $s->available = 0 ;
            $v->isParked = 1 ;
            $s->save();
            $v->save();
            return true ;
        } 
        else {
            return false ;
        }
    }
    public function leaveVehicle(Vehicle $v) {
       
           
            $occSlot = OccupiedSlot::where('vehicle_id' ,$v->id)->first();
            $s = $this->slots()->where('id' ,$occSlot->slot_id )->first() ;
            $occSlot->delete();
            $s->available = 1 ;
            $v->isParked = 0 ;
            $s->save();
            $v->save();
    }
}
