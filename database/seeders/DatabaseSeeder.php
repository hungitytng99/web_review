<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RestaurantsSeeder::class,
            DishesTypeSeeder::class,
            DishesSeeder::class,
            DishesRestaurantsSeeder::class,
            OutstandingDishesSeeder::class,
            UserSeeder::class,
            ReviewSeeder::class,
            DiscountsSeeder::class,
        ]);
    }
}
