$(document).ready(function () {
    $(".nav-sidebar .lv1 .nav-link").click(function (e) {
        $(this).find("i").toggleClass("fa-chevron-up fa-chevron-down");
    });

    $('.lv1 .nav-link').click(function () {
        $('.lv1 .nav-link').removeClass('active');

        $(this).addClass('active');
    });

    $(".user-panel .arrow-right").click(function (e) {
        e.preventDefault();

        var navContact = $(this).parent().children('.nav-contact');

        if (navContact.css("display") == 'none') {
            navContact.css("display", "block");
        } else {
            navContact.css("display", "none");
        }
    });

    $(".pic-more").click(function (e) {
        e.preventDefault();

        var action = $(this).parent().children('.list-action');

        if (action.css("display") == 'none') {
            action.css("display", "block");
        } else {
            action.css("display", "none");
        }

    });

    $(".list-item .pic-more").click(function (e) {
        e.preventDefault();

        var action = $(this).parent().parent().children('.list-action');

        if (action.css("display") == 'none') {
            action.css("display", "block");
        } else {
            action.css("display", "none");
        }


    });

    $('.filter-group .nav-item').click(function () {
        $('.filter-group .nav-item').removeClass('active');

        $(this).addClass('active');
    });

    $('.filter-group-title .nav-item').click(function () {
        $('.filter-group-title .nav-item').removeClass('active');

        $(this).addClass('active');
    });

    $('.lv2 .nav-item').click(function (e) {
        $('.lv2 .nav-item').removeClass('active');

        $(this).addClass('active');

        var itemId = $(this).index();

        // Ẩn tất cả các dòng trong khối UL thứ hai
        $(".filter-group-title .nav-item").removeClass('active');

        $(".tab-content .tab-pane ").removeClass('show active');
        // Hiển thị dòng tương ứng với li được nhấp
        $(".filter-group-title .nav-item").eq(itemId).addClass('active');
        $(".tab-content .tab-pane").eq(itemId).addClass('show active');
    });

    $('.ajax-link').click(function (e) {
        var url = $(this).attr('href');

        history.replaceState(null, null, url);
        location.reload();
    });
});

function uploadFile(formData) {
    let upload = [];
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        async: false,
        processData: false,
        contentType: false,
        type: 'POST',
        dataType: 'JSON',
        data: formData,
        url: '/upload',
        success: function (result) {
            upload = result;
        }
    });
    return upload;
}






