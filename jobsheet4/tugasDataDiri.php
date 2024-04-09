<?php
$data_diri = array(
    array(
        "foto" => "foto2.jpg",
        "nama" => "Anaradi Octa Lavechia",
        "alamat" => "Perumahan Villa Bukit TIdar C1-271",
        "no_hp" => "08123456789",
        "jurusan" => "Teknik Informatika"
    ),
    array(
        "foto" => "foto1.jpg",
        "nama" => "Nela Octa Lavechia",
        "alamat" => "Perumahan Graha Dewata H-2/12",
        "no_hp" => "089691951448",
        "jurusan" => "Sistem Informasi"
    ),
    array(
        "foto" => "foto3.jpg",
        "nama" => "Nela Lavechia",
        "alamat" => "Perumahan Villa Puncak TIdar A1-055",
        "no_hp" => "082333146845",
        "jurusan" => "Sistem Informasi Bisnis"
    ),
);

echo "<br><strong>Data Diri<br>";

foreach ($data_diri as $data) {
    echo "<img src='" . $data["foto"] . "' alt='Foto' style='width: 200px; height: 200px; object-fit: cover; margin-bottom: 10px;'><br>";
    echo "Nama: " . $data["nama"] . "<br>";
    echo "Alamat:" . $data["alamat"] . "<br>";
    echo "No. HP: " . $data["no_hp"] . "<br>";
    echo "Jurusan: " . $data["jurusan"] . "<br><br>";
}
?>
