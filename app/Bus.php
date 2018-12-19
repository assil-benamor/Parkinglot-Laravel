<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bus extends Vehicle
{
    protected $table = 'bus';
    protected $writeTable = 'vehicles';
    protected $readTable = 'bus';
}
