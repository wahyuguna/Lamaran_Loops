<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\comments;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(comments::class, function (Faker $faker) {
    return [
        'post_id' => '4',
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'website' => $faker->domainName,
        'comment' => Str::random(12),
    ];
});
