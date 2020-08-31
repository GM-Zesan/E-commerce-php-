function filePreview(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
            $('#uploadForm + img').remove();
            $('#test').html('<img src="'+e.target.result+'" width="130" height="100"/>');
        }
        reader.readAsDataURL(input.files[0]);
        }
        }
        $("#file").change(function () {
            filePreview(this);
        });