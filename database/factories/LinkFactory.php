<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Link::class, function (Faker $faker) {
    return [
        'url' => 'http://brianwardwell.com',
        'alt_text' => 'brianwardwell.com',
        'description' => 'Brian Wardwell',
    ];
});
