<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon ;
class CarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        DB::table('vehicles')->insert([
            'size' => $faker->numberBetween($min = 1, $max = 3),
            'lisense' => str_random(10),
            'color' => str_random(10),
            'isParked' => false,
            'created_at' =>  Carbon::now()->format('Y-m-d H:i:s') ,
            'updated_at'  => Carbon::now()->format('Y-m-d H:i:s') ,
        ]);
    }
}
