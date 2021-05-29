{{-- Owl carousel --}}
<link rel="stylesheet" href="{{ asset('vendor/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css') }}">
<link rel="stylesheet" href="{{ asset('Base/css/my-carousel.css') }}">
{{-- Content --}}
<div class="banner__carousel">
    <div class="owl-carousel owl-theme">
        @foreach ($carouselLists as $carouselItem)
        <div class="banner__carousel-item">
            <img src={{$carouselItem['img']}}>
            <div id="owl-item-0" class="banner__carousel-text">
                <div class="banner__carousel-title">{{ $carouselItem['user']}}</div>
                <div class="banner__carousel-content">{{ $carouselItem['comment']}}</div>
                <div>vi tri </div>
            </div>
        </div>
        @endforeach
    </div>
</div>