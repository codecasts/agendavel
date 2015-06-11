<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(Agendavel\User::class, function ($faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(Agendavel\Contact::class, function($faker) {
    return [
        'name'  =>  $faker->name,
        'comments'  =>  str_random(20),
    ];
});

$factory->define(Agendavel\Number::class, function($faker) {
    $types = ['work', 'home', 'mobile'];

    return [
        'number'    =>  $faker->phoneNumber,
        'type'      =>  $types[rand(0,2)],
    ];
});