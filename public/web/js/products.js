$('#uploadProfilePicture').change(function () {
    let formData = new FormData();

    let files = $(this)[0].files;

    for (let i = 0; i < files.length; i++) {
        formData.append('files[]', files[i]);
    }

    let response = uploadFile(formData);

    if (response.status === 'success') {
        let files = response.data.files;

        const listImages = $('#listImages');

        for (let i = 0; i < files.length; i++) {
            let file = files[i];

            let img = $('<img>').attr({
                'src': cdn_static_file + '/' + file.id + '/draft',
                'width': '200'
            }).css('margin-right', '10px');

            listImages.append(img);

            let deleteImg = $('<span>').attr({'id': '', 'class': 'deleteImg'}).text('x');

            listImages.append(deleteImg);

            let thumb = $('<input>').attr('type', 'hidden').attr('name', 'file_id[]').val(file.id);

            listImages.append(thumb);
        }
    } else {
        alert('Upload ảnh lỗi');
    }
});


$(document).delegate(".deleteImg", "click", function () {
    if ($(this).attr('id') == '') {
        $(this).prev().css('display', 'none');

        $(this).next().remove();

        $(this).css('display', 'none');
    } else {
        let fileId = $(this).attr('id');

        $(this).prev().css('display', 'none');

        $(this).css('display', 'none');

        let input = $('<input>').attr({'type': 'hidden', 'value': fileId, 'name': 'deleteImg[]'});

        $(this).parent().append(input);
    }
});