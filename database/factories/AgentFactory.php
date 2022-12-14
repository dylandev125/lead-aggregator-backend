<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Models\Agent::class, function (Faker $faker) {
    $rand = str_random(10);
    return [
        'name' => $faker->name,
        'email' => "dmitri.russu+{$rand}@gmail.com",
        'password' => bcrypt('testtest'),
        'remember_token' => str_random(10),
    ];
});
