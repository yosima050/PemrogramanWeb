<?php
if (isset($_FILES['file']['name']) && is_array($_FILES['file']['name'])) {
    
    $targetDirectory = "uploads/";
    $extensions = array("jpg", "jpeg", "png", "gif");
    
    $responseMessages = array();

    if (!file_exists($targetDirectory)) {
        mkdir($targetDirectory, 0777, true);
    }

    $totalFiles = count($_FILES['file']['name']);

    for ($i = 0; $i < $totalFiles; $i++) {
        
        $file_name = $_FILES['file']['name'][$i];
        $file_size = $_FILES['file']['size'][$i];
        $file_tmp = $_FILES['file']['tmp_name'][$i];

        if (empty($file_name)) {
            continue;
        }

        @$file_ext = strtolower(end(explode('.', $file_name)));
        
        $errors = array();

        if (in_array($file_ext, $extensions) === false) {
            $errors[] = "Ekstensi file ($file_ext) tidak diizinkan.";
        }

        if ($file_size > $maxSize) {
            $errors[] = 'Ukuran file tidak boleh lebih dari 2 MB';
        }

        if (empty($errors) == true) {
            if(move_uploaded_file($file_tmp, $targetDirectory . $file_name)) {
                $responseMessages[] = "File $file_name berhasil diunggah.";
            } else {
                $responseMessages[] = "Gagal memindahkan file $file_name.";
            }
        } else {
            $responseMessages[] = "File $file_name ditolak: " . implode(" ", $errors);
        }

    } 
    echo implode("<br>", $responseMessages);

} else {
    echo "Tidak ada file gambar yang dipilih.";
}
?>