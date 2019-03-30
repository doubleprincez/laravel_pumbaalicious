<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
        $this->call(AdCategoriesTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(AddressesTableSeeder::class);
        $this->call(DeliveriesTableSeeder::class);
        $this->call(SubscriptionPlansTableSeeder::class);
        $this->call(SubscriptionsTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(InventoryItemsTableSeeder::class);
        $this->call(PaymentsTableSeeder::class);

    }
}
