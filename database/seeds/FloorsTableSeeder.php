<?php

use Illuminate\Database\Seeder;

class FloorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Floor::create(array(
        	'floorId'=>"floor_1",
            'floorName' => "1st",           
          
            
        ));
        App\Floor::create(array(
        	'floorId'=>"floor_2",
            'floorName' => "2nd",           
           
            
        ));
        App\Floor::create(array(
        	'floorId'=>"floor_3",
            'floorName' => "3rd",           
           
            
        ));
    }
}
