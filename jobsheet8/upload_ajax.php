<?php
if (isset($_FILES['files'])) {
    $errors = array();
    $extensions = array("jpeg", "jpg", "png", "gif");

    foreach ($_FILES['files']['tmp_name'] as $key => $tmp_name) {
        $file_name = $_FILES['files']['name'][$key];
        $file_size = $_FILES['files']['size'][$key];
        $file_tmp = $_FILES['files']['tmp_name'][$key];
        $file_type = $_FILES['files']['type'][$key];
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        if (in_array($file_ext, $extensions) === false) {
            $errors[] = "Ekstensi file yang diizinkan adalah JPEG, JPG, PNG, atau GIF.";
        }

        if ($file_size > 2097152) {
            $errors[] = 'Ukuran file ' . $file_name . ' tidak boleh lebih dari 2 MB';
        }

        if (empty($errors) == true) {
            $destination = "uploads/" . $file_name;
            move_uploaded_file($file_tmp, $destination);
            echo "File " . $file_name . " berhasil diunggah.<br>";
        } else {
            echo implode("", $errors) . "<br>";
        }
    }
}
?>
