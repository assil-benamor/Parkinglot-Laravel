<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OccupiedSlot extends Model
{
    protected $table = 'occupiedslots';
    protected $guarded = ['id'];
    public function Vehicle()
    {
        return $this->belongsTo('App\Vehicle');
    }

    
    public function Slot()
    {
        return $this->belongsTo('App\Slot');
    }


}
