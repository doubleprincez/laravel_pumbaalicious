<?php

use Illuminate\Database\Seeder;

class InventoryItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\InventoryItem::class,20)->create();
    }
}
