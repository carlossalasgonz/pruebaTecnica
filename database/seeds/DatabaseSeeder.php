<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        factory(App\Category::class, 10)->create();
        factory(App\Manufacturer::class, 10)->create();
        factory(App\Image::class, 10)->create();
        factory(App\Product::class, 400)->create();
    }
}
