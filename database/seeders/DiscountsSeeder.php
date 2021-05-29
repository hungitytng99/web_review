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
                'name' => 'Nộm Bò Khô',
                'description' => 'Chỉ có bò',
                'type' => 1,
                'image' => '/assets/images/b53e9c3e-bfaf-434f-8365-0bcf449ca7c0.jpg',
                'price' => '35.000',
            ]
        ]);
    }
}
