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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        //'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});


$factory->define(\App\models\Book::class, function (Faker\Generator $faker) {

    return [
        'title' => $faker->unique()->sentence,
        'description' => join("\n",$faker->paragraphs(3)),
    ];
});

$factory->define(\App\models\Comment::class, function (Faker\Generator $faker) {

    return [
        'body'=>join("\n",$faker->paragraphs(rand(1,3))),
        'user_id'=>rand(1,\App\User::all()->count())
    ];
});

$factory->define(\App\models\Profile::class, function (Faker\Generator $faker) {


    return [
        'dni'=>$faker->numberBetween(11111111,99999999),
        'firstname' => $faker->firstName,
        'lastname' => $faker->lastName." ".$faker->lastName,
    ];
});


$factory->define(\App\models\Rol::class, function (Faker\Generator $faker) {

    return [
        'name' => join(" ",$faker->unique()->words(3)),
    ];
});
