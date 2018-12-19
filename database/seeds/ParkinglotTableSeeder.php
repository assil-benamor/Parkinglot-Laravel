<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon ;
class ParkinglotTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $faker = Faker::create();
        DB::table('parkinglot')->insert([
            'name' => str_random(10),
            'smallSlotsCapacity' => $faker->numberBetween($min = 1, $max = 100),
            'mediumSlotsCapacity' => $faker->numberBetween($min = 1, $max = 100),
            'largeSlotsCapacity' => $faker->numberBetween($min = 1, $max = 100),
            'created_at' =>  Carbon::now()->format('Y-m-d H:i:s') ,
            'updated_at'  => Carbon::now()->format('Y-m-d H:i:s') ,
        ]);
    }
}
