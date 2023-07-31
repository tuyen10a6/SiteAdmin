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

            for (let i = 0; i < files.length; i++) {
                let file = files[i];

                $('#img_show').attr('src',  cdn_static_file + '/' + file.id + '/draft');

                $('#thumb').val(file.id);
            }
        } else {
            alert('Upload ảnh lỗi');
        }
    });
});
