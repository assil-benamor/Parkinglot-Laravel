<?php
use App\OccupiedSlot;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/parkinglot/getstatus', 'ParkinglotController@getStatus');
Route::get('/vehicle/park/{lisense}', 'VehicleController@parkVehicle');
Route::get('/vehicle/leave/{lisense}', 'VehicleController@leaveVehicle');
Route::get('/vehicle/getall', 'VehicleController@getAllVehicles');

