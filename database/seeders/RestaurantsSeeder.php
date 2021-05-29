<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestaurantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('restaurants')->insert([
            [
                'id' => 1,
                'name' => 'Nộm Ông Phúc - Nghĩa Tân',
                'location' => 'Ngõ 1 Nghĩa Tân, Cầu Giấy, Hà Nội',
                'rate' => 4.5,
                'phone' => '',
                'image' => '/assets/images/nom-ong-phuc.jpg',
                'sale_percent' => 15,
            ], [
                'id' => 2,
                'name' => 'Chân Gà Rút Xương - Cầu Giấy - Shop Online',
                'location' => '92B Yên Hoà, Cầu Giấy, Hà Nội',
                'rate' => 4.5,
                'phone' => '0372906190',
                'image' => '/assets/images/foody-upload-api-foody-mobile-chan-ga-2-jpg-180928192552.jpg',
                'sale_percent' => 0,
            ], [
                'id' => 3,
                'name' => 'Chả Cá Lã Vọng - Phố Chả Cá',
                'location' => '107 Nguyễn Trường Tộ, Quận Ba Đình, Hà Nội',
                'rate' => 4.9,
                'phone' => '0373150484',
                'image' => '/assets/images/foody-mobile-cha-ca-la-vong.jpg',
                'sale_percent' => 0,
            ], [
                'id' => 4,
                'name' => 'Chả Cá Anh Vũ',
                'location' => '120 K1 Giảng Võ, quận Ba Đình, Hà Nội',
                'rate' => 4.5,
                'phone' => '0358355766',
                'image' => '/assets/images/foody-mobile-cha-ca-anh-vu-mb-jpg-893-635812120350349398.jpg',
                'sale_percent' => 0,
            ], 
        ]);
    }
}
