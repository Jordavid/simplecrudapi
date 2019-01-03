<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => str_random(50),
        'description' => $faker->text(300),
        'price' => $faker->buildingNumber(),
        'quantity' => $faker->buildingNumber()
    ];
});
