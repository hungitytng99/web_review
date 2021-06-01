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

// js for focus header search nav 
let headerSearch = $('input.header__nav-search-input');
let headerSeacrhBorder = $('div.header__nav-search');
headerSearch.focus(() => {

    headerSeacrhBorder.css('border', '1px solid var(--tertiary)');
})
headerSearch.blur(() => {
    headerSeacrhBorder.css('border', '1px solid #999');
})
//prevent scroll when open mobile nav
let mobileNavControl = $('#mobile-nav-check');
mobileNavControl.prop('checked', false);
mobileNavControl.change(() => {
    if (mobileNavControl.prop('checked')) {
        $('body').css('overflow', 'hidden');
        console.log("prevent scroll");
    } else {
        $('body').css('overflow', 'scroll');
    }
});

// Ajax 
// + For outstanding food
let restaurantsHtml = ``;
let restaurantsItem = 12;

(function () {
    //MODAL Setup
    //AJAX
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    // loading
    $(document).ajaxStart(function () {
        let loadingImg = `<img src="/assets/images/loading.svg" width="30px" height="30px" alt="loading"></img>`;
        $("#loading-more").html(loadingImg);
    }).ajaxStop(function () {
        $("#loading-more").html("");
    });
    // getmore dishes
    $.ajax({
        type: 'POST',
        url: '/get-more-outstanding-dishes',
        dataType: 'json',
        success: (data) => {
            let outstandingFoodHtml = ``;
            data.map(ele => {
                let listLocation = ``;
                ele.location.map((location) => {
                    let locationHtml =
                        `<li class="dish__location-item">
                            <a href=${location[1]}> ${location[0]}</a>
                        </li>`;
                    listLocation += locationHtml;
                })
                let htmpTemp = ` 
                <div class="small-gutter flex-1 col-xl-2 col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="bt-content__item">
                        <div class="restaurant">
                            <a href=${ele.href} onclick="showDetailDish(event,this)">
                                <div class="restaurant__img-box">
                                    <img class="restaurant__img" src=${ele.image} alt="res"/>
                                </div>
                                <div class="restaurant__info">
                                    <div class="restaurant__name">${ele.name}</div>
                                    <div class="dish__description">${ele.description}</div>
                                </div>
                            </a>
                        </div>
                        <div class="restaurant__discount">
                            <div class="restaurant__discount-item dishes__location">
                                <i class="fas fa-map-marker-alt"></i>
                                <span> Địa điểm ăn ngon </span>
                            </div>
                            <ul class="dish__location-list">
                                ${listLocation}
                            </ul>
                        </div>
                    </div>
                </div>`
                outstandingFoodHtml += htmpTemp;
            });
            $('#outstanding-food').html(outstandingFoodHtml);

        },
        error: (error) => {
            console.log(error);
        }
    });
    //get restaurants
    $.ajax({
        type: 'POST',
        url: '/get-more-restaurants',
        dataType: 'json',
        data: {
            itemStart: 1,
            itemEnd: restaurantsItem,
        },
        success: (data) => {
            data.map(restaurant => {

                let htmpTemp = ` 
                <div class="small-gutter col-xl-2 col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="bt-content__item">
                        <div class="restaurant">
                            <a href=${restaurant.linkTo} >
                                <div class="restaurant__img-box">
                                    <img class="restaurant__img" src=${restaurant.image} alt="res">
                                </div>
                                <div class="restaurant__info">
                                    <div class="restaurant__name">${restaurant.name}</div>
                                    <div class="restaurant__address">${restaurant.location}</div>
                                </div>
                            </a>
                        </div>
                        <div class="restaurant__discount">
                            <div class="restaurant__discount-item">
                                <i class="fas fa-tag"></i>
                                <span> Ăn trưa - Đi 4 tính 3</span>
                            </div>
                            <a href="#" class="restaurant__discount-more">
                                Xem thêm ưu đãi...
                            </a>
                         </div>
                    </div>
                </div>`
                restaurantsHtml += htmpTemp;
            });
            $('#sale-restaurants').html(restaurantsHtml);

        },
        error: (error) => {
            console.log(error);
        }
    })
})();

function handleGetMoreRestaurants(btn) {
    $.ajax({
        type: 'POST',
        url: '/get-more-restaurants',
        dataType: 'json',
        data: {
            itemStart: restaurantsItem + 1,
            itemEnd: restaurantsItem + 6,
        },
        success: (data) => {
            console.log(data);
            restaurantsItem += 6;
            data.map(restaurant => {
                let htmpTemp = ` 
                <div class="small-gutter col-xl-2 col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="bt-content__item">
                        <div class="restaurant">
                            <a href=${restaurant.linkTo}>
                                <div class="restaurant__img-box">
                                    <img class="restaurant__img" src=${restaurant.image} alt="res">
                                </div>
                                <div class="restaurant__info">
                                    <div class="restaurant__name">${restaurant.name}</div>
                                    <div class="restaurant__address">${restaurant.location}</div>
                                </div>
                            </a>
                        </div>
                        <div class="restaurant__discount">
                            <div class="restaurant__discount-item">
                                <i class="fas fa-tag"></i>
                                <span> Ăn trưa - Đi 4 tính 3</span>
                            </div>
                            <a href="#" class="restaurant__discount-more">
                                Xem thêm ưu đãi...
                            </a>
                         </div>
                    </div>
                </div>`
                restaurantsHtml += htmpTemp;
            });
            $('#sale-restaurants').html(restaurantsHtml);
            if (restaurantsItem === 30) {
                $("button.bt-content__more").hide();
            }
        },
        error: (error) => {
            console.log(error);
        }
    });
}

// Modal
function showDetailDish(event, element) {
    event.preventDefault();
    function onShow() {
        console.log("show");
    }
    function onClose() {
        console.log("close");
    }
    MicroModal.show('detail-dish-modal', {
        onShow: onShow,
        onClose: onClose,
        disableScroll: true,
    });
    let modalHref = element.getAttribute("href");
    let modalTitle = element.getElementsByClassName('restaurant__name')[0].innerText;
    $('#detail-dish-modal-title').html(modalTitle);
    let isExcuteLoading = $('#detail-dish-content').text() == '';

    if (isExcuteLoading) {
        $('#loading-img').show();
        $.ajax({
            type: 'POST',
            url: '/get-more-outstanding-dishes',
            dataType: 'json',
            data: {
                href: modalHref,
            },
            success: (data) => {
                let listLocation = ``;
                data[0].location.map((location) => {
                    let locationHtml =
                        `<li class="location__item">
                                <a href=${location[1]} class="location__link"> ${location[0]}</a>
                            </li>`;
                    listLocation += locationHtml;
                })
                let contentHtml = `
                <div class="dish">
                    <div class="img-box">
                        <img src=${data[0].image} alt="dish-image">
                    </div>
                    <p class="description">
                        ${data[0].description}
                    </p>
                </div>
                <div class="location">
                    <div class="location__title">
                        <i class="fas fa-map-marker-alt"></i>
                         <span>Các địa điểm ăn ngon, giá rẻ</span>
                    </div>
                    <ul class="location__list">
                        ${listLocation}
                    </ul>
                </div>`
                $('#detail-dish-content').html(contentHtml);
            },
            complete: () => {
                $('#loading-img').hide();
            },
            error: (error) => {
                console.log(error);
            }
        });
    }
}

function showAccountDropdown(e){
    if(e.type == "click"){
        $('#header__dropdown-triangle-up').toggleClass("show-element");
        $('#account__dropdown').toggleClass("show-element");
    } else{
        $('#header__dropdown-triangle-up').removeClass("show-element");
        $('#account__dropdown').removeClass("show-element");
    }
    }
    

function preventHideDropdown(e){
    e.preventDefault();
}







