<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(ParkinglotTableSeeder::class);
         $this->call(SlotTableSeeder::class);
         $this->call(CarTableSeeder::class);
    }
}
