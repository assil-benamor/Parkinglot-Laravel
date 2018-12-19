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
        $smallSlots = $faker->numberBetween($min = 1, $max = 20) ;
        $mediumSlots = $faker->numberBetween($min = 1, $max = 20) ;
        $largeSlots = $faker->numberBetween($min = 1, $max = 20) ;
        DB::table('parkinglot')->insert([
            'id' => 1 ,
            'name' => str_random(10),
            'smallSlotsCapacity' => $smallSlots,
            'mediumSlotsCapacity' => $mediumSlots,
            'largeSlotsCapacity' =>  $largeSlots,
            'created_at' =>  Carbon::now()->format('Y-m-d H:i:s') ,
            'updated_at'  => Carbon::now()->format('Y-m-d H:i:s') ,
        ]);
   

        for($i = 1;$i<=$smallSlots;$i++)
            {
                DB::table('slot')->insert([
                    'size' => 1,
                    'available' => 1,
                    'parking_id' => 1,
                    'created_at' =>  Carbon::now()->format('Y-m-d H:i:s') ,
                    'updated_at'  => Carbon::now()->format('Y-m-d H:i:s') ,
                ]);        
            }    

        for($i = 1;$i<=$mediumSlots;$i++)
            {
                DB::table('slot')->insert([
                    'size' => 2,
                    'available' => 1,
                    'parking_id' => 1,
                    'created_at' =>  Carbon::now()->format('Y-m-d H:i:s') ,
                    'updated_at'  => Carbon::now()->format('Y-m-d H:i:s') ,
                ]);        
            }    

        for($i = 1;$i<=$largeSlots;$i++)
        {
            DB::table('slot')->insert([
                'size' => 3,
                'available' => 1,
                'parking_id' => 1,
                'created_at' =>  Carbon::now()->format('Y-m-d H:i:s') ,
                'updated_at'  => Carbon::now()->format('Y-m-d H:i:s') ,
            ]);        
        }   

}
}
