@extends('Layouts.page')
@section('title', 'Foodee - Trang chủ')
@section('css')
<link rel="stylesheet" href="/SearchPage/css/search_result.css">
@endsection

@section('js')

@endsection
<?php
$lengthResult = count($listRestaurants);
$extractCount = $listRestaurants[$lengthResult - 1]['extractCount'];
$extractArray = array_slice($listRestaurants, 0, $extractCount);
$suggestionArray = array_slice($listRestaurants, $extractCount, $lengthResult - 1 - $extractCount);
// dd($suggestionArray);
// dd($extractArray);
?>
@section('content')
@include('Layouts.header')
<!-- content -->
<div class="container">
    <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-3 col-4">
            <ul class="result__category">
                <li class="result__category-item --active">
                    Địa điểm
                </li>
                <li class="result__category-item">
                    Bộ sưu tập
                </li>
            </ul>
        </div>
        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9 col-8">
            <div class="result__detail">
                <div class="result__count">
                    <span><?php echo $extractCount ?></span> kết quả tìm kiếm đúng nhất cho từ khóa "<p><?php echo $paramsSearch ?></p>"
                </div>
                <div id="result-search-list" class="row">
                    @foreach( $extractArray as $restaurant)
                    <div class="col-xs-3 col-lg-4 col-sm-6 col-xs-6 col-12">
                        <div class="search__result">
                            <a href="<?php echo "/".$restaurant->linkTo?>">
                                <div class="search__result-img-box">
                                    <img src="<?php echo $restaurant->image ?>" alt="result" class="search__result-img">
                                </div>
                                <div class="search__result-detail">
                                    <div class="search__result-detail-rate">
                                        <?php echo $restaurant->rate ?>
                                    </div>
                                    <div class="search__result-detail-box">

                                        <div class="search__result-detail-name">
                                            <?php echo $restaurant->name ?>
                                        </div>
                                        <div class="search__result-detail-location">
                                            <?php echo $restaurant->location ?>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <ul class="search__result-comment-list">
                                <li class="search__result-comment-item">
                                </li>
                            </ul>
                            <div class="search__result-react">
                                <div class="search__result-react-box">
                                    <div class="search__result-react-item">
                                        <i class="fas fa-comment"></i>
                                        <span>81</span>
                                    </div>
                                    <div class="search__result-react-item">
                                        <i class="fas fa-camera"></i>
                                        <span>231</span>
                                    </div>
                                </div>
                                <div class="search__result-save">
                                    <i class="far fa-bookmark"></i>
                                    <span>Lưu</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- Suggestion -->
                <div class="result__count">
                    Các nhà hàng gợi ý cho bạn:
                </div>
                <div id="result-search-list" class="row">
                    @foreach( $suggestionArray as $restaurant)
                    <div class="col-xs-3 col-lg-4 col-sm-6 col-xs-6 col-12">
                        <div class="search__result">
                            <a href="<?php echo "/".$restaurant->linkTo?>">
                                <div class="search__result-img-box">
                                    <img src="<?php echo $restaurant->image ?>" alt="result" class="search__result-img">
                                </div>
                                <div class="search__result-detail">
                                    <div class="search__result-detail-rate">
                                        <?php echo $restaurant->rate ?>
                                    </div>
                                    <div class="search__result-detail-box">

                                        <div class="search__result-detail-name">
                                            <?php echo $restaurant->name ?>
                                        </div>
                                        <div class="search__result-detail-location">
                                            <?php echo $restaurant->location ?>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <ul class="search__result-comment-list">
                                <li class="search__result-comment-item">
                                </li>
                            </ul>
                            <div class="search__result-react">
                                <div class="search__result-react-box">
                                    <div class="search__result-react-item">
                                        <i class="fas fa-comment"></i>
                                        <span>81</span>
                                    </div>
                                    <div class="search__result-react-item">
                                        <i class="fas fa-camera"></i>
                                        <span>231</span>
                                    </div>
                                </div>
                                <div class="search__result-save">
                                    <i class="far fa-bookmark"></i>
                                    <span>Lưu</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<div class="space"></div>

<!-- <div class="container">
    <div class="row">
        
    </div>
</div> -->
<!-- end content -->
@include('Layouts.footer')
@endsection