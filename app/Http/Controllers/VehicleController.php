<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class VehicleController extends Controller
{

    public function getAllVehicles () {
        $vehicles = App\Vehicle::all();
        return $vehicles;
    }
    public function parkVehicle($lisense) {
        $v = App\Vehicle::where('lisense' ,$lisense)->first();
        if ($v) {
            
            if ($v->isParked) {
                return response()->json([
                    'Park status' => 'Vehicle already parked' 
                ]);  
            }
            
            $p = App\Parkinglot::first();
            if ($p->parkVehicle($v)) {
                return response()->json([
                    'Park status' => 'Vehicle parked successfully' 
                ]);
            } else {
                return response()->json([
                    'Park status' => 'The parking lot is full' 
                ]);
            }
        }
        else {
            return response()->json([
                'Park status' => 'Vehicle does not exist' 
            ]);
        }
    }

    public function leaveVehicle($lisense) {
        $v = App\Vehicle::where('lisense' ,$lisense)->first();
       
        if ($v) {
            if (!$v->isParked) {
                return response()->json([
                    'Park status' => 'Vehicle is not in the park' 
                ]);  
            }

            $p = App\Parkinglot::first();
            $p->leaveVehicle($v) ;

            return response()->json([
            'Park status' => 'Vehicle leaved successfully' 
            ]);
            
        }
        else {
            return response()->json([
                'Park status' => 'Vehicle does not exist' 
            ]);
        }
    }
}
