<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OutstandingDishesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('outstanding_dishes')->insert([
            [
                'id' => 1,
                'href' => '/food/cha-ca-ha-noi',
                'name' => 'Chả cá Hà Nội',
                'description' => 'Chả cá là món ăn đặc sản Hà Nội được làm từ cá lăng, là loại cá nhiều chất dinh dưỡng, thịt ngọt, ít xương. Miếng chả được chiên giòn ăn kèm rau thơm, bún tươi hoặc cơm trong những bữa trưa hoặc cơm tối gia đình đều phù hợp. Đặc biệt, bạn phải ăn cùng mắm tôm mới đúng điệu nhé! Món ăn hứa hẹn đánh thức vị giác của bạn với hương vị khó quên.',
                'image' => '/Home/images/cha-ca.jpg',
            ],  [
                'id' => 2,
                'href' => '/food/nem-ran-ha-noi',
                'name' => 'Nem rán',
                'description' => 'Nếu Thanh Hóa nổi tiếng với nem chua sống cuốn là chuối thì nem rán Hà Nội có vị ngọt từ nem chưa lên men. Thơm ngon, béo ngậy trong từng miếng nem vàng ruộm được bày biện đẹp mắt. Ăn nem rán, uống bia và tám chuyện vui cùng bạn bè là thú vui khá phổ biến của các bạn trẻ.',
                'image' => '/Home/images/cha-ca.jpg',
            ],  [
                'id' => 3,
                'href' => '/food/bun-dau-mam-tom-ha-noi',
                'name' => 'Bún đậu mắm tôm',
                'description' => 'Bún đậu mắm tôm là món ngon Hà Nội “gây sốt” một thời với nguyên liệu hết sức dân dã. Một ít bún, vài miếng đậu, ăn kèm mắm tôm, rau kinh giới, tía tô, mùi tàu bạn sẽ cảm nhận được vị béo của đậu, mặn ngọt của mắm tôm. Những ai ăn lần đầu sẽ cảm giác hơi “dội” với vị nồng, nhưng dần dà sẽ bị nghiện đó nhé!.',
                'image' => '/Home/images/cha-ca.jpg',
            ],
        ]);
    }
}
