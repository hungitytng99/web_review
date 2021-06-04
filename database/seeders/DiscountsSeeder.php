<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiscountsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('discounts')->insert([
            [
                // 'id' => 1,
                'name' => 'Cả ngày - Đặt chỗ.',
            ],  [
                // 'id' => 2,
                'name' => 'Cả ngày - Đi 4 tính 3',
            ], [
                // 'id' => 3,
                'name' => 'Cả ngày - Giảm 11%.',
            ], [
                // 'id' => 4,
                'name' => 'Ăn tối - Giảm 15%.',
            ], [
                // 'id' => 5,
                'name' => 'Cả ngày - Giảm 10%.',
            ], [
                // 'id' => 6,
                'name' => 'Ăn trưa - Giảm 23%',
            ], [
                // 'id' => 7,
                'name' => 'Cả ngày - Giảm 32% ~ 34%',
            ], [
                // 'id' => 8,
                'name' => 'Cả ngày - Giảm 50%',
            ], [
                // 'id' => 9,
                'name' => 'Cả ngày - Giảm 20%',
            ],
        ]);
    }
}
