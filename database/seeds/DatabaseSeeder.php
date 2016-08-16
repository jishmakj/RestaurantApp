<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        Eloquent::unguard(); 
        $this->call('UsersTableSeeder');
        $this->call('FloorsTableSeeder');
        $this->call('CategoriesTableSeeder');
        $this->call('CardDetailsTableSeeder');
        $this->call('CardBalancesTableSeeder');
        $this->call('subCategoriesTableSeeder');
        $this->call('ItemsTableSeeder');
        $this->call('ModifiersTableSeeder');
        $this->call('ExtrasTableSeeder');
        $this->call('MasterGroupsTableSeeder');
        $this->call('LocationsTableSeeder');
        $this->call('OrdersTableSeeder');
        $this->call('OrderPlacesTableSeeder');
        $this->call('OrderItemDetailsTableSeeder');
        Eloquent::reguard();
    }
}
