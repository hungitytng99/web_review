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
            // 'restaurant_id' => 1,
            // 'dish_id' => 1,
            'comment' => Str::random(20),
            'rate' => 4.1,
            'images' => json_encode([
                'Review/assets/pho_0.jpg',
                'Review/assets/pho_1.png',
            ]),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
