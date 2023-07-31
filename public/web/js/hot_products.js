$(document).ready(function () {
    var page = 1;

    var category_id = 0;

    var position = 0;

    var code = window.location.href.split("/")[4];

    $( ".btn-close" ).on( "click", function( event ) {
        event.preventDefault();
    });
    $('#addTopProducts').click(function () {
        let url =  window.location.origin + "/api" + "/shops/" + code + "/top-products?page=" + page;

        infinteLoadMore(page, url)
    });

    $('.form-select').change(function () {
        category_id = $(this).find(' option:selected').val();

        page=1;

        position =0;

        console.log(page)
        $('#list-produts-hot').empty();

        let url = window.location.origin + "/api" + "/shops/" + code + "/top-products?page=" + page + "&category_id=" + category_id;

        infinteLoadMore(page, url, category_id);

        $('#list-produts-hot').scroll(function () {
            if ($(this).scrollTop() + $(this).height() > position + $(this).height() - 20) {
                position = $(this).scrollTop() + $(this).height()-20;

                page++;

                console.log(page);
                let url = window.location.origin + "/api" + "/shops/" + code + "/top-products?page=" + page + "&category_id=" + category_id;

                infinteLoadMore(page, url, category_id);
            }
        });
    });

    $('#list-produts-hot').scroll(function () {
        if ($(this).scrollTop() + $(this).height() > position + $(this).height() - 0.1) {
            position = $(this).scrollTop() + $(this).height()-0.1;

            page++;

            let url = window.location.origin + "/api" + "/shops/" + code + "/top-products?page=" + page + "&category_id=" + category_id;

            infinteLoadMore(page, url, category_id);
        }
    });

    // $('input[type="checkbox"]').change(function () {
    //     alert('ok')
    // });
});

/**
 *
 * @param page
 * @param url
 * @param category
 */
function infinteLoadMore(page, url, category) {
    $.ajax({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        url: url,
        type: "GET",
        async: false,
        data: {},
        success: function (result) {
            let products = result.data.products.data; // Truy cập vào mảng sản phẩm

            let html = "";

            $.each(products, function (key, value) {
                html += "<div class=\"col-md-4\">";
                html += "<div class=\"wrap-pic\">";
                html += "<label>";
                html += "<img src='" + cdn_static_file + "/" + value.default_img + "'>";
                html += "<input type='hidden' name='product_id[]' value='" + value.id + "'>";
                html += "<span class=\"pic-checked\">";
                html += "<input class='checkbox' type=\"checkbox\" value='" + value.id + "' name='product_ids[]'>";
                html += "</span>";
                html += "</label>";
                html += "</div>";
                html += "</div>";
            });

            $('#list-produts-hot').append(html);
        }
    })
}

