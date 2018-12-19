<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Motorbike extends Vehicle
{
    protected $table = 'motorbikes';
    protected $writeTable = 'vehicles';
    protected $readTable = 'motorbikes';
}
