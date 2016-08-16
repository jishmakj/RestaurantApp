<?php

use Illuminate\Database\Seeder;

class CardDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\CardDetails::create(array(
        	'cardId'=>"1",
            'cardHolderName' => "name1", 
            'contactNo' => "9638527410",          
          	'address' => "address1",  
            
        ));
        App\CardDetails::create(array(
        	'cardId'=>"2",
            'cardHolderName' => "name2", 
            'contactNo' => "9638527411",          
          	'address' => "address2",  
            
        ));
        App\CardDetails::create(array(
        	'cardId'=>"3",
            'cardHolderName' => "name3", 
            'contactNo' => "9638527412",          
          	'address' => "address3",  
            
        ));
    }
}
