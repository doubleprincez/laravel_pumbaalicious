<?php

use Faker\Generator as Faker;

$factory->define(App\Address::class, function (Faker $faker) {
    return [
        'user_id'=>$faker->randomElement(App\User::pluck('id')->toArray()),
        'address'=>$faker->text(200),
        'country_id'=>$faker->randomElement(App\Country::pluck('id')->toArray()),
        'town'=>$faker->word(),
        'state'=>$faker->word()

    ];
});
