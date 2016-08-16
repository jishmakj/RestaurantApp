<?php

use Illuminate\Database\Seeder;

class MasterGroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       App\MasterGroup::create(array(
        	'masterId'=>"1",
            'name' => "mastergrup1",          
          	'details' => "det1",            	
        ));
       App\MasterGroup::create(array(
        	'masterId'=>"2",
            'name' => "mastergrup2",          
          	'details' => "det2",            	
        ));
       App\MasterGroup::create(array(
        	'masterId'=>"3",
            'name' => "mastergrup3",          
          	'details' => "det3",            	
        ));
    }
}
