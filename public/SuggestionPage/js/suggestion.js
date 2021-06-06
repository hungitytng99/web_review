let requiredFill = `
    <div class="suggestion__required">
        Bạn cần cập nhật đủ thông tin cá nhân (ngày sinh, cân nặng, chiều cao, nghề nghiệp) để chúng tôi có thể đưa ra gợi ý chính xác nhất.
        <a href="/profile?activeTab=2&redirect=suggestion">Cập nhật ngay</a>
    </div>
`;
let mainPanel = $("#suggestion-panel");
(function () {
    handleSuggestionTab();
})();
let currentTab = 1;
function handleSelectTab(element) {
    $(".user__action .user__action-item").each((index, item) => {
        $(item).removeClass("--active");
    })
    $(element).addClass("--active");
    switch ($(element).attr('tabindex')) {
        case "1":
            if (currentTab != 1) {
                currentTab = 1;
                handleSuggestionTab();
            }
            break;
        case "2":
            if (currentTab != 2) {
                currentTab = 2;
                updateSavedRestaurantsPanel()
            }
            break;
        case "3":
            currentTab = 3;
            mainPanel.html("");
            break;
    }
}
// get date
function getDate() {
    let d = new Date();
    let n = d.getDay();
    let dayText = "";
    let dateText = d.getDate() + " tháng " + (d.getMonth() + 1) + ", " + d.getFullYear();
    switch (n) {
        case 0:
            dayText = "Chủ nhật";
            break;
        case 1:
            dayText = "Thứ 2";
            break;
        case 2:
            dayText = "Thứ 3";
            break;
        case value:
            dayText = "Thứ 4";
            break;
        case value:
            dayText = "Thứ 5";
            break;
        case value:
            dayText = "Thứ 6";
            break;
        case value:
            dayText = "Thứ 7";
            break;
    }
    return (dayText + ", " + dateText);
}
//
function updateSuggesionPanel() {
    $.ajax({
        type: 'GET',
        url: '/api/get-suggestion-detail',
        dataType: 'json',
        beforeSend: () => {
            $("#suggestion-loading-img").show();
        },
        complete: () => {
            $("#suggestion-loading-img").hide();
        },
        success: (data) => {
            let menuList = ``;
            data.menu.map((meal) => {
                menuList += `<li class="suggestion__meal-item">${meal}</li>`;
            });
            let suggestionTitle = `
                <div class="suggestion__title">
                    <div>Thực đơn cả ngày của bạn</div>
                    <div id="current__time">${getDate()}</div>
                </div>
            `;
            let suggestionPanel = `
                <div id="suggestion__result" class="suggestion__result">
                   
                       
                  
                    <div class="suggestion__content-box">
                        <div class="suggestion__content">
                            Chào <a href="/" class="name">${data.name}</a>, cân nặng hiện tại của bạn là: <span class="weight">${data.weight}kg</span>, chiều cao của bạn là: <span class="height">${data.height}m</span>. Chúng tôi đã tính
                            chỉ số <a href="https://vi.wikipedia.org/wiki/Ch%E1%BB%89_s%E1%BB%91_kh%E1%BB%91i_c%C6%A1_th%E1%BB%83" target="__blank">BMI</a> (chỉ số nhận định sự cân đối của cơ thể) và các ước tính liên quan đến nghề nghiệp cũng như độ tuổi của bạn để đưa ra kết quả chính xác nhất.
                        </div>
                        <div class="suggestion__caculation-bmi">
                            Chỉ số <span>BMI</span> hiện tại của bạn: <span>${data.bmi}</span>
                            Điều này cho thấy bạn đang ở trạng thái <span>${data.bmiText}</span>. Do đó bạn cần ăn thức ăn <span>${data.bmiSuggestion}</span> để duy trì và cải thiện cơ thể.
                        </div>
                        <div class="suggestion__meal">
                            <div class="suggestion__meal-text">Sau đây là gợi ý thực đơn cho ngày hôm nay của bạn: </div>
                            <ul class="suggestion__meal-list">
                                ${menuList}
                            </ul>
                        </div>
                    </div>
                </div>
            `;
            mainPanel.html(suggestionPanel);
            $("#suggestion-title").html(suggestionTitle);
            // clearInterval(checkRequiredInfoInterval);
        },
        error: (error) => {
            console.log(error);
        }
    });
}
function updateSavedRestaurantsPanel() {
    $.ajax({
        type: 'GET',
        url: '/api/get-saved-restaurants',
        dataType: 'json',
        beforeSend: () => {
            $("#suggestion-loading-img").show();
        },
        complete: () => {
            $("#suggestion-loading-img").hide();
        },
        success: (data) => {
            let savedRestaurantListHtml = ``;
            let savedRestaurantTitle = `
                <div class="suggestion__title">
                    <div>Danh sách nhà hàng đã lưu</div>
                </div>
            `;
            data.map((restaurants) => {
                let restaurantsItem = `
                        <div class="small-gutter col-xs-3 col-lg-4 col-sm-6 col-xs-12 col-12">
                            <div class="search__result">
                                <a href="/">
                                    <div class="search__result-img-box">
                                        <img src=${restaurants.image} alt="result" class="search__result-img">
                                    </div>
                                    <div class="search__result-detail --box">
                                        <div class="search__result-detail-rate">
                                            ${restaurants.rate}
                                        </div>
                                        <div class="search__result-detail-box">
                                            <div class="search__result-detail-name">
                                                ${restaurants.name}
                                            </div>
                                            <div class="search__result-detail-location">
                                                ${restaurants.location}
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                `;
                savedRestaurantListHtml += restaurantsItem;
            });
            mainPanel.html(savedRestaurantListHtml);
            $("#suggestion-title").html(savedRestaurantTitle);

        },
        error: (error) => {
            console.log(error);
        }
    });
}
function handleSuggestionTab() {
    $("#suggestion-loading-img").hide();
    // let checkRequiredInfoInterval = setInterval(() => {
    $.ajax({
        type: 'GET',
        url: '/api/get-user-info',
        dataType: 'json',
        beforeSend: () => {
            $("#suggestion-loading-img").show();
        },
        complete: () => {
            $("#suggestion-loading-img").hide();
        },
        success: (data) => {
            if (data == false) {
                mainPanel.html(requiredFill);
            } else {
                updateSuggesionPanel();
            }
        },
        error: (error) => {
            console.log(error);
        }
    });
    // }, 500);
}

// let checkRequiredInfoInterval = setInterval(() => {
//     $.ajax({
//         type: 'GET',
//         url: '/api/get-user-info',
//         dataType: 'json',
//         success: (data) => {
//             if (data == true) {
//                 updateSuggesionPanel();
//                 clearInterval(checkRequiredInfoInterval);
//             }
//         },
//         error: (error) => {
//             console.log(error);
//         }
//     });
// }, 500);

