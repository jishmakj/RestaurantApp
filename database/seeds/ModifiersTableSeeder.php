<?php

use Illuminate\Database\Seeder;

class ModifiersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         App\Modifier::create(array(
        	'modifierId'=>"1",
            'item' => "1", 
            'modifierName' => "Cola",          
          	'shortname' => "cl",  
          	'description'=>"decribeeeee0",
          	"salesRate"=>"100",
            
        ));
         App\Modifier::create(array(
        	'modifierId'=>"2",
            'item' => "1", 
            'modifierName' => "Pepsy",          
          	'shortname' => "ps",  
          	'description'=>"decribeeeee1",
          	"salesRate"=>"101",
            
        ));
         App\Modifier::create(array(
        	'modifierId'=>"3",
            'item' => "1", 
            'modifierName' => "Sprite",          
          	'shortname' => "sp",  
          	'description'=>"decribeeeee2",
          	"salesRate"=>"110",
            
        ));
    }
}