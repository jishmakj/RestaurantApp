<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Category::create(array(
        	'categoryId'=>"001",
            'name' => "Beverages", 
            'shortName' => "bv",          
          
            
        ));
        App\Category::create(array(
        	'categoryId'=>"002",
            'name' => "Cakes", 
            'shortName' => "ck",          
          
            
        ));
        App\Category::create(array(
        	'categoryId'=>"003",
            'name' => "Juices", 
            'shortName' => "jc",          
          
            
        ));
    }
}
