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
                'image' => '/assets/images/cha-ca.jpg',
            ],  [
                'id' => 2,
                'href' => '/food/nem-nuong-nha-trang',
                'name' => 'Nem nướng',
                'description' => 'Nếu Thanh Hóa nổi tiếng với nem chua sống cuốn là chuối thì nem nướng Nha Trang có vị ngọt từ nem chưa lên men. Thơm ngon, béo ngậy trong từng miếng nem vàng ruộm ăn kèm với rau, chả ram tùy vùng miền.Ăn nem nướng, uống bia và tám chuyện vui cùng bạn bè là thú vui khá phổ biến của các bạn trẻ.',
                'image' => '/assets/images/nem-nuong.jpg',
            ],  [
                'id' => 3,
                'href' => '/food/bun-dau-mam-tom-ha-noi',
                'name' => 'Bún đậu mắm tôm',
                'description' => 'Bún đậu mắm tôm là món ngon Hà Nội “gây sốt” một thời với nguyên liệu hết sức dân dã. Một ít bún, vài miếng đậu, ăn kèm mắm tôm, rau kinh giới, tía tô, mùi tàu bạn sẽ cảm nhận được vị béo của đậu, mặn ngọt của mắm tôm. Những ai ăn lần đầu sẽ cảm giác hơi “dội” với vị nồng, nhưng dần dà sẽ bị nghiện đó nhé!.',
                'image' => '/assets/images/maxresdefault.jpg',
            ],[
                'id' => 4,
                'href' => '/food/banh-com',
                'name' => 'Bánh Cốm',
                'description' => 'Bàn về đặc sản Hà Nội "được lòng" du khách, không thể nào không nhắc đến bánh cốm. Đây là món ăn vặt Hà Nội nổi tiếng bởi vị ngọt thanh và hương thơm đặc trưng hấp dẫn. Vỏ bánh được làm từ nếp cái hoa vàng màu xanh lá bắt mắt, ngọt và dẻo, ôm lấy phần nhân làm từ sầu riêng hoặc đậu xanh. Bánh cốm Hà Nội tuyệt hảo nhất khi dùng cùng trà nóng; là món ngon ngày Tết được nhiều người yêu thích. ',
                'image' => '/assets/images/banh-com.jpg',
            ],[
                'id' => 5,
                'href' => '/food/long-ran',
                'name' => 'Lòng Rán',
                'description' => 'Chưa thưởng thức đặc sản lòng rán thì quả thật là thiệt thòi lớn đối với thực thần chân chính. Miếng lòng sạch được rán chín cháy cạnh, ngoài giòn trong mềm, ăn cùng với rau thơm, bún tươi, chấm thêm mắm tôm chua cay thì phải nói là “bùng nổ hương vị”. #teamKlook có thể thử lòng xài, lòng hấp, gỏi lòng…; đều là “cực phẩm” đấy!.',
                'image' => '/assets/images/long-ran.jpg',
            ],[
                'id' => 6,
                'href' => '/food/banh-cuon-thanh-tri',
                'name' => 'Bánh cuốn thanh trì',
                'description' => 'Bánh cuốn Thanh Trì nổi tiếng với độ mỏng và dai của nó. Phần nhân được cuốn với hành phi và chút thịt bằm. Bánh được chấm cùng nước mắm vị nhạt, ăn kèm chả lụa thơm ngon, hương vị hấp dẫn đến nao lòng. Hãy thử trải nghiệm bánh cuốn Thanh Trì tại Hà Nội để tìm thấy sự khác biệt nhé!.',
                'image' => '/assets/images/banh-cuon.jpg',
            ],
        ]);
    }
}
