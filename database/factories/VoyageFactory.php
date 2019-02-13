<?php

use Faker\Generator as Faker;

$factory->define(App\Voyage::class, function (Faker $faker) {

    $randomCountry = $faker->country;
    $randomCity = $faker->city;

    return [
        'label' => 'Visit ' . $randomCity . ', ' . $randomCountry,
        'country' => $faker->country,
        'city' => $faker->city,
        'dateStart' => $faker->dateTimeInInterval('- 15 days', '+ 10 days', 'Europe/Paris'),
        'dateEnd' => $faker->dateTimeInInterval('+ 5 days', '+ 10 days', 'Europe/Paris'),
        'price' => $faker->randomFloat(2, $min = 0, 999999),
        'picture' => $faker->imageUrl(800, 600, 'cats', true, 'Faker'),
        'description' => $faker->paragraph(3, true),
        'availability' => $faker->randomNumber(3, false)
        ];
});
