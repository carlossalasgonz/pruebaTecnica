<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Image;
use Faker\Generator as Faker;

$factory->define(Image::class, function (Faker $faker) {
    $width = $faker->numberBetween(100, 1000);
    $height = $faker->numberBetween(100, 1000);
    return [
        'name'      =>  $faker->name,
        'path'      =>  $faker->imageUrl($width, $height),
        'width'     =>  $width,
        'height'    =>  $height,
        'extension' =>  $faker->fileExtension
    ];
});
