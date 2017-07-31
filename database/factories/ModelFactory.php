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
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});
$factory->define(App\Topic::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->word,
        'bio' => $faker->paragraph,
        'questions_count' => 1
    ];
});
$factory->define(App\AndroidUser::class, function (Faker\Generator $faker) {

    return [
        'email' => $faker->email,
        'password' => $faker->password
    ];
});
$factory->define(App\Question::class, function (Faker\Generator $faker) {

    return [
        'title' => $faker->title,
        'body' => $faker->paragraph,
        'User_id' => 1
    ];
});
$factory->define(App\Article::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence,
        'author' => $faker->name,
        'cover_img'=> $faker->imageUrl(),
        'intro' => $faker->sentence,
        'body' => $faker->paragraph,
        'type' => 3
    ];
});