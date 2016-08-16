<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Order::create(array(
        	'orderId'=>"1",
            'orderTotal' => "3", 
            'cardNo' => "1",          
          	'totalItemsCount' => "3",  
          	'primaryItem'=>"1",
          	'extraItem'=>"1",
          	'modifierItem'=>"1",
            'locationId'=>"1",
          	'time'=>"10:10:10 am",
          	'Date'=>"14/8/16",
            
        ));
        App\Order::create(array(
        	'orderId'=>"2",
            'orderTotal' => "2", 
            'cardNo' => "2",          
          	'totalItemsCount' => "3",  
          	'primaryItem'=>"1",
          	'extraItem'=>"2",
          	'modifierItem'=>"2",
            'locationId'=>"2",
          	'time'=>"12:23:10 am",
          	'Date'=>"14/8/16",
            
        ));
         App\Order::create(array(
        	'orderId'=>"3",
            'orderTotal' => "5", 
            'cardNo' => "3",          
          	'totalItemsCount' => "3",  
          	'primaryItem'=>"1",
          	'extraItem'=>"3",
          	'modifierItem'=>"2",
            'locationId'=>"1",
          	'time'=>"15:30:20 pm",
          	'Date'=>"14/8/16",
            
        ));
    }
}