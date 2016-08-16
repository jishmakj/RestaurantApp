<?php

use Illuminate\Database\Seeder;

class ExtrasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Extra::create(array(
        	'extrasId'=>"1",
            'item' => "1", 
            'extrasName' => "FrenchFrice",          
          	'shortname' => "ff",  
          	'description'=>"decribeeeee0",
          	"salesRate"=>"10",
            
        ));
         App\Extra::create(array(
        	'extrasId'=>"2",
            'item' => "1", 
            'extrasName' => "Nuts",          
          	'shortname' => "nt",  
          	'description'=>"decribeeeee1",
          	"salesRate"=>"200",
            
        ));
          App\Extra::create(array(
        	'extrasId'=>"3",
            'item' => "1", 
            'extrasName' => "Dates",          
          	'shortname' => "dt",  
          	'description'=>"decribeeeee2",
          	"salesRate"=>"50",
            
        ));

    }
}