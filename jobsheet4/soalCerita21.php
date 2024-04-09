<?php
$nilai_siswa = array(85, 92, 78, 64, 90, 75, 88, 79, 70, 96);
sort($nilai_siswa);

$total_nilai = 0;
for ($i = 2; $i < count($nilai_siswa) - 2; $i++) {
    $total_nilai += $nilai_siswa[$i];
}

$rata_rata = $total_nilai / (count($nilai_siswa) - 4);

echo "Daftar nilai siswa: " . implode(", ", $nilai_siswa) . "<br>";
echo "Dua nilai terendah: " . $nilai_siswa[0] . ", " . $nilai_siswa[1] . "<br>";
echo "Dua nilai tertinggi: " . $nilai_siswa[count($nilai_siswa) - 1] . ", " . $nilai_siswa[count($nilai_siswa) - 2] . "<br>";
echo "Total nilai setelah mengabaikan dua nilai terendah dan dua nilai tertinggi: " . $total_nilai . "<br>";
echo "Nilai rata-rata setelah mengabaikan dua nilai terendah dan dua nilai tertinggi: " . $rata_rata;
?>
