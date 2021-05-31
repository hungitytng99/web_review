<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DishesRestaurantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dishes_restaurants')->insert([
            [
                'restaurants_id' => 'nom-ong-phuc-nghia-tan',
                'dishes_id' => '1',
            ], [
                'restaurants_id' => 'nom-ong-phuc-nghia-tan',
                'dishes_id' => '2',
            ], [
                'restaurants_id' => 'nom-ong-phuc-nghia-tan',
                'dishes_id' => '3',
            ], [
                'restaurants_id' => 'nom-ong-phuc-nghia-tan',
                'dishes_id' => '4',
            ], [
                'restaurants_id' => 'nom-ong-phuc-nghia-tan',
                'dishes_id' => '5',
            ], [
                'restaurants_id' => 'nom-ong-phuc-nghia-tan',
                'dishes_id' => '6',
            ], [
                'restaurants_id' => 'nom-ong-phuc-nghia-tan',
                'dishes_id' => '7',
            ], [
                'restaurants_id' => 'nom-ong-phuc-nghia-tan',
                'dishes_id' => '8',
            ], [
                'restaurants_id' => 'nom-ong-phuc-nghia-tan',
                'dishes_id' => '9',
            ], [
                'restaurants_id' => 'nom-ong-phuc-nghia-tan',
                'dishes_id' => '10',
            ],

            [
                'restaurants_id' => 'chan-ga-rut-xuong-cau-giay-shop-online',
                'dishes_id' => '11',
            ], [
                'restaurants_id' => 'chan-ga-rut-xuong-cau-giay-shop-online',
                'dishes_id' => '12',
            ], [
                'restaurants_id' => 'chan-ga-rut-xuong-cau-giay-shop-online',
                'dishes_id' => '13',
            ], [
                'restaurants_id' => 'chan-ga-rut-xuong-cau-giay-shop-online',
                'dishes_id' => '14',
            ], [
                'restaurants_id' => 'chan-ga-rut-xuong-cau-giay-shop-online',
                'dishes_id' => '15',
            ], [
                'restaurants_id' => 'chan-ga-rut-xuong-cau-giay-shop-online',
                'dishes_id' => '16',
            ], [
                'restaurants_id' => 'chan-ga-rut-xuong-cau-giay-shop-online',
                'dishes_id' => '17',
            ], [
                'restaurants_id' => 'chan-ga-rut-xuong-cau-giay-shop-online',
                'dishes_id' => '18',
            ], [
                'restaurants_id' => 'chan-ga-rut-xuong-cau-giay-shop-online',
                'dishes_id' => '19',
            ],

            [
                'restaurants_id' => 'cha-ca-la-vong-pho-cha-ca',
                'dishes_id' => '20',
            ], [
                'restaurants_id' => 'cha-ca-la-vong-pho-cha-ca',
                'dishes_id' => '21',
            ], [
                'restaurants_id' => 'cha-ca-la-vong-pho-cha-ca',
                'dishes_id' => '22',
            ], [
                'restaurants_id' => 'cha-ca-la-vong-pho-cha-ca',
                'dishes_id' => '23',
            ], [
                'restaurants_id' => 'cha-ca-la-vong-pho-cha-ca',
                'dishes_id' => '24',
            ], [
                'restaurants_id' => 'cha-ca-la-vong-pho-cha-ca',
                'dishes_id' => '25',
            ], [
                'restaurants_id' => 'cha-ca-la-vong-pho-cha-ca',
                'dishes_id' => '26',
            ], [
                'restaurants_id' => 'cha-ca-la-vong-pho-cha-ca',
                'dishes_id' => '27',
            ], [
                'restaurants_id' => 'cha-ca-la-vong-pho-cha-ca',
                'dishes_id' => '28',
            ], [
                'restaurants_id' => 'cha-ca-la-vong-pho-cha-ca',
                'dishes_id' => '29',
            ],

            [
                'restaurants_id' => 'cha-ca-anh-vu-giang-vo-ba-dinh',
                'dishes_id' => '30',
            ], [
                'restaurants_id' => 'cha-ca-anh-vu-giang-vo-ba-dinh',
                'dishes_id' => '31',
            ], [
                'restaurants_id' => 'cha-ca-anh-vu-giang-vo-ba-dinh',
                'dishes_id' => '32',
            ], [
                'restaurants_id' => 'cha-ca-anh-vu-giang-vo-ba-dinh',
                'dishes_id' => '33',
            ],
        ]);

        DB::table('dishes_restaurants')->insert([
            [
                'restaurants_id' => 'cha-ca-anh-vu-giang-vo-ba-dinh',
                'dishes_id' => '1',
                'isOutstandingDish' => true,
            ],
            [
                'restaurants_id' => 'cha-ca-la-vong-pho-cha-ca',
                'dishes_id' => '1',
                'isOutstandingDish' => true,
            ],
        ]);
    }
}
