<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParkinglotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parkinglot', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('smallSlotsCapacity');
            $table->integer('mediumSlotsCapacity');
            $table->integer('largeSlotsCapacity');
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
        Schema::dropIfExists('parkinglot');
    }
}
