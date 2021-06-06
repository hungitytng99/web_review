
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
let loadingImg = `<img src="/assets/images/loading.svg" width="30px" height="30px" alt="loading"></img>`;
(function () {
    //MODAL Setup
    //AJAX
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    // get more dishes
    $.ajax({
        type: 'POST',
        url: '/api/get-more-outstanding-dishes',
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
                <div class="small-gutter col-xl-2 col-lg-3 col-md-3 col-sm-6 col-6">
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
    // api/get restaurants
    $.ajax({
        type: 'POST',
        url: '/api/get-more-restaurants',
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
                                <span> ${restaurant.discount_name}</span>
                            </div>
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
    });
    //infinity scroll
    getInfinityRestaurant();
    //notify fill information
    notifyFillInformation();

})();
function removeActiveExplorePanel() {
    $('.review-content__header-box p').each((index, element) => {
        $(element).removeClass("--active");
    })
}
function handleExplorePanel(element) {
    removeActiveExplorePanel();
    removeActiveExplore();
    $("#explore-default-select").addClass("--active");
    $(element).addClass("--active");
    switch ($(element).attr('data-index')) {
        case "1":
            getInfinityRestaurant();
            break;
        case "2":
            $.ajax({
                type: 'POST',
                url: '/api/get-auth-status',
                dataType: 'json',
                beforeSend: () => {
                    $("#loading-explore").html(loadingImg);
                }, complete: function () {
                    $("#loading-explore").html("");
                },
                success: (data) => {
                    if (data == true) {
                        handleGetSavedRestaurants();
                    } else {
                        let loginRequiredHtml = `
                            <div class="explore__login-required">    
                                Bạn cần đăng nhập để xem nội dung này.<br/>
                                <a href="/login"> Đăng nhập ngay </a>
                            </div>
                        `
                        $('#infinity-restaurants').css("width", "100%");
                        $('#infinity-restaurants').html(loginRequiredHtml);
                    }
                },
                error: (error) => {
                    console.log(error);
                }
            })
            break;
    }

}
function handleGetSavedRestaurants() {
    let InfinityRestaurantsHtml = ``;

    $.ajax({
        type: 'POST',
        url: '/api/get-saved-restaurants',
        dataType: 'json',
        beforeSend: () => {
            $("#loading-explore").html(loadingImg);
        }, complete: function () {
            $("#loading-explore").html("");
        },
        success: (data) => {
            console.log(data.length);
            if (data.length != 0) {
                data.map(restaurant => {
                    let htmpTemp = ` 
                    <div class="small-gutter col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
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
                                <div class="home-comment">
                                    <div class="home-comment__user">
                                        <div>
                                            <a href="#">
                                                <img src="https://images.foody.vn/usr/g836/8359063/avt/c100x100/qhmai-avatar-114-637186600244578770.jpg" alt="" class="home-comment__user-avatar">
                                            </a>
                                        </div>
                                        <div>
                                            <span>Mai quỳnh </span>
                                            <p>Quán sạch sẽ, đồ ăn và thức uống ngon miệng, phù hợp với túi tiền. Nhân viên phục vụ chu đáo</p>
                                        </div>
                                    </div>
                                    <div class="home-comment__interactive">
                                        <div class="home-comment__interactive-box">
                                            <div class="home-comment__comment">
                                                <i class="home-comment__interactive-comment fas fa-comment"></i>
                                                <span>3</span>
                                            </div>
                                            <div class="home-comment__comment">
                                                <i class="home-comment__interactive-comment fas fa-camera"></i>
                                                <span>30</span>
                                            </div>
                                        </div>
                                        <div class="home-comment__interactive-box">
                                            <button class="home-comment__interactive-btn" restaurant-id=${restaurant.id} is-saved=1 onclick="handleSavedRestaurant(this)">
                                                <span>Lưu</span>
                                                <i class="fas fa-bookmark"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    `
                    InfinityRestaurantsHtml += htmpTemp;
                });
            } else {
                InfinityRestaurantsHtml = `
                    <div class="explore__login-required">    
                        Bạn chưa lưu nhà hàng nào.
                    </div>`;
            }

            $('#infinity-restaurants').html(InfinityRestaurantsHtml);
        },
        error: (error) => {
            console.log(error);
        }
    });
}

function handleGetMoreRestaurants(btn) {
    $.ajax({
        type: 'POST',
        url: '/api/get-more-restaurants',
        dataType: 'json',
        data: {
            itemStart: restaurantsItem + 1,
            itemEnd: restaurantsItem + 6,
        },
        beforeSend: () => {
            $("#loading-more").html(loadingImg);
        }, complete: function () {
            $("#loading-more").html("");
        },
        success: (data) => {
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
                                <span> ${restaurant.discount_name}</span>
                            </div>
                         </div>
                    </div>
                </div>`
                restaurantsHtml += htmpTemp;
            });
            $('#sale-restaurants').html(restaurantsHtml);
            if (restaurantsItem === 24) {
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
    MicroModal.show('detail-dish-modal', {
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
            url: '/api/get-more-outstanding-dishes',
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


function handleClickExplore(element) {
    removeActiveExplore();
    removeActiveExplorePanel();
    $("#review-default-select").addClass("--active");
    $(element).addClass("--active");
    getInfinityRestaurant();
}

function removeActiveExplore() {
    $('.review__menu-category-item').each((index, element) => {
        $(element).removeClass("--active");
    })
}

function getInfinityRestaurant() {
    // infinity restaurant
    let InfinityRestaurantsHtml = ``;

    $.ajax({
        type: 'POST',
        url: '/api/get-infinity-restaurants',
        dataType: 'json',
        data: {
            itemLength: 8,
        }, beforeSend: () => {
            $("#loading-explore").html(loadingImg);
        }, complete: function () {
            $("#loading-explore").html("");
        },
        success: (data) => {
            data.map(restaurant => {
                let isSaved = `<i class="far fa-bookmark"></i>`;
                if (restaurant.isSaved == 1) {
                    isSaved = `<i class="fas fa-bookmark"></i>`
                }
                let htmpTemp = ` 
                <div class="small-gutter col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
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
                        <div class="home-comment">
                            <div class="home-comment__user">
                                <div>
                                    <a href="#">
                                        <img src="https://images.foody.vn/usr/g836/8359063/avt/c100x100/qhmai-avatar-114-637186600244578770.jpg" alt="" class="home-comment__user-avatar">
                                    </a>
                                </div>
                                <div>
                                    <span>Mai quỳnh </span>
                                    <p>Quán sạch sẽ, đồ ăn và thức uống ngon miệng, phù hợp
                                        với
                                        túi
                                        tiền. Nhân viên phục vụ chu đáo</p>
                                </div>


                            </div>
                            <div class="home-comment__interactive">
                                <div class="home-comment__interactive-box">
                                    <div class="home-comment__comment">
                                        <i class="home-comment__interactive-comment fas fa-comment"></i>
                                        <span>3</span>
                                    </div>
                                    <div class="home-comment__comment">
                                        <i class="home-comment__interactive-comment fas fa-camera"></i>
                                        <span>30</span>
                                    </div>
                                </div>
                                <div class="home-comment__interactive-box">
                                    <button class="home-comment__interactive-btn" restaurant-id=${restaurant.id} is-saved=${restaurant.isSaved ? 1 : 0} onclick="handleSavedRestaurant(this)">
                                        <span>Lưu</span>
                                        ${isSaved}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                `
                InfinityRestaurantsHtml += htmpTemp;
            });
            $('#infinity-restaurants').html(InfinityRestaurantsHtml);
        },
        error: (error) => {
            console.log(error);
        }
    });
}
// save restaurant
function handleSavedRestaurant(element) {
    $.ajax({
        type: 'POST',
        url: '/api/get-auth-status',
        dataType: 'json',
        beforeSend: () => {
            $("#loading-explore").html(loadingImg);
        }, complete: function () {
            $("#loading-explore").html("");
        },
        success: (data) => {
            if (data == true) {
                let jElement = $(element);
                let saveStatus = jElement.attr('is-saved');
                let restaurantId = jElement.attr('restaurant-id');
                if (saveStatus == 0) {
                    jElement.attr('is-saved', '1');
                    jElement.children("i").addClass("fas");
                    jElement.children("i").removeClass("far");
                    $.ajax({
                        type: 'POST',
                        url: '/api/saved-restaurants',
                        dataType: 'json',
                        data: {
                            restaurantId: restaurantId,
                        },
                        success: (data) => {
                        },
                        error: (error) => {
                            console.log(error);
                            jElement.children("i").toggleClass("fas");
                        }
                    });
                } else if (saveStatus == 1) {
                    jElement.attr('is-saved', '0');
                    jElement.children("i").addClass("far");
                    jElement.children("i").removeClass("fas");
                    $.ajax({
                        type: 'POST',
                        url: '/api/delete-saved-restaurants',
                        dataType: 'json',
                        data: {
                            restaurantId: restaurantId,
                        },
                        success: (data) => {
                        },
                        error: (error) => {
                            console.log(error);
                            jElement.children("i").toggleClass("fas");
                        }
                    });
                }
            } else {
                MicroModal.show('notify-login', {
                    disableScroll: false,
                });
            }
        },
        error: (error) => {
            console.log(error);
        }
    });

}
// handle if user don't fill full infomation
function notifyFillInformation() {
    $.ajax({
        type: 'POST',
        url: '/api/get-auth-status',
        dataType: 'json',
        success: (data) => {
            if (data == true) {
                $.ajax({
                    type: 'POST',
                    url: '/api/get-user-info',
                    dataType: 'json',
                    success: (data) => {
                        console.log(data);
                        if (data == true) {
                            //Modal appear
                            if (!Cookies.get('isShowNotify')) {
                                console.log("SHOWW");

                                MicroModal.show('notify-fill', {
                                    disableScroll: false,
                                });
                                Cookies.set('isShowNotify', 1, { expires: 1 });
                            }
                        }
                    },
                    error: (error) => {
                        console.log(error);
                    }
                });
            }
        },
        error: (error) => {
            console.log(error);
        }
    });

}





