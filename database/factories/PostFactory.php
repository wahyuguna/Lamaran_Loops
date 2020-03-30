<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\posts;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(posts::class, function (Faker $faker) {

	$title =  $faker->unique()->title;

    return [
        'user_id' => '3',
        'title' => $title,
        'slug' => Str::slug($title, '-'),
        'content' => $faker->text,
    ];
});
