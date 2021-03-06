<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'user_id'       =>      function () {
            return factory('App\User')->create()->id;
        },
        'title'         =>      $faker->sentence,
        'content'       =>      join("\n\n", $faker->paragraphs(12))
    ];
});
