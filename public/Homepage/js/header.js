function showAccountDropdown(e) {
    if (e.type == "click") {
        $('#header__dropdown-triangle-up').toggleClass("show-element");
        $('#account__dropdown').toggleClass("show-element");
    } else {
        $('#header__dropdown-triangle-up').removeClass("show-element");
        $('#account__dropdown').removeClass("show-element");
    }
}
// js for focus header search nav 
let headerSearch = $('input.header__nav-search-input');
let headerSeacrhBorder = $('div.header__nav-search');
headerSearch.focus(() => {

    headerSeacrhBorder.css('border', '1px solid var(--tertiary)');
})
headerSearch.blur(() => {
    headerSeacrhBorder.css('border', '1px solid #999');
})
function preventHideDropdown(e) {
    e.preventDefault();
}
//prevent scroll when open mobile nav
let mobileNavHandle = $('#mobile-nav-check');
mobileNavHandle.prop('checked', false);
mobileNavHandle.change(() => {
    if (mobileNavHandle.prop('checked')) {
        $('body').css('overflow', 'hidden');
    } else {
        $('body').css('overflow', 'scroll');
    }
})
// handle active tab
let pathname = window.location.pathname;
switch (pathname) {
    case "/":
        $("#home-link").addClass("--active");
        $("#about-link").removeClass("--active");
        break;
    case "/about-us":
        $("#about-link").addClass("--active");
        $("#home-link").removeClass("--active");
        break;
}
// Search
let loadingImgHeader = `<img src="/assets/images/loading.svg" width="30px" height="30px" alt="loading"></img>`;
let typingTimer;
function searchParams(event, element) {
    // console.log(event,"  ",element);
    if ($(element).val().length > 0) {
        if (event.key == "Enter") {
            document.location.href = `/search/params=${$(element).val()}`;
            return;
        }
        handleSearchAjax($(element).val());

    } else {
        $('#header-search-result').css('display', 'none');
    }
}
function handleSearchAjax(keyType) {
    $('#header-search-result').css('display', 'block');
    $('#header-search-result a').attr('href', '/search/params=' + keyType);
    $('#search-key').html(keyType);
    $.ajax({
        type: 'GET',
        url: '/api/search',
        dataType: 'json',
        data: {
            params: keyType,
        }, beforeSend: () => {
            $("#loading-search-more").html(`<div class="search-loading">${loadingImgHeader}</div>`);
            $('#search-result').html("");
        }, complete: function () {
            $("#loading-search-more").html("");
        },
        success: (data) => {
            let lengthData = data.length;
            let extractCount = data[lengthData - 1].extractCount;
            let noResultHtml = ``;
            if (extractCount == 0) {
                noResultHtml = `
                <div class="header__search-result-none">
                    Không có kết quả tìm kiếm nào phù hợp.
                </div>
                `;
            }
            let extractHtml = ``;
            for (let i = 0; i < extractCount; i++) {
                extractHtml += `
                <li class="header__search-result-item">
                    <a href="/${data[i].linkTo}">
                        <div class="header__search-image-box">
                            <img src=${data[i].image}>
                        </div>
                        <div class="header__search-result-detail">
                            <div class="header__search-result-name">${data[i].name}</div>
                            <div class="header__search-result-location">${data[i].location}</div>
                        </div>
                        <div class="header__search-result-rate">${data[i].rate}</div>
                    </a>
                </li>
                `
            }
            let suggestHtml = `
            <li class="header__search-result-item">
                <a href="/${data[lengthData - 2].linkTo}">
                    <div class="header__search-image-box">
                        <img src=${data[lengthData - 2].image}>
                    </div>
                    <div class="header__search-result-detail">
                        <div class="header__search-result-name">${data[lengthData - 2].name}</div>
                        <div class="header__search-result-location">${data[lengthData - 2].location}</div>
                    </div>
                    <div class="header__search-result-rate">${data[lengthData - 2].rate}</div>
                </a>
            </li>
            <li class="header__search-result-item">
                <a href="/${data[lengthData - 3].linkTo}">
                    <div class="header__search-image-box">
                        <img src=${data[lengthData - 3].image}>
                    </div>
                    <div class="header__search-result-detail">
                        <div class="header__search-result-name">${data[lengthData - 3].name}</div>
                        <div class="header__search-result-location">${data[lengthData - 3].location}</div>
                    </div>
                    <div class="header__search-result-rate">${data[lengthData - 3].rate}</div>
                </a>
            </li>
            `;
            let htmlTemp = `
                    <div class="header__search-result-title">Đúng nhất</div>
                    <ul class="header__search-result-list">
                        ${noResultHtml}
                        ${extractHtml}
                    </ul>
                    <div class="header__search-result-title">Gợi ý cho bạn</div>
                    <ul class="header__search-result-list">
                        ${suggestHtml}
                    </ul>
                    `;
            $('#search-result').html(htmlTemp);
        },
        error: (error) => {
            console.log(error);
        }
    });
}
function hideSearchPanel() {
    $('#header-search-result').css('display', 'none');
}
// for screen < 480px , handle search on Modal
function submitSearchForm() {
    let searchParams = $("#mobile-search-input").val();
    if (searchParams.length > 0) {
        window.location.href = "/search/params=" + searchParams;
    }
}
function handlePressEnter(event) {
    if (event.key == "Enter") {
        submitSearchForm();
    }
}