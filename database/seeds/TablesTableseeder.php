<?php

use Illuminate\Database\Seeder;

class TablesTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         App\Table::create(array(
        	'tableId'=>"100",
            'name' => "table1",           
            'floorId' =>"1",
            
        ));
         App\Table::create(array(
        	'tableId'=>"101",
            'name' => "table2",           
            'floorId' =>"1",
            
        ));
         App\Table::create(array(
        	'tableId'=>"302",
            'name' => "table30",           
            'floorId' =>"2",
            
        ));
    }
}
