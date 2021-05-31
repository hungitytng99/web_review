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
<<<<<<< HEAD
=======
            UserSeeder::class,
            ReviewSeeder::class,
>>>>>>> fe8b7cd52930dd744c9fd54e07a89ff4dca36c32
        ]);
    }
}
