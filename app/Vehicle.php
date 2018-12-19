<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use  Illuminate\Support\Facades\App;

class Vehicle extends Model
{
    protected $table = 'vehicles';
    protected $writeTable = 'vehicles';
    protected $readTable = 'vehicles';
    

	protected function setWriteTable($table) {
        
        $this->writeTable = $table;
    }

    protected function setReadTable($table) {

        $this->readTable = $table;
    }

    protected function getWriteTable() {
        
        return $this->writeTable;
    }

    protected function getReadTable() {

        return $this->readTable;
    } 
	
    protected function toReadMode() {

        $this->setTable($this->getReadTable());
    }

    protected function toWriteMode() {

        $this->setTable($this->getWriteTable());
    }
	
	
	public function save(array $options = []) {

		$this->toWriteMode();

        $saved = parent::save($options);

        $this->toReadMode();

        return $saved;
    }

    public function OccupiedSlot()
    {
        return $this->hasOne('App\OccupiedSlot');
    }
}
