<?php

namespace App\Http\Controllers\Suggestion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuggestionController extends Controller
{
    function index()
    {
        return view('Suggestion/suggestion');
    }

    function getSuggestionDetail(Request $request)
    {
        $user = Auth::user();
        $userDetail = $this->computeUserDetail($user);
        return response()->json($userDetail);
    }

    function computeUserDetail($user)
    {
        $bmi = round($user->weight / ($user->height / 50), 2);
        $bmiText = "";
        $bmiSuggestion = "";
        $menu = [];
        if ($bmi < 18.5) {
            $bmiText = "gầy";
            if ($bmi < 15) {
                $bmiText = "quá gầy";
            }
            $bmiSuggestion = "giàu năng lượng, nhiều dầu mỡ";
            $menu = $this->getMenu(1);
        } else if (18.5 <= $bmi && $bmi < 25) {
            $bmiText = "bình thường";
            $bmiSuggestion = "đầy đủ dinh dưỡng, ăn nhiều hoa quả, đủ bữa";
            $menu = $this->getMenu(2);
        } else if ($bmi >= 25) {
            $bmiText = "thừa cân";
            if ($bmi > 35) {
                $bmiText = "béo phì";
            }
            $bmiSuggestion = "thanh đạm, giàu chất xơ, giàu protein, hạn chế ăn đồ ngọt";
            $menu = $this->getMenu(3);
        }
        $userDetail = [
            'avatar' => $user->avatar,
            'weight' => $user->weight,
            'height' => $user->height/100,
            'name' => $user->name,
            'job' => $user->job,
            'bmi' => $bmi,
            'bmiText' => $bmiText,
            'bmiSuggestion' => $bmiSuggestion,
            'menu' => $menu,
        ];
        return $userDetail;
    }
    function getMenu($type)
    {
        $result = [];
        if ($type === 1) {
            array_push($result, "Bữa sáng: 1 bánh mì kẹp trứng + 1 trái chuối + 1 muỗng Mass");
            array_push($result, "Bữa phụ: 1 ly sữa ngũ cốc + 1-2 quả trứng luộc");
            array_push($result, "Bữa trưa: 3 chén cơm + 1 tô canh + cá kho + chuối");
            array_push($result, "Bữa phụ: 1 muỗng sữa Mass");
            array_push($result, "Bữa tối: 1 tô phở + rau đủ loại + 1 ly sinh tố + trái cây");
            array_push($result, "Trước khi ngủ: 1 ly sữa ngũ cốc");
        } else if ($type === 2) {
            array_push($result, "Bữa sáng: 1 tô bún riêu + 1 muỗng sữa Mass + 2 trái chuối");
            array_push($result, "Bữa phụ: 1 ly sữa ngũ cốc");
            array_push($result, "Bữa trưa: 3 chén cơm + 1 tô canh rau ngót + mực xào + cá + nhãn");
            array_push($result, "Bữa phụ: 1-2 củ khoai + 1 trái chuối");
            array_push($result, "Bữa tối: 2 chén cơm + trứng gà chiên + thịt gà kho + 1 lát cá + 1 tô canh");
            array_push($result, "Trước khi ngủ: 1 muỗng Mass");
        } else if ($type === 3) {
            array_push($result, "Bữa sáng: salad rau củ xào , 1 ly nước dưa hấu");
            array_push($result, "Bữa trưa: 1 dĩa cải muỗng xào, 1 chén cơm nhỏ, 1 trái cam");
            array_push($result, "Bữa chiều: 1 ly protein");
            array_push($result, "Bữa tối: 1 dĩa nấm xào thịt bò, 1 lát bánh mì");
        }
        return $result;
    }
}
