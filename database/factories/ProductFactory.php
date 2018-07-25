<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'description'=> $faker->text(50),
        'category_id'=> $faker->randomDigitNotNull,
        'quantity'=> $faker->randomDigitNotNull,
        'price'=> $faker->randomDigitNotNull
    ];
});
