<?php

use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(App\Subscription::class, function (Faker $faker) {

    $title = (string)$faker->text(20);
    $start = Carbon::create($faker->date('Y-m-d'));
    $end =  $start->addDays(31);
    return [
        'user_id'=>$faker->randomElement(App\User::pluck('id')->toArray()),
        'subscription_plan_id'=>  $faker->randomElement(App\SubscriptionPlan::pluck('id')->toArray()),
        'title'=> $title,
        'slug'=>str_slug($title),
        'start_date'=>$start,
        'end_date'=>$end,
        'delivery_id'=> $faker->randomElement(App\Delivery::pluck('id')->toArray()),
        'delivery_price'=> $faker->numberBetween(2000,30000)
    ];
});
