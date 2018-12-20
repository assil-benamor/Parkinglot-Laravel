<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOccupiedslotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('occupiedslots', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('slot_id')->unsigned()->index()->nullable();
            $table->foreign('slot_id')->references('id')->on('slot');
            $table->integer('vehicle_id')->unsigned()->index()->nullable();
            $table->foreign('vehicle_id')->references('id')->on('vehicles');
            $table->integer('size');
            $table->string('vehicle_lisense');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('occupiedslots');
    }
}
