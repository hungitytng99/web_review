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
                'restaurants_id' => '1',
                'dishes_id' => '1',
            ], [
                'restaurants_id' => '1',
                'dishes_id' => '2',
            ], [
                'restaurants_id' => '1',
                'dishes_id' => '3',
            ], [
                'restaurants_id' => '1',
                'dishes_id' => '4',
            ], [
                'restaurants_id' => '1',
                'dishes_id' => '5',
            ], [
                'restaurants_id' => '1',
                'dishes_id' => '6',
            ], [
                'restaurants_id' => '1',
                'dishes_id' => '7',
            ], [
                'restaurants_id' => '1',
                'dishes_id' => '8',
            ], [
                'restaurants_id' => '1',
                'dishes_id' => '9',
            ], [
                'restaurants_id' => '1',
                'dishes_id' => '10',
            ],

            [
                'restaurants_id' => '2',
                'dishes_id' => '11',
            ], [
                'restaurants_id' => '2',
                'dishes_id' => '12',
            ], [
                'restaurants_id' => '2',
                'dishes_id' => '13',
            ], [
                'restaurants_id' => '2',
                'dishes_id' => '14',
            ], [
                'restaurants_id' => '2',
                'dishes_id' => '15',
            ], [
                'restaurants_id' => '2',
                'dishes_id' => '16',
            ], [
                'restaurants_id' => '2',
                'dishes_id' => '17',
            ], [
                'restaurants_id' => '2',
                'dishes_id' => '18',
            ], [
                'restaurants_id' => '2',
                'dishes_id' => '19',
            ],

            [
                'restaurants_id' => '3',
                'dishes_id' => '20',
            ], [
                'restaurants_id' => '3',
                'dishes_id' => '21',
            ], [
                'restaurants_id' => '3',
                'dishes_id' => '22',
            ], [
                'restaurants_id' => '3',
                'dishes_id' => '23',
            ], [
                'restaurants_id' => '3',
                'dishes_id' => '24',
            ], [
                'restaurants_id' => '3',
                'dishes_id' => '25',
            ], [
                'restaurants_id' => '3',
                'dishes_id' => '26',
            ], [
                'restaurants_id' => '3',
                'dishes_id' => '27',
            ], [
                'restaurants_id' => '3',
                'dishes_id' => '28',
            ], [
                'restaurants_id' => '3',
                'dishes_id' => '29',
            ],

            [
                'restaurants_id' => '4',
                'dishes_id' => '30',
            ], [
                'restaurants_id' => '4',
                'dishes_id' => '31',
            ], [
                'restaurants_id' => '4',
                'dishes_id' => '32',
            ], [
                'restaurants_id' => '4',
                'dishes_id' => '33',
            ],
            //
            [
                'restaurants_id' => '5',
                'dishes_id' => '34',
            ], [
                'restaurants_id' => '5',
                'dishes_id' => '35',
            ], [
                'restaurants_id' => '5',
                'dishes_id' => '36',
            ], [
                'restaurants_id' => '5',
                'dishes_id' => '37',
            ], [
                'restaurants_id' => '5',
                'dishes_id' => '38',
            ], [
                'restaurants_id' => '5',
                'dishes_id' => '39',
            ], [
                'restaurants_id' => '5',
                'dishes_id' => '40',
            ],

        ]);

        DB::table('dishes_restaurants')->insert([
            [
                'restaurants_id' => '4',
                'dishes_id' => '1',
                'isOutstandingDish' => true,
            ],
            [
                'restaurants_id' => '3',
                'dishes_id' => '1',
                'isOutstandingDish' => true,
            ], 
            [
                'restaurants_id' => '19',
                'dishes_id' => '2',
                'isOutstandingDish' => true,
            ], 
            [
                'restaurants_id' => '20',
                'dishes_id' => '2',
                'isOutstandingDish' => true,
            ],[
                'restaurants_id' => '22',
                'dishes_id' => '3',
                'isOutstandingDish' => true,
            ],[
                'restaurants_id' => '23',
                'dishes_id' => '3',
                'isOutstandingDish' => true,
            ],[
                'restaurants_id' => '24',
                'dishes_id' => '4',
                'isOutstandingDish' => true,
            ],[
                'restaurants_id' => '25',
                'dishes_id' => '4',
                'isOutstandingDish' => true,
            ],
            [
                'restaurants_id' => '26',
                'dishes_id' => '5',
                'isOutstandingDish' => true,
            ],[
                'restaurants_id' => '27',
                'dishes_id' => '5',
                'isOutstandingDish' => true,
            ],
            
            [
                'restaurants_id' => '28',
                'dishes_id' => '6',
                'isOutstandingDish' => true,
            ],[
                'restaurants_id' => '29',
                'dishes_id' => '6',
                'isOutstandingDish' => true,
            ],
        ]);
    }
}
