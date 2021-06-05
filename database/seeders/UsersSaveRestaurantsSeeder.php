<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSaveRestaurantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users_save_restaurants')->insert([
            [
                'user_id' => 1,
                'restaurant_id' => 2,
            ],  [
                'user_id' => 1,
                'restaurant_id' => 3,
            ],
        ]);
    }
}
