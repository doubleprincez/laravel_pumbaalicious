<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    $title =  (string)$faker->text(20);
    $slug = str_slug($title);
    return [
       'user_id'=> $faker->randomElement(App\User::pluck('id')->toArray()),
        'ad_category_id'=>$faker->randomElement(App\AdCategory::pluck('id')->toArray()),
        'subscription_id'=>$faker->randomElement(App\Subscription::pluck('id')->toArray()),
        'title'=>$title,
        'slug'=>$slug,
        'description'=>$faker->text(100),
        'previous_price'=>$faker->numberBetween(123000,24446220),
        'current_price'=>$faker->numberBetween(10000,230000),
        'type'=>$faker->randomElement(['new','sold','']),
        'discount'=>$faker->randomFloat(1,10,30),
        'vat'=> $faker->randomFloat(1,10,50),
        'default_image' => 'img/shop01.png'
    ];
});
