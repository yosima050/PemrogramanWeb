<!DOCTYPE html>
<html>
<head>
    <title>Unggah File Dokumen</title>
</head>
<body>

    <form id="upload-form-gambar" action="upload_gambar_ajax.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file[]" id="file" multiple accept="image/png, image/jpeg, image/gif">
        <input type="submit" name="submit" value="Unggah Gambar">
    </form>

    <div id="status"></div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <script>
    $(document).ready(function(){
        $('#upload-form').submit(function(e){
            e.preventDefault(); 
            
            var formData = new FormData(this);

            $.ajax({
                type: 'POST',
                url: 'upload_ajax.php',
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: function(response){
                    $('#status').html(response);
                },
                error: function(){
                    $('#status').html('Terjadi kesalahan saat mengunggah file.');
                }
            });
        });
    });
    </script>
</body>
</html>