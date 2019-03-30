<?php

use App\Delivery;
use Illuminate\Database\Seeder;

class DeliveriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Delivery::create([
            'title'=>'Pay Online',
            'description'=> 'information about pay online',
            'type'=>'0'
        ]);
        Delivery::create([
           'title'=>'Pay On Delivery',
           'description'=>'Information about payment on delivery',
           'type'=>'1'
        ]);
        Delivery::create([
            'title'=>'Both Payment Option',
            'description'=>'Description of both payment option ',
            'type'=>'2'
        ]);
    }
}
