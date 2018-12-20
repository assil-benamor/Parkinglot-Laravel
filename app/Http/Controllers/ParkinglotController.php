<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class ParkinglotController extends Controller
{
    public function getStatus()
    {
        $p = App\Parkinglot::first();
        $occupiedSlotsList = App\OccupiedSlot::all();
        $occupiedSmallSlotsCount = App\OccupiedSlot::where('size',1)->count();
        $occupiedMediumSlotsCount = App\OccupiedSlot::where('size',2)->count();
        $occupiedLargeSlotsCount = App\OccupiedSlot::where('size',3)->count();
        foreach ($occupiedSlotsList as $occupiedSlot ) {

            $slots[] = array(
            'Slot id' => $occupiedSlot->id, 
            'Slot size' => $occupiedSlot->size, 
            'Vehicle id' =>$occupiedSlot->vehicle_id, 
            'Vehicle lisense' =>$occupiedSlot->vehicle_lisense
             );

        
        }

        $smallSlots[] = array(
            'Capacity' => $p->smallSlotsCapacity, 
            'Free slots' => $p->smallSlotsCapacity - $occupiedSmallSlotsCount, 
            );
        
        $mediumSlots[] = array(
            'Capacity' => $p->mediumSlotsCapacity, 
            'Free slots' => $p->mediumSlotsCapacity - $occupiedMediumSlotsCount, 
        ); 
                
        $largeSlots[] = array(
            'Capacity' => $p->largeSlotsCapacity, 
            'Free slots' => $p->largeSlotsCapacity - $occupiedLargeSlotsCount, 
        ); 


    


        return response()->json([
            'Parking Name' => $p->name,
            'Small Slots ' => $smallSlots ,
            'Medium Slots ' => $mediumSlots,
            'Large Slots ' => $largeSlots ,
            'Occupied Slots' => $slots

        ]);
       
    }

}
