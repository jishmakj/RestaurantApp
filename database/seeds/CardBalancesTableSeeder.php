<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class CardBalancesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\CardBalance::create(array(
          'cardId'=>"001",
            'mainBalance' => "1200", 
            'bonusBalance' => "100",          
            'bonusPoints' => "1",  
            'activationDate'=>"20/1/2016",
            'lastTransactionDate'=>"15/7/2016",
            'expiryDate'=>"20/1/2026",

            
        ));
     
       App\CardBalance::create(array(
          'cardId'=>"002",
            'mainBalance' => "1000", 
            'bonusBalance' => "100",          
            'bonusPoints' => "15",  
            'activationDate'=>"22/2/2015",
            'lastTransactionDate'=>"1/8/2016",
            'expiryDate'=>"22/4/2020",

            
        ));
        App\CardBalance::create(array(
          'cardId'=>"003",
            'mainBalance' => "1800", 
            'bonusBalance' => "150",          
            'bonusPoints' => "12",  
            'activationDate'=>"20/5/2012",
            'lastTransactionDate'=>"15/7/2016",
            'expiryDate'=>"20/5/2018",

            
        ));
        
    }
}