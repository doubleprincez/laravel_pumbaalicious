<?php

use Faker\Generator as Faker;

$factory->define(App\InventoryItem::class, function (Faker $faker) {
    return [
        'user_id'=>$faker->randomElement(App\User::pluck('id')->toArray()),
        'product_id'=>$faker->randomElement(App\Product::pluck('id')->toArray()),
        'title'=>(string)$faker->text(30),
        'price'=>$faker->numberBetween(1000,30000),
        'quantity'=>$faker->numberBetween(1,30)
    ];
});
