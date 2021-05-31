let carousel = $('.owl-carousel');
carousel.owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    autoplay:true,
    dots: false,
    autoplayTimeout: 6000,
    responsive: {
        0: {
            items: 1
        },
        768: {
            items: 2
        },
        1200: {
            items: 3
        }
    },
});
$(document).ready(function () {
    carousel.owlCarousel();
});
