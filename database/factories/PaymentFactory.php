<?php

use Faker\Generator as Faker;

$factory->define(App\Payment::class, function (Faker $faker) {
    return [
        'user_id'=>$faker->randomElement(App\User::pluck('id')->toArray()),
        'subscription_id'=>$faker->randomElement(App\Subscription::pluck('id')->toArray()),
        'transaction_type'=>$faker->randomElement(['A','B']),
        'transaction_code'=>$faker->text(100),
        'amount'=>$faker->numberBetween(2345,310830),
        'delivery_type'=>$faker->randomElement([0,1,2])

    ];
});
