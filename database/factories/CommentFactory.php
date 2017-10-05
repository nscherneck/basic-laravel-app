<?php

use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'user_id'       =>      null,
        'post_id'       =>      null,
        'content'       =>      join("\n\n", $faker->paragraphs(2))
    ];
});
