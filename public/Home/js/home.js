// logo
// let logo_name = "foodee";
// $('.logo_name').each((index) => {
//     console.log('print logo');
//     console.log($(this));
// })

// let nav_l = $('#review-nav-l');
// let nav_r = $('#review-nav-r');
// $.fn.scrollEnd = function (callback, timeout) {
//     $(this).on('scroll', function () {
//         var $this = $(this);
//         if ($this.data('scrollTimeout')) {
//             clearTimeout($this.data('scrollTimeout'));
//         }
//         $this.data('scrollTimeout', setTimeout(callback, timeout));
//     });
// };
// function reviewNavAnimate(eleArr) {
//     eleArr.forEach(element => {
//         if (element.length > 0) {
//             element.waypoint((direction) => {
//                 //Khi cham den phan tu nav
//                 if (direction === 'down') {
//                     console.log('down');
//                     $(window).scrollEnd((e) => {
//                         // console.log(this.scrollY, nav_l.position().top);
//                         console.log('thuc hien animation');
//                         if (!element.hasClass('review-nav__animated')) {
//                             element.addClass('review-nav__animated')
//                         }
//                         setTimeout(() => {
//                             element.removeClass('review-nav__animated')

//                         }, 200)
//                         // animation: nav_down 0.3s linear;
//                     }, 200)
//                 }
//             });
//         }
//     });

// }
// $(function () {
//     reviewNavAnimate([nav_l, nav_r]);
// })