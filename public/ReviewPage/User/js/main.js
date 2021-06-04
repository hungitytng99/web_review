let rateCircles = document.getElementsByClassName('rate');

let updateRateView = () => {
    for (let i = 0; i < rateCircles.length; i++) {
        if (rateCircles[i].textContent >= 7) {
            rateCircles[i].classList.add('green');
        } else if (rateCircles[i].textContent >= 4) {
            rateCircles[i].classList.add('yellow');
        } else {
            rateCircles[i].classList.add('red');
        }
    }
}

updateRateView();

let updateImagesView = (arr) => {
    let string = '';
    arr.forEach(element => {
        string += '<div class="column">';
        string += '<img class="w-100" src="' + element + '" alt="image">';
        string += '</div>';
    });
    return string;
}

let userAvatar = $('#user-avatar').attr('src');
let userName = $('#user-name').text();
let userId = $('#user-id').text();

let sendRequest = (value) => {
    $.ajax({
        url: "/get-restaurant",
        type: "POST",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
            user_id: userId,
            res_id: value
        },
        success: function (response) {
            console.log(response);

            $('#reviews-container').text(null);

            if (response) {
                $.each($('.activities-num'), (index, element) => {
                    element.innerHTML = response.data.length;
                });

                for (let i = 0; i < response.data.length; i++) {
                    $('#reviews-container')
                        .append(
                            '<div class="review-item shadow-sm bg-white">' +
                            '<div class="header d-flex">' +
                            '<img src="' + userAvatar + '" alt="avatar">' +
                            '<div class="title flex-md-grow-1">' +
                            '<a href="/activities/' + userId + '">' + userName + '</a>' +
                            '<p class="dr mt-2 mb-1">' +
                            '<a href="#">' + response.data[i]['dish'].name + '</a> | ' +
                            '<a href="/' + response.data[i]['restaurant'].linkTo + '">' + response.data[i]['restaurant'].name + '</a>' +
                            '</p>' +
                            '<small>' + response.data[i]['date'].substring(0, 10) + '</small>' +
                            //response.data[i] +
                            '</div>' +
                            '<span class="rate">' + response.data[i]['rate'] + '</span>' +
                            '</div>' +
                            '<hr>' +
                            '<div class="comment">' +
                            '<p>' + response.data[i]['comment'] + '</p>' +
                            '</div>' +
                            '<div class="pb-3">' +
                            '<small>- Đây là nhận xét từ Thành Viên trên Foodee -</small>' +
                            '</div>' +
                            '<div class="images">' +
                            updateImagesView(response.data[i]['images']) +
                            '</div>' +
                            '<div class="toolbar d-flex">' +
                            '<a href="#" class="fas fa-heart"> Thích</a>' +
                            '<a href="#" class="fas fa-comment ml-4"> Bình luận</a>' +
                            '<a href="#" class="fas fa-exclamation-triangle ml-4"> Báo lỗi</a>' +
                            '</div>' +
                            '</div>'
                        );
                }

                updateRateView();
            }
        },
    });
}

let filter = document.getElementById('filter');

filter.addEventListener('change', function () {
    sendRequest(this.value);
});