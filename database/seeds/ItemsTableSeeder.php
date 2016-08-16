<?php

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Item::create(array(
        	'itemId'=>"1",
            'itemName' => "King Fisher", 
            'description' => "qwertyuiopasdfghhjkl", 
            'salesRate' => "90.00",   
            'otherLang' => "French",   
            'categoryId' => "1",   
            'subCategoryId' => "1",            
          
            
        ));
    }
}
