<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DishesTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dishes_type')->insert([
            [
                'type' => 'Sáng',
            ], [
                'type' => 'Trưa',
            ], [
                'type' => 'Chiều',
            ], [
                'type' => 'Tối',
            ],  [
                'type' => 'Khuya',
            ], 
        ]);
    }
}
