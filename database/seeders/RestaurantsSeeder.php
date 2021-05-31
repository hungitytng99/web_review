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
<<<<<<< HEAD
                'id' => 'nom-ong-phuc-nghia-tan',
=======
                'linkTo' => 'nom-ong-phuc-nghia-tan',
>>>>>>> fe8b7cd52930dd744c9fd54e07a89ff4dca36c32
                'name' => 'Nộm Ông Phúc - Nghĩa Tân',
                'location' => 'Ngõ 1 Nghĩa Tân, Cầu Giấy, Hà Nội',
                'rate' => 4.5,
                'phone' => '',
                'image' => '/assets/images/nom-ong-phuc.jpg',
                'sale_percent' => 15,
            ], [
<<<<<<< HEAD
                'id' => 'chan-ga-rut-xuong-cau-giay-shop-online',
=======
                'linkTo' => 'chan-ga-rut-xuong-cau-giay-shop-online',
>>>>>>> fe8b7cd52930dd744c9fd54e07a89ff4dca36c32
                'name' => 'Chân Gà Rút Xương - Cầu Giấy - Shop Online',
                'location' => '92B Yên Hoà, Cầu Giấy, Hà Nội',
                'rate' => 4.5,
                'phone' => '0372906190',
                'image' => '/assets/images/foody-upload-api-foody-mobile-chan-ga-2-jpg-180928192552.jpg',
                'sale_percent' => 0,
            ], [
<<<<<<< HEAD
                'id' => 'cha-ca-la-vong-pho-cha-ca',
=======
                'linkTo' => 'cha-ca-la-vong-pho-cha-ca',
>>>>>>> fe8b7cd52930dd744c9fd54e07a89ff4dca36c32
                'name' => 'Chả Cá Lã Vọng - Phố Chả Cá',
                'location' => '107 Nguyễn Trường Tộ, Quận Ba Đình, Hà Nội',
                'rate' => 4.9,
                'phone' => '0373150484',
                'image' => '/assets/images/foody-mobile-cha-ca-la-vong.jpg',
                'sale_percent' => 0,
            ], [
<<<<<<< HEAD
                'id' => 'cha-ca-anh-vu-giang-vo-ba-dinh',
=======
                'linkTo' => 'cha-ca-anh-vu-giang-vo-ba-dinh',
>>>>>>> fe8b7cd52930dd744c9fd54e07a89ff4dca36c32
                'name' => 'Chả Cá Anh Vũ',
                'location' => '120 K1 Giảng Võ, quận Ba Đình, Hà Nội',
                'rate' => 4.5,
                'phone' => '0358355766',
                'image' => '/assets/images/foody-mobile-cha-ca-anh-vu-mb-jpg-893-635812120350349398.jpg',
                'sale_percent' => 0,
<<<<<<< HEAD
=======
            ], [
                'linkTo' => 'hai-san-long-thuy-nguyen-ngoc-vu',
                'name' => 'Long Thủy - Bún Thái Hải Sản - Nguyễn Ngọc Vũ',
                'location' => '129B Nguyễn Ngọc Vũ, Cầu Giấy, Hà Nội',
                'rate' => 4.0,
                'phone' => '0362232314',
                'image' => '/assets/images/foody-mobile-thai3-jpg-537-635742765984388698.jpg',
                'sale_percent' => 0,
            ], [
                'linkTo' => 'teen-s-food-cac-mon-an-vat-thuy-khue',
                'name' => 'Teen\'s Food - Các Món Ăn Vặt - Thụy Khuê',
                'location' => '121A Thụy Khê, Tây Hồ, Hà Nội',
                'rate' => 4.0,
                'phone' => '0352155526',
                'image' => '/assets/images/foody-upload-api-foody-mobile-foody-upload-api-foo-210317121956.jpg',
                'sale_percent' => 0,
            ], [
                'linkTo' => 'quan-com-hem-tay-son',
                'name' => 'Quán Cơm Hẻm - Tây Sơn',
                'location' => '3/34 Ngõ 252 Tây Sơn, Đống Đa, Hà Nội',
                'rate' => 4.0,
                'phone' => '0358563606',
                'image' => '/assets/images/foody-upload-api-foody-mobile-com-190528165339.jpg',
                'sale_percent' => 0,
            ], [
                'linkTo' => 'banh-mi-kep-cha-bo-booby-tran-dai-nghia',
                'name' => 'Cơm Gà Giòn Booby - Trần Đại Nghĩa',
                'location' => '28 Ngõ 183 Trần Đại Nghĩa, P. Bách Khoa, Hai Bà Trưng, Hà Nội',
                'rate' => 4.0,
                'phone' => '0865080906',
                'image' => '/assets/images/foody-upload-api-foody-mobile-com-jpg-180813103513.jpg',
                'sale_percent' => 0,
            ], [
                'linkTo' => 'com-bo-sot-nam-bun-mien-tron-30k-196-cau-giay',
                'name' => 'Cơm Bò Sốt Nấm & Bún Miến Trộn 30k - 196 Cầu Giấy',
                'location' => '196 Cầu Giấy, Cầu Giấy, Hà Nội',
                'rate' => 4.0,
                'phone' => '0862565154',
                'image' => '/assets/images/image-72b3f597-200910115833.jpg',
                'sale_percent' => 0,
            ], [
                'linkTo' => 'bun-dau-met-minh-thu-van-minh',
                'name' => 'Bún Đậu Mẹt Minh Thư - Văn Minh',
                'location' => '1 Ngõ Văn Minh, P. Mai Dịch, Cầu Giấy, Hà Nội',
                'rate' => 4.0,
                'phone' => '0363855179',
                'image' => '/assets/images/foody-upload-api-foody-mobile-14463225_12696715897-201111121507.jpg',
                'sale_percent' => 0,
            ], [
                'linkTo' => 'ba-ba-quan-com-ga-xiu-hoang-hoa-tham',
                'name' => 'Bà Ba Quán - Cơm Gà Xíu - Hoàng Hoa Thám',
                'location' => '12 Ngách 189/35 Hoàng Hoa Thám, Ba Đình, Hà Nội',
                'rate' => 4.0,
                'phone' => '0358355766',
                'image' => '/assets/images/foody-upload-api-foody-mobile-com-ga-190516171635.jpg',
                'sale_percent' => 0,
            ], [
                'linkTo' => 'bep-cuu-com-van-phong-online',
                'name' => 'Bếp Cừu - Cơm Văn Phòng Online',
                'location' => '33 Ngách 1 Ngõ 376 Đường Bưởi, Ba Đình, Hà Nội',
                'rate' => 4.0,
                'phone' => '0362232314',
                'image' => '/assets/images/foody-upload-api-foody-mobile-78764720_98295963872-191213093811.jpg',
                'sale_percent' => 0,
            ], [
                'linkTo' => 'gimbab-han-quoc-ngoc-khanh',
                'name' => 'Gimbab Hàn Quốc - Ngọc Khánh',
                'location' => '52 Ngọc Khánh, Ba Đình, Hà Nội',
                'rate' => 4.0,
                'phone' => '0352155526',
                'image' => '/assets/images/foody-mobile-3-jpg-831-635857700342239766.jpg',
                'sale_percent' => 0,
            ], [
                'linkTo' => 'banh-mi-nem-khoai-khoai-lang-lac-kim-ma-thuong',
                'name' => 'Bánh Mì Nem Khoai & Khoai Lang Lắc - Kim Mã Thượng',
                'location' => '10 Kim Mã thượng, Ba Đình, Hà Nội',
                'rate' => 4.0,
                'phone' => '0865080906',
                'image' => '/assets/images/foody-upload-api-foody-mobile-bmnk-jpg-180920170432.jpg',
                'sale_percent' => 0,
            ], [
                'linkTo' => 'teen-s-food-cac-mon-an-vat-nguyen-cong-hoan',
                'name' => 'Teen\'s Food - Các Món Ăn Vặt - Nguyễn Công Hoan',
                'location' => '11 Nguyễn Công Hoan, Ba Đình, Hà Nội',
                'rate' => 4.0,
                'phone' => '0363855179',
                'image' => '/assets/images/foody-upload-api-foody-mobile-teen-food-1-jpg-181206142142.jpg',
                'sale_percent' => 0,
            ], [
                'linkTo' => 'thu-hang-com-van-phong',
                'name' => 'Thu Hằng - Cơm Văn Phòng',
                'location' => '102 C16 Nguyễn Quý Đức, Thanh Xuân, Hà Nội',
                'rate' => 4.0,
                'phone' => '0989297493',
                'image' => '/assets/images/foody-upload-api-foody-mobile-com-190405140510.jpg',
                'sale_percent' => 0,
            ], [
                'linkTo' => 'sua-chua-tran-chau-now-duy-tan',
                'name' => 'Sữa Chua Trân Châu Hạ Long - NOW - Duy Tân',
                'location' => '62 Duy Tân, Cầu Giấy, Hà Nội',
                'rate' => 4.0,
                'phone' => '0972842734',
                'image' => '/assets/images/foody-upload-api-foody-mobile-16fe74d1-4b6f-41ce-a-200420103338.jpg',
                'sale_percent' => 0,
            ], [
                'linkTo' => 'banh-mi-cha-nong-dung-hanh-nguyen-tuan',
                'name' => 'Bánh Mì Chả Nóng Dũng Hạnh - Nguỵ Như Kon Tum',
                'location' => '8A Ngõ 90 Ngụy Như Kon Tum, Thanh Xuân, Hà Nội',
                'rate' => 4.0,
                'phone' => '0984061861',
                'image' => '/assets/images/image-da788f1b-200908105306.jpg',
                'sale_percent' => 0,
            ], 
            //trash
            [
                'linkTo' => 'banh-mi-cha-nong-dung-hanh-nguyen-tuan',
                'name' => 'Bánh Mì Chả Nóng Dũng Hạnh - Nguỵ Như Kon Tum',
                'location' => '8A Ngõ 90 Ngụy Như Kon Tum, Thanh Xuân, Hà Nội',
                'rate' => 4.0,
                'phone' => '0984061861',
                'image' => '/assets/images/image-da788f1b-200908105306.jpg',
                'sale_percent' => 0,
            ], [
                'linkTo' => 'banh-mi-cha-nong-dung-hanh-nguyen-tuan',
                'name' => 'Bánh Mì Chả Nóng Dũng Hạnh - Nguỵ Như Kon Tum',
                'location' => '8A Ngõ 90 Ngụy Như Kon Tum, Thanh Xuân, Hà Nội',
                'rate' => 4.0,
                'phone' => '0984061861',
                'image' => '/assets/images/image-da788f1b-200908105306.jpg',
                'sale_percent' => 0,
            ], [
                'linkTo' => 'banh-mi-cha-nong-dung-hanh-nguyen-tuan',
                'name' => 'Bánh Mì Chả Nóng Dũng Hạnh - Nguỵ Như Kon Tum',
                'location' => '8A Ngõ 90 Ngụy Như Kon Tum, Thanh Xuân, Hà Nội',
                'rate' => 4.0,
                'phone' => '0984061861',
                'image' => '/assets/images/image-da788f1b-200908105306.jpg',
                'sale_percent' => 0,
            ], [
                'linkTo' => 'banh-mi-cha-nong-dung-hanh-nguyen-tuan',
                'name' => 'Bánh Mì Chả Nóng Dũng Hạnh - Nguỵ Như Kon Tum',
                'location' => '8A Ngõ 90 Ngụy Như Kon Tum, Thanh Xuân, Hà Nội',
                'rate' => 4.0,
                'phone' => '0984061861',
                'image' => '/assets/images/image-da788f1b-200908105306.jpg',
                'sale_percent' => 0,
            ], [
                'linkTo' => 'banh-mi-cha-nong-dung-hanh-nguyen-tuan',
                'name' => 'Bánh Mì Chả Nóng Dũng Hạnh - Nguỵ Như Kon Tum',
                'location' => '8A Ngõ 90 Ngụy Như Kon Tum, Thanh Xuân, Hà Nội',
                'rate' => 4.0,
                'phone' => '0984061861',
                'image' => '/assets/images/image-da788f1b-200908105306.jpg',
                'sale_percent' => 0,
            ], [
                'linkTo' => 'banh-mi-cha-nong-dung-hanh-nguyen-tuan',
                'name' => 'Bánh Mì Chả Nóng Dũng Hạnh - Nguỵ Như Kon Tum',
                'location' => '8A Ngõ 90 Ngụy Như Kon Tum, Thanh Xuân, Hà Nội',
                'rate' => 4.0,
                'phone' => '0984061861',
                'image' => '/assets/images/image-da788f1b-200908105306.jpg',
                'sale_percent' => 0,
            ], [
                'linkTo' => 'banh-mi-cha-nong-dung-hanh-nguyen-tuan',
                'name' => 'Bánh Mì Chả Nóng Dũng Hạnh - Nguỵ Như Kon Tum',
                'location' => '8A Ngõ 90 Ngụy Như Kon Tum, Thanh Xuân, Hà Nội',
                'rate' => 4.0,
                'phone' => '0984061861',
                'image' => '/assets/images/image-da788f1b-200908105306.jpg',
                'sale_percent' => 0,
            ], [
                'linkTo' => 'banh-mi-cha-nong-dung-hanh-nguyen-tuan',
                'name' => 'Bánh Mì Chả Nóng Dũng Hạnh - Nguỵ Như Kon Tum',
                'location' => '8A Ngõ 90 Ngụy Như Kon Tum, Thanh Xuân, Hà Nội',
                'rate' => 4.0,
                'phone' => '0984061861',
                'image' => '/assets/images/image-da788f1b-200908105306.jpg',
                'sale_percent' => 0,
            ], [
                'linkTo' => 'banh-mi-cha-nong-dung-hanh-nguyen-tuan',
                'name' => 'Bánh Mì Chả Nóng Dũng Hạnh - Nguỵ Như Kon Tum',
                'location' => '8A Ngõ 90 Ngụy Như Kon Tum, Thanh Xuân, Hà Nội',
                'rate' => 4.0,
                'phone' => '0984061861',
                'image' => '/assets/images/image-da788f1b-200908105306.jpg',
                'sale_percent' => 0,
            ], [
                'linkTo' => 'banh-mi-cha-nong-dung-hanh-nguyen-tuan',
                'name' => 'Bánh Mì Chả Nóng Dũng Hạnh - Nguỵ Như Kon Tum',
                'location' => '8A Ngõ 90 Ngụy Như Kon Tum, Thanh Xuân, Hà Nội',
                'rate' => 4.0,
                'phone' => '0984061861',
                'image' => '/assets/images/image-da788f1b-200908105306.jpg',
                'sale_percent' => 0,
            ], [
                'linkTo' => 'banh-mi-cha-nong-dung-hanh-nguyen-tuan',
                'name' => 'Bánh Mì Chả Nóng Dũng Hạnh - Nguỵ Như Kon Tum',
                'location' => '8A Ngõ 90 Ngụy Như Kon Tum, Thanh Xuân, Hà Nội',
                'rate' => 4.0,
                'phone' => '0984061861',
                'image' => '/assets/images/image-da788f1b-200908105306.jpg',
                'sale_percent' => 0,
            ], [
                'linkTo' => 'banh-mi-cha-nong-dung-hanh-nguyen-tuan',
                'name' => 'Bánh Mì Chả Nóng Dũng Hạnh - Nguỵ Như Kon Tum',
                'location' => '8A Ngõ 90 Ngụy Như Kon Tum, Thanh Xuân, Hà Nội',
                'rate' => 4.0,
                'phone' => '0984061861',
                'image' => '/assets/images/image-da788f1b-200908105306.jpg',
                'sale_percent' => 0,
>>>>>>> fe8b7cd52930dd744c9fd54e07a89ff4dca36c32
            ], 
        ]);
    }
}
