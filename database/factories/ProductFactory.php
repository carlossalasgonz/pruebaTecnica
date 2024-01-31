<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->text,
        'price' => $faker->randomFloat(2, 1, 100),
        'status' => $faker->boolean
    ];
});

$factory->afterCreating(Product::class, function ($product, $faker) {
    $product->categories()->attach($faker->numberBetween(1, 10));
    $product->images()->attach($faker->numberBetween(1, 10));
    if($faker->boolean) {
        $product->categories()->attach($faker->numberBetween(1, 10));
    }
    if($faker->boolean) {
        $product->categories()->attach($faker->numberBetween(1, 10));
    }
    if($faker->boolean) {
        $product->categories()->attach($faker->numberBetween(1, 10));
    }

    $product->manufacturers()->attach($faker->numberBetween(1, 10));
    if($faker->boolean) {
        $product->manufacturers()->attach($faker->numberBetween(1, 10));
    }
    if($faker->boolean) {
        $product->manufacturers()->attach($faker->numberBetween(1, 10));
    }
    if($faker->boolean) {
        $product->manufacturers()->attach($faker->numberBetween(1, 10));
    }
});