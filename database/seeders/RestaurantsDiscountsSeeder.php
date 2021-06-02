<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestaurantsDiscountsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('restaurants_discounts')->insert([
            [
                'discounts_id' => 4,
                'restaurants_id' => 1,
            ], [
                'discounts_id' => 3,
                'restaurants_id' => 2,
            ], [
                'discounts_id' => 3,
                'restaurants_id' => 3,
            ], [
                'discounts_id' => 3,
                'restaurants_id' => 4,
            ], [
                'discounts_id' => 7,
                'restaurants_id' => 5,
            ], [
                'discounts_id' => 8,
                'restaurants_id' => 6,
            ], [
                'discounts_id' => 9,
                'restaurants_id' => 7,
            ], [
                'discounts_id' => 9,
                'restaurants_id' => 8,
            ], [
                'discounts_id' => 9,
                'restaurants_id' => 9,
            ], [
                'discounts_id' => 9,
                'restaurants_id' => 10,
            ], [
                'discounts_id' => 9,
                'restaurants_id' => 11,
            ], [
                'discounts_id' => 9,
                'restaurants_id' => 12,
            ], [
                'discounts_id' => 5,
                'restaurants_id' => 13,
            ], [
                'discounts_id' => 5,
                'restaurants_id' => 14,
            ], [
                'discounts_id' => 5,
                'restaurants_id' => 15,
            ], [
                'discounts_id' => 5,
                'restaurants_id' => 16,
            ], [
                'discounts_id' => 4,
                'restaurants_id' => 17,
            ], [
                'discounts_id' => 4,
                'restaurants_id' => 18,
            ], [
                'discounts_id' => 4,
                'restaurants_id' => 19,
            ], [
                'discounts_id' => 4,
                'restaurants_id' => 20,
            ], [
                'discounts_id' => 4,
                'restaurants_id' => 21,
            ], [
                'discounts_id' => 1,
                'restaurants_id' => 22,
            ], [
                'discounts_id' => 2,
                'restaurants_id' => 23,
            ], [
                'discounts_id' => 6,
                'restaurants_id' => 24,
            ],
        ]);
    }
}
