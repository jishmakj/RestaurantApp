<?php

use Illuminate\Database\Seeder;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         App\Location::create(array(
        	'locationId'=>"1",
            'masterId' => "1",          
          	'name' => "Kakkanad",            	
        ));
         App\Location::create(array(
        	'locationId'=>"2",
            'masterId' => "1",          
          	'name' => "Manjummel",            	
        ));
         App\Location::create(array(
        	'locationId'=>"3",
            'masterId' => "1",          
          	'name' => "Palarivattom",            	
        ));
    }
}
