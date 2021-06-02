<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use Carbon\Carbon;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
            'user_id' => 1,
            'restaurant_id' => 1,
            'dish_id' => 1,
            'comment' => Str::random(100),
            'rate' => 7.7,
            'images' => json_encode([
                '/assets/images/pho_0.jpg',
                '/assets/images/pho_1.png',
            ]),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('reviews')->insert([
            'user_id' => 1,
            'restaurant_id' => 2,
            'dish_id' => 3,
            'comment' => Str::random(100),
            'rate' => 4.5,
            'images' => json_encode([
                '/assets/images/pho_1.png',
            ]),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('reviews')->insert([
            'user_id' => 1,
            'restaurant_id' => 3,
            'dish_id' => 5,
            'comment' => Str::random(100),
            'rate' => 2.3,
            'images' => json_encode([
                '/assets/images/pho_1.png',
                '/assets/images/pho_0.jpg',
            ]),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
