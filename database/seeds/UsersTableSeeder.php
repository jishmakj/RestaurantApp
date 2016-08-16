<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create(array(
        	'userId'=>"user_1",
            'name' => "Akash",           
            'password' =>"123456",
            
        ));
        App\User::create(array(
        	'userId'=>"user_2",
            'name' => "Ben",           
            'password' =>"123456",
            
        ));
        App\User::create(array(
        	'userId'=>"user_3",
            'name' => "Nila",           
            'password' =>"123456",
            
        ));
    }
}
