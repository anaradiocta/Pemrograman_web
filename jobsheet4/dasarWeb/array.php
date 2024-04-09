<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];

$nilaiLulus = [];

foreach ($nilaiSiswa as $nilai){
    if ($nilai >= 70){
        $nilaiLulus[] = $nilai;
    }
}

echo "Daftar nilai siswa: " . implode(', ', $nilaiSiswa) . "<br>";
echo "Daftar nilai siswa yang lulus: " . implode(', ', $nilaiLulus) . "<br>";

$daftarKaryawan = [
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie', 9],
    ['David', 5],
    ['Eva', 6],
];

$karyawanPengalamanLimaTahun = [];

foreach ($daftarKaryawan as $karyawan){
    if ($karyawan[1] > 5){
        $karyawanPengalamanLimaTahun[] = $karyawan[0];
    }
}

echo "<br>Daftar karyawan: ";
foreach ($daftarKaryawan as $karyawan) {
    echo $karyawan[0] . " (" . $karyawan[1] . "), ";
}
echo "<br>Daftar karyawan dengan pengalaman kerja lebih dari 5 tahun: <br><br>";
echo implode(', ', $karyawanPengalamanLimaTahun);

$daftarNilai =[
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
    ],
    'Fisika' => [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75],
    ],
    'Kimia' => [
        ['Alice', 92],
        ['Bob', 80],
        ['Charlie', 85],
    ],
];

$mataKuliah = 'Fisika';
$mataKuliah1 = 'Matematika';
$mataKuliah2 = 'Kimia';

echo "<br>Daftar nilai mahasiswa dalam mata kuliah $mataKuliah: <br>";

foreach ($daftarNilai[$mataKuliah] as $nilai){
    echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br>";
}
echo "<br>Daftar nilai mahasiswa dalam mata kuliah $mataKuliah1: <br>";

foreach ($daftarNilai[$mataKuliah1] as $nilai){
    echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br>";
}

echo "<br>Daftar nilai mahasiswa dalam mata kuliah $mataKuliah2: <br>";

foreach ($daftarNilai[$mataKuliah2] as $nilai){
    echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br>";
}
?>
