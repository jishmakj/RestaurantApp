<?php

use Illuminate\Database\Seeder;

class OrderItemDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\OrderItemDetail::create(array(
        	'orderId'=>"1",
        	'itemId'=>"1",
        	'itemType'=>"type1",
        	'quantity'=>"10",
        	'itemTotal'=>"3",
        	'salesRate'=>"100",
        	'itemCount'=>"3",
        	'payment'=>"123",
            
            
        ));
        App\OrderItemDetail::create(array(
        	'orderId'=>"2",
        	'itemId'=>"1",
        	'itemType'=>"type2",
        	'quantity'=>"5",
        	'itemTotal'=>"3",
        	'salesRate'=>"600",
        	'itemCount'=>"3",
        	'payment'=>"852",
            
            
        ));
        App\OrderItemDetail::create(array(
        	'orderId'=>"3",
        	'itemId'=>"1",
        	'itemType'=>"type3",
        	'quantity'=>"15",
        	'itemTotal'=>"3",
        	'salesRate'=>"500",
        	'itemCount'=>"3",
        	'payment'=>"620",
            
            
        ));
    }
}