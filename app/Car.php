<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Vehicle
{
    protected $table = 'cars';
    protected $writeTable = 'vehicles';
    protected $readTable = 'cars';
    
}
