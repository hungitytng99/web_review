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
                // 1
                'linkTo' => 'nom-ong-phuc-nghia-tan',
                'name' => 'Nộm Ông Phúc - Nghĩa Tân',
                'type' =>'Quán ăn',
                'location' => 'Ngõ 1 Nghĩa Tân, Cầu Giấy, Hà Nội',
                'rate' => 4.5,
                'phone' => '',
                'image' => '/assets/images/nom-ong-phuc.jpg',
                'sale_percent' => 15,
            ], [
                // 2
                'linkTo' => 'chan-ga-rut-xuong-cau-giay-shop-online',
                'name' => 'Chân Gà Rút Xương - Cầu Giấy - Shop Online',
                'type' =>'Shop Online',
                'location' => '92B Yên Hoà, Cầu Giấy, Hà Nội',
                'rate' => 4.5,
                'phone' => '0372906190',
                'image' => '/assets/images/foody-upload-api-foody-mobile-chan-ga-2-jpg-180928192552.jpg',
                'sale_percent' => 11,
            ], [
                // 3
                'linkTo' => 'cha-ca-la-vong-pho-cha-ca',
                'name' => 'Chả Cá Lã Vọng - Phố Chả Cá',
                'type' =>'Nhà hàng',
                'location' => '107 Nguyễn Trường Tộ, Quận Ba Đình, Hà Nội',
                'rate' => 4.9,
                'phone' => '0373150484',
                'image' => '/assets/images/foody-mobile-cha-ca-la-vong.jpg',
                'sale_percent' => 11,
            ], [
                // 4
                'linkTo' => 'cha-ca-anh-vu-giang-vo-ba-dinh',
                'name' => 'Chả Cá Anh Vũ',
                'type' =>'Nhà hàng',
                'location' => '120 K1 Giảng Võ, quận Ba Đình, Hà Nội',
                'rate' => 4.5,
                'phone' => '0358355766',
                'image' => '/assets/images/foody-mobile-cha-ca-anh-vu-mb-jpg-893-635812120350349398.jpg',
                'sale_percent' => 11,
            ], [
                // 5
                'linkTo' => 'hai-san-long-thuy-nguyen-ngoc-vu',
                'name' => 'Long Thủy - Bún Thái Hải Sản - Nguyễn Ngọc Vũ',
                'type' =>'QUán ăn',
                'location' => '129B Nguyễn Ngọc Vũ, Cầu Giấy, Hà Nội',
                'rate' => 4.0,
                'phone' => '0362232314',
                'image' => '/assets/images/foody-mobile-thai3-jpg-537-635742765984388698.jpg',
                'sale_percent' => 32,
            ], [
                // 6
                'linkTo' => 'teen-s-food-cac-mon-an-vat-thuy-khue',
                'name' => 'Teen\'s Food - Các Món Ăn Vặt - Thụy Khuê',
                'type' =>'Ăn vặt/vỉa hè',
                'location' => '121A Thụy Khê, Tây Hồ, Hà Nội',
                'rate' => 4.0,
                'phone' => '0352155526',
                'image' => '/assets/images/foody-upload-api-foody-mobile-foody-upload-api-foo-210317121956.jpg',
                'sale_percent' => 50,
            ], [
                // 7
                'linkTo' => 'quan-com-hem-tay-son',
                'name' => 'Quán Cơm Hẻm - Tây Sơn',
                'type' =>'Quán ăn',
                'location' => '3/34 Ngõ 252 Tây Sơn, Đống Đa, Hà Nội',
                'rate' => 4.0,
                'phone' => '0358563606',
                'image' => '/assets/images/foody-upload-api-foody-mobile-com-190528165339.jpg',
                'sale_percent' => 20,
            ], [
                // 8
                'linkTo' => 'banh-mi-kep-cha-bo-booby-tran-dai-nghia',
                'name' => 'Cơm Gà Giòn Booby - Trần Đại Nghĩa',
                'type' =>'Quán ăn',
                'location' => '28 Ngõ 183 Trần Đại Nghĩa, P. Bách Khoa, Hai Bà Trưng, Hà Nội',
                'rate' => 4.0,
                'phone' => '0865080906',
                'image' => '/assets/images/foody-upload-api-foody-mobile-com-jpg-180813103513.jpg',
                'sale_percent' => 20,
            ], [
                // 9
                'linkTo' => 'com-bo-sot-nam-bun-mien-tron-30k-196-cau-giay',
                'name' => 'Cơm Bò Sốt Nấm & Bún Miến Trộn 30k - 196 Cầu Giấy',
                'type' =>'Quán ăn',
                'location' => '196 Cầu Giấy, Cầu Giấy, Hà Nội',
                'rate' => 4.0,
                'phone' => '0862565154',
                'image' => '/assets/images/image-72b3f597-200910115833.jpg',
                'sale_percent' => 20,
            ], [
                // 10
                'linkTo' => 'bun-dau-met-minh-thu-van-minh',
                'name' => 'Bún Đậu Mẹt Minh Thư - Văn Minh',
                'type' =>'Quán ăn',
                'location' => '1 Ngõ Văn Minh, P. Mai Dịch, Cầu Giấy, Hà Nội',
                'rate' => 4.0,
                'phone' => '0363855179',
                'image' => '/assets/images/foody-upload-api-foody-mobile-14463225_12696715897-201111121507.jpg',
                'sale_percent' => 20,
            ], [
                // 11
                'linkTo' => 'ba-ba-quan-com-ga-xiu-hoang-hoa-tham',
                'name' => 'Bà Ba Quán - Cơm Gà Xíu - Hoàng Hoa Thám',
                'type' =>'Quán ăn',
                'location' => '12 Ngách 189/35 Hoàng Hoa Thám, Ba Đình, Hà Nội',
                'rate' => 4.0,
                'phone' => '0358355766',
                'image' => '/assets/images/foody-upload-api-foody-mobile-com-ga-190516171635.jpg',
                'sale_percent' => 20,
            ], [
                // 12
                'linkTo' => 'bep-cuu-com-van-phong-online',
                'name' => 'Bếp Cừu - Cơm Văn Phòng Online',
                'type' =>'Quán ăn',
                'location' => '33 Ngách 1 Ngõ 376 Đường Bưởi, Ba Đình, Hà Nội',
                'rate' => 4.0,
                'phone' => '0362232314',
                'image' => '/assets/images/foody-upload-api-foody-mobile-78764720_98295963872-191213093811.jpg',
                'sale_percent' => 20,
            ], [
                // 13
                'linkTo' => 'gimbab-han-quoc-ngoc-khanh',
                'name' => 'Gimbab Hàn Quốc - Ngọc Khánh',
                'type' =>'Quán ăn',
                'location' => '52 Ngọc Khánh, Ba Đình, Hà Nội',
                'rate' => 4.0,
                'phone' => '0352155526',
                'image' => '/assets/images/foody-mobile-3-jpg-831-635857700342239766.jpg',
                'sale_percent' => 10,
            ], [
                // 14
                'linkTo' => 'banh-mi-nem-khoai-khoai-lang-lac-kim-ma-thuong',
                'name' => 'Bánh Mì Nem Khoai & Khoai Lang Lắc - Kim Mã Thượng',
                'type' =>'Ăn vặt',
                'location' => '10 Kim Mã thượng, Ba Đình, Hà Nội',
                'rate' => 4.0,
                'phone' => '0865080906',
                'image' => '/assets/images/foody-upload-api-foody-mobile-bmnk-jpg-180920170432.jpg',
                'sale_percent' => 10,
            ], [
                // 15
                'linkTo' => 'teen-s-food-cac-mon-an-vat-nguyen-cong-hoan',
                'name' => 'Teen\'s Food - Các Món Ăn Vặt - Nguyễn Công Hoan',
                'type' =>'Ăn vặt',
                'location' => '11 Nguyễn Công Hoan, Ba Đình, Hà Nội',
                'rate' => 4.0,
                'phone' => '0363855179',
                'image' => '/assets/images/foody-upload-api-foody-mobile-teen-food-1-jpg-181206142142.jpg',
                'sale_percent' => 10,
            ], [
                // 16
                'linkTo' => 'thu-hang-com-van-phong',
                'name' => 'Thu Hằng - Cơm Văn Phòng',
                'type' =>'Quán ăn',
                'location' => '102 C16 Nguyễn Quý Đức, Thanh Xuân, Hà Nội',
                'rate' => 4.0,
                'phone' => '0989297493',
                'image' => '/assets/images/foody-upload-api-foody-mobile-com-190405140510.jpg',
                'sale_percent' => 10,
            ], [
                // 17
                'linkTo' => 'sua-chua-tran-chau-now-duy-tan',
                'name' => 'Sữa Chua Trân Châu Hạ Long - NOW - Duy Tân',
                'type' =>'Café/Dessert',
                'location' => '62 Duy Tân, Cầu Giấy, Hà Nội',
                'rate' => 4.0,
                'phone' => '0972842734',
                'image' => '/assets/images/foody-upload-api-foody-mobile-16fe74d1-4b6f-41ce-a-200420103338.jpg',
                'sale_percent' => 15,
            ],[
                // 18
                'linkTo' => 'banh-mi-cha-nong-dung-hanh-nguyen-tuan',
                'name' => 'Bánh Mì Chả Nóng Dũng Hạnh - Nguỵ Như Kon Tum',
                'type' =>'Quán ăn',
                'location' => '8A Ngõ 90 Ngụy Như Kon Tum, Thanh Xuân, Hà Nội',
                'rate' => 4.0,
                'phone' => '0984061861',
                'image' => '/assets/images/image-da788f1b-200908105306.jpg',
                'sale_percent' => 15,
            ],
            [
                // 19
                'linkTo' => 'minh-phuong-nem-nuong-nha-trang',
                'name' => 'Minh Phương - Nem Nướng Nha Trang',
                'type' =>'Quán ăn',
                'location' => '6A Ngõ 2 Ao Sen,  Quận Hà Đông, Hà Nội',
                'rate' => 4.9,
                'phone' => '0985823485',
                'image' => '/assets/images/foody-upload-api-foody-mobile-avar1-190614092337.jpg',
                'sale_percent' => 15,
            ],
            [
                // 20
                'linkTo' => 'nem-nuong-nha-trang-thu-ha',
                'name' => 'Nem Nướng Nha Trang Thu Hà',
                'type' =>'Quán ăn',
                'location' => '118B Nguyễn Lương Bằng, P. Ô Chợ Dừa,  Quận Đống Đa, Hà Nội',
                'rate' => 4.8,
                'phone' => '0963272120',
                'image' => '/assets/images/foody-upload-api-foody-mobile-16-190711170924.jpg',
                'sale_percent' => 15,
            ], [
                // 21
                'linkTo' => 'co-le-nem-nuong-nha-trang-kim-nguu',
                'name' => 'Cô Lê - Nem Nướng Nha Trang - Kim Ngưu',
                'type' =>'Quán ăn',
                'location' => '365 Kim Ngưu, P. Vĩnh Tuy,  Quận Hai Bà Trưng, Hà Nội',
                'rate' => 5.0,
                'phone' => '0974338591',
                'image' => '/assets/images/foody-upload-api-foody-mobile-foody-upload-api-foo-210413214319.jpg',
                'sale_percent' => 15,
            ], [
                // 22
                'linkTo' => 'bun-dau-mam-tom-ngo-gach',
                'name' => 'Bún Đậu Mắm Tôm - Ngõ Gạch',
                'type' =>'Quán ăn',
                'location' => '3 Ngõ Gạch,  Quận Hoàn Kiếm, Hà Nội',
                'rate' => 4.9,
                'phone' => '0986715550',
                'image' => '/assets/images/foody-mobile-bun-dau-ng-jpg-778-636208767231965165.jpg',
                'sale_percent' => 0,
            ], [
                // 23
                'linkTo' => 'ngoc-beo-bun-dau-mam-tom-bun-ca-cham',
                'name' => 'Ngọc Béo - Bún Đậu Mắm Tôm & Bún Cá Chấm',
                'type' =>'Quán ăn',
                'location' => '1 Ngách 20/5 Nguyễn Chánh, P. Trung Hoà,  Quận Cầu Giấy, Hà Nội',
                'rate' => 4.8,
                'phone' => '0965123501',
                'image' => '/assets/images/bun-dau-mam-tom-3.jpg',
                'sale_percent' => 0,
            ],[
                // 24
                'linkTo' => 'bao-minh-dac-san-banh-co-truyen-hang-than',
                'name' => 'Bảo Minh - Đặc Sản Bánh Cốm Hàng Than',
                'type' =>'Tiệm bánh',
                'location' => '12 Hàng Than,  Quận Ba Đình, Hà Nội,  Quận Cầu Giấy, Hà Nội',
                'rate' => 4.9,
                'phone' => '0972426842',
                'image' => '/assets/images/foody-mobile-bao-mi-jpg.jpg',
                'sale_percent' => 23,
            ],[
                'linkTo' => 'banh-com-nguyen-minh-ngo-van-chuong',
                'name' => 'Bánh Cốm Nguyễn Minh - Ngõ Văn Chương',
                'type' =>'Tiệm bánh',
                'location' => '11 Ngách 71 Ngõ Văn Chương, Tôn Đức Thắng,  Quận Đống Đa, Hà Nội',
                'rate' => 4.7,
                'phone' => '0968777013',
                'image' => '/assets/images/foody-mobile-12-jpg-630-636041116359769048.jpg',
                'sale_percent' => 0,
            ],[
                'linkTo' => 'long-ran-nhat-quan-nguyen-sieu',
                'name' => 'Lòng Rán Nhất Quán - Nguyễn Siêu',
                'type' =>'Quán ăn ',
                'location' => '23 Nguyễn Siêu,  Quận Hoàn Kiếm, Hà Nội',
                'rate' => 5.0,
                'phone' => '0977599572',
                'image' => '/assets/images/foody-mobile-long-ran-mb-jpg-787-635893394154741196.jpg',
                'sale_percent' => 0,
            ],[
                'linkTo' => 'long-ran-pho-hang-ga',
                'name' => 'Lòng Rán Phố Hàng Gà',
                'type' =>'Quán ăn ',
                'location' => '16C Hàng Gà,  Quận Hoàn Kiếm, Hà Nội',
                'rate' => 4.9,
                'phone' => '0984707040',
                'image' => '/assets/images/foody-mobile-bun-long-jpg-428-636228443127936415.jpg',
                'sale_percent' => 0,
            ],[
                'linkTo' => 'banh-cuon-thanh-tri-dai-dong',
                'name' => 'Bánh Cuốn Thanh Trì - Đại Đồng',
                'type' =>'Ăn vặt',
                'location' => '21 Đại Đồng,  Quận Hoàng Mai, Hà Nội',
                'rate' => 4.8,
                'phone' => '0964046474',
                'image' => '/assets/images/foody-mobile-5-jpg-297-635936498789368082.jpg',
                'sale_percent' => 0,
            ],[
                'linkTo' => 'banh-cuon-thanh-tri-giai-phong',
                'name' => 'Bánh Cuốn Thanh Trì - Giải Phóng',
                'type' =>'Quán ăn ',
                'location' => '24 Ngõ 178 Giải Phóng,  Quận Thanh Xuân, Hà Nội',
                'rate' => 5.0,
                'phone' => '098299789',
                'image' => '/assets/images/foody-mobile-bc3-jpg-637-635797511408236628.jpg',
                'sale_percent' => 0,
            ],
        ]);
    }
}