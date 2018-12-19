<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slot', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('size');
            $table->boolean('available');
            $table->timestamps();
            $table->integer('parking_id')->unsigned()->index()->nullable();
            $table->foreign('parking_id')->references('id')->on('parkinglot');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('slot');
    }
}
