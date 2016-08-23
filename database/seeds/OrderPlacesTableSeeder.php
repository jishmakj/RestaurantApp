<?php

use Illuminate\Database\Seeder;

class OrderPlacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\OrderPlace::create(array(
        	'userId'=>"1",
        	'cardId'=>"1",
            'floorId'=>"1",
            'tableId'=>"2",
            
            
        ));
         App\OrderPlace::create(array(
        	'userId'=>"2",
        	'cardId'=>"2",
            'floorId'=>"1",
            'tableId'=>"1",
            
            
        ));
          App\OrderPlace::create(array(
        	'userId'=>"3",
        	'cardId'=>"3",
            'floorId'=>"2",
            'tableId'=>"3",
            
            
        ));
    }
}