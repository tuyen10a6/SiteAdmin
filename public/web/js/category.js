$(document).ready(function () {
    $('#uploadProfilePicture').change(function () {
        let formData = new FormData();

        let files = $(this)[0].files;

        for (let i = 0; i < files.length; i++) {
            formData.append('files[]', files[i]);
        }

        let file_id = uploadFile(formData);

        if (file_id.status === 'success') {
            let files = file_id.data.files;

            $('#listImages').empty();

            for (let i = 0; i < files.length; i++) {
                let file = files[i];

                let img = $('<img>').attr({
                    'src': 'http://z51.vn/files/' + file.id + '/draft',
                    'width': '200'
                }).css('margin-right', '10px');

                $('#listImages').append(img);

                let thumb = $('<input>').attr('type', 'hidden').attr('name', 'file_id[]').val(file.id);

                $('#listImages').append(thumb);
            }
        } else {
            alert('Upload ảnh lỗi');
        }
    });
});
