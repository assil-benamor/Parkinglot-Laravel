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
         
         for($i = 1;$i<=10;$i++)
         {
         $this->call(CarTableSeeder::class);
         }
    }
}
