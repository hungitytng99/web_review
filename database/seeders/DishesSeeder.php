<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DishesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dishes')->insert([
            [
                'id' => 1,
                'name' => 'Nộm Bò Khô',
                'description' => 'Chỉ có bò',
                'type' => 1,
                'image' => '/assets/images/b53e9c3e-bfaf-434f-8365-0bcf449ca7c0.jpg',
                'price' => '35.000',
            ],
            [
                'id' => 2,
                'name' => 'Nộm bò khô lá lách',
                'description' => '',
                'type' => 1,
                'image' => '/assets/images/53b712e0-225f-4376-b57f-57c4e316c74f.jpg',
                'price' => '35.000',
            ], [
                'id' => 3,
                'name' => 'Nộm bò khô lá lách gân bò',
                'description' => '',
                'type' => 1,
                'image' => '/assets/images/4e871a56-f458-41c0-addc-b3735376805e.jpg',
                'price' => '40.000',
            ], [
                'id' => 4,
                'name' => 'Nộm Chay',
                'description' => 'Gồm đu đủ, cà rốt, rau, lạc.',
                'type' => 1,
                'image' => '/assets/images/589f02f6-6a62-4529-8db9-9edb65a961f9.jpg',
                'price' => '18.000',
            ], [
                'id' => 5,
                'name' => 'Nộm lá lách',
                'description' => 'Chỉ có lá lách',
                'type' => 1,
                'image' => '/assets/images/30f8b687-0405-44ef-bcaa-bdffcc7587a8.jpg',
                'price' => '35.000',
            ], [
                'id' => 6,
                'name' => 'Tá lả',
                'description' => 'Có bao nhiêu topping cho vào đây hết.',
                'type' => 1,
                'image' => '/assets/images/84516418-2440-42ff-8bb1-b923af9f0b9a.jpg',
                'price' => '120.000',

            ], [
                'id' => 7,
                'name' => 'Nem Cuốn nem chua',
                'description' => '1 cái',
                'type' => 1,
                'image' => '/assets/images/2017102518175-foody-nom-ong-gia-nghia-tan-533-636233664807229388.jpg',
                'price' => '30.000',
            ], [
                'id' => 8,
                'name' => 'Nem cuốn tổng hợp',
                'description' => '1 cái có nem chua, thịt, lá lách',
                'type' => 1,
                'image' => '/assets/images/c38347bb-3da1-4053-9779-164399f272de.jpg',
                'price' => '9.000',
            ], [
                'id' => 9,
                'name' => 'Nem cuốn thịt',
                'description' => '1 cái',
                'type' => 1,
                'image' => '/assets/images/55ac35dd-a197-4b82-8da3-8942bb8b86ca.jpg',
                'price' => '7.000',
            ], [
                'id' => 10,
                'name' => 'Nem cuốn lá lách',
                'description' => '1 cái',
                'type' => 1,
                'image' => '/assets/images/f623dace-6046-48be-b39c-4cf97fd722c5.jpg',
                'price' => '7.000',
            ],
            //
            [
                'id' => 11,
                'name' => 'Chân gà rút xương sả tắc size TO',
                'description' => '',
                'type' => 1,
                'image' => '/assets/images/d0d494f7-b22b-4610-9bd6-129b0393b7b8.jpeg',
                'price' => '63.000',
            ], [
                'id' => 12,
                'name' => 'Chân Gà Rút Xương Sả Ớt Xoài size TO',
                'description' => '',
                'type' => 1,
                'image' => '/assets/images/7ab60a0b-c9c8-4ca7-962c-5b951dd19f1d.jpeg',
                'price' => '68.000',
            ], [
                'id' => 13,
                'name' => 'Chân Gà Rút Xương Sả Ớt Cóc size TO',
                'description' => '',
                'type' => 1,
                'image' => '/assets/images/5fd775ae-1284-4014-b577-2131bd5305f8.jpeg',
                'price' => '68.000',
            ], [
                'id' => 14,
                'name' => 'Chân Gà Rút Xương Sả Ớt Size nhỏ',
                'description' => '',
                'type' => 1,
                'image' => '/assets/images/53b712e0-225f-4376-b57f-57c4e316c74f.jpg',
                'price' => '40.000',
            ], [
                'id' => 15,
                'name' => 'Chân Gà Rút Xương Sả Ớt Cóc size NHỎ',
                'description' => '',
                'type' => 1,
                'image' => '/assets/images9cbc25a1-c508-4d78-92f5-6d6adc36fa60.jpeg',
                'price' => '42.000',
            ], [
                'id' => 16,
                'name' => 'Chân Gà Rút Xương Sả Ớt Xoài size NHỎ',
                'description' => '',
                'type' => 1,
                'image' => '/assets/images/9cbc25a1-c508-4d78-92f5-6d6adc36fa60.jpeg',
                'price' => '42.000',
            ], [
                'id' => 17,
                'name' => 'Chân gà rút xương sả tắc size TO+ chai pepsi lạnh',
                'description' => '',
                'type' => 1,
                'image' => '/assets/images/9cbc25a1-c508-4d78-92f5-6d6adc36fa60.jpeg',
                'price' => '70.000',
            ], [
                'id' => 18,
                'name' => 'Chân Gà Rút Xương Sả Ớt Xoài size TO + 1 chai pepsi lạnh',
                'description' => '',
                'type' => 1,
                'image' => '/assets/images/a1f408e7-2a4b-4574-b5c6-ddee64fa39f8.jpeg',
                'price' => '75.000',
            ], [
                'id' => 19,
                'name' => 'Chân Gà Rút Xương 1kg',
                'description' => 'Sản phẩm chưa qua sơ chế.',
                'type' => 1,
                'image' => '/assets/images/61ea7a56-39ab-4999-a04d-5d137e88e33f.jpg',
                'price' => '170.000',
            ],
            //
            [
                'id' => 20,
                'name' => 'Chả Cá Lã Vọng',
                'description' => 'Bán từ 2 suất trở lên.',
                'type' => 1,
                'image' => '/assets/images/deli-dish-no-image.png.jpg',
                'price' => '170.000',
            ],
            [
                'id' => 21,
                'name' => 'Chả cá lã vọng (phần)',
                'description' => 'Không bao gồm bánh tráng.',
                'type' => 1,
                'image' => '/assets/images/foody-cha-ca-la-vong-637-635546113698941343.jpg',
                'price' => '170.000',
            ],
            [
                'id' => 22,
                'name' => 'Bánh tráng thêm',
                'description' => 'Bánh đa',
                'type' => 1,
                'image' => '/assets/images/deli-dish-no-image.png',
                'price' => '170.000',
            ],
            [
                'id' => 23,
                'name' => 'Phở Trộn',
                'description' => 'Sản phẩm chưa qua sơ chế.',
                'type' => 1,
                'image' => '/assets/images/deli-dish-no-image.png.jpg',
                'price' => '60.000',
            ],
            [
                'id' => 24,
                'name' => 'Mì Gà Tần 1/2 Con',
                'description' => '',
                'type' => 1,
                'image' => '/assets/images/deli-dish-no-image.png',
                'price' => '120.000',
            ],
            [
                'id' => 25,
                'name' => 'Mì Gà Tần 1/2 Con',
                'description' => '',
                'type' => 1,
                'image' => '/assets/images/deli-dish-no-image.png',
                'price' => '120.000',
            ],
            [
                'id' => 26,
                'name' => 'Phở Xào Bò',
                'description' => '',
                'type' => 1,
                'image' => '/assets/images/deli-dish-no-image.png',
                'price' => '100.000',
            ],
            [
                'id' => 27,
                'name' => 'Phở Xào Gà',
                'description' => '',
                'type' => 1,
                'image' => '/assets/images/deli-dish-no-image.png',
                'price' => '100.000',
            ],
            [
                'id' => 28,
                'name' => 'Phở Xào Tôm',
                'description' => '',
                'type' => 1,
                'image' => '/assets/images/deli-dish-no-image.png',
                'price' => '100.000',
            ],
            [
                'id' => 29,
                'name' => 'Mì Gà Tần',
                'description' => '',
                'type' => 1,
                'image' => '/assets/images/deli-dish-no-image.png',
                'price' => '80.000',
            ],
            //
            [
                'id' => 30,
                'name' => 'Chả Cá',
                'description' => 'Suất',
                'type' => 1,
                'image' => '/assets/images/deli-dish-no-image.png',
                'price' => '130.000',
            ], [
                'id' => 31,
                'name' => 'Pepsi',
                'description' => '',
                'type' => 1,
                'image' => '/assets/images/deli-dish-no-image.png',
                'price' => '20.000',
            ], [
                'id' => 32,
                'name' => 'Coca Light',
                'description' => '',
                'type' => 1,
                'image' => '/assets/images/deli-dish-no-image.png',
                'price' => '20.000',
            ], [
                'id' => 33,
                'name' => 'Khăn Ướt',
                'description' => '10 cái',
                'type' => 1,
                'image' => '/assets/images/deli-dish-no-image.png',
                'price' => '20.000',
            ],


        ]);
    }
}
