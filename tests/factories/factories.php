<?php

$factory('App\Product', [
    'title' => $faker->name,
    'slug'  => $faker->slug(3)
]);