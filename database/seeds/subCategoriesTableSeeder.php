<?php

use Illuminate\Database\Seeder;

class subCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Subcategory::create(array(
        	'categoryId'=>"1",
            'name' => "Bear", 
            'shortName' => "be",          
          
            
        ));
         App\Subcategory::create(array(
        	'categoryId'=>"1",
            'name' => "Wine", 
            'shortName' => "wn",          
          
            
        ));
          App\Subcategory::create(array(
        	'categoryId'=>"1",
            'name' => "champagne", 
            'shortName' => "ch",          
          
            
        ));
    }
}