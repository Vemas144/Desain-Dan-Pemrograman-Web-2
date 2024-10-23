<?php
if (isset($_FILES['files']['name'][0])) {
    $total_files = count($_FILES['files']['name']);
    $extensions = array("jpg", "jpeg", "png", "gif");

    for ($i = 0; $i < $total_files; $i++) {
        $errors = array();
        $file_name = $_FILES['files']['name'][$i];
        $file_size = $_FILES['files']['size'][$i];
        $file_tmp = $_FILES['files']['tmp_name'][$i];
        $file_type = $_FILES['files']['type'][$i];
        @$file_ext = strtolower(end(explode('.', $file_name)));

        
        if (in_array($file_ext, $extensions) === false) {
            $errors[] = "Ekstensi file yang diizinkan adalah JPG, JPEG, PNG, GIF. "; 
        }

        if ($file_size > 2097152) {
            $errors[] = "Ukuran file tidak boleh lebih dari 2 MB.";
        }

        if (empty($errors) == true) {
            move_uploaded_file($file_tmp, "documents/" . $file_name);
            echo "File berhasil diunggah";
        }else {
            echo "File gagal diunggah";
            echo implode(" ", $errors);
        }
    }
}
?>