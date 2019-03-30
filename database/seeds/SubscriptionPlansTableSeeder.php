<?php

use Illuminate\Database\Seeder;

class SubscriptionPlansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        App\SubscriptionPlan::create([
            'title'=>'small',
            'slug'=>'small',
            'span'=>'31',
            'price'=>5000,
            'avatar'=>'img/shop01.png'
        ]);
         App\SubscriptionPlan::create([
            'title'=>'normal',
            'slug'=>'normal',
            'span'=>'31',
            'price'=>10000,
            'avatar'=>'img/shop01.png'
        ]);
         App\SubscriptionPlan::create([
            'title'=>'large',
            'slug'=>'large',
            'span'=>'31',
            'price'=>15000,
            'avatar'=>'img/shop01.png'
        ]);
         App\SubscriptionPlan::create([
            'title'=>'extra large',
            'slug'=>'extra-large',
            'span'=>'31',
            'price'=>20000,
            'avatar'=>'img/shop01.png'
        ]);
         App\SubscriptionPlan::create([
            'title'=>'mega large',
            'slug'=>'mega-large',
            'span'=>'31',
            'price'=>25000,
            'avatar'=>'img/shop01.png'
        ]);

    }
}
