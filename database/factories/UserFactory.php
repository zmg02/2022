<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->userName,
        'email' => $faker->unique()->safeEmail,
        'phone' => $faker->phoneNumber,
//        'email_verified_at' => now(),
        'password' => md5($faker->password), // password
        'icon' => $faker->imageUrl($width = 500, $height = 500),
        'session_id' => Str::random(25),
        'is_admin' => $faker->boolean(1),
        'is_vip' => $faker->boolean(1),
        'is_active' => $faker->boolean(1),
        'is_verify' => $faker->boolean(99),
        'status' => $faker->boolean(99),
        'order_count' => rand(0,1000),
        'payment_count' => rand(0,10000),
        'payment_price' => rand(0,8000),
        'come_from' => 'PC',
        'login_count' => rand(0,1000),
        'last_login_time' => $faker->unixTime,
        'last_login_ip' => $faker->ipv4,
        'create_time'   => $faker->unixTime,
        'update_time'   => $faker->unixTime,
    ];
});
