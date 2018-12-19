<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon ;
use App\Parkinglot ;
class SlotTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $parkinglots = Parkinglot::all()->pluck('id')->toArray();
        DB::table('slot')->insert([
            'size' => $faker->numberBetween($min = 1, $max = 3),
            #'available' => $faker->boolean(),
            'available' => $faker->numberBetween($min = 1, $max = 1),
            'parking_id' => 1,
            'created_at' =>  Carbon::now()->format('Y-m-d H:i:s') ,
            'updated_at'  => Carbon::now()->format('Y-m-d H:i:s') ,
        ]);
    }
}
