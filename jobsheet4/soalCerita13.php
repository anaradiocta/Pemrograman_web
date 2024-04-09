<?php
$siswa = array(
    array("nama" => "Alice", "nilai" => 85),
    array("nama" => "Bob", "nilai" => 92),
    array("nama" => "Charlie", "nilai" => 78),
    array("nama" => "David", "nilai" => 64),
    array("nama" => "Eva", "nilai" => 90)
);

$total_nilai = 0;
foreach ($siswa as $s) {
    $total_nilai += $s["nilai"];
}
$rata_rata = $total_nilai / count($siswa);

echo "Daftar siswa dengan nilai di atas rata-rata kelas : $rata_rata<br>";
foreach ($siswa as $s) {
    if ($s["nilai"] > $rata_rata) {
        echo $s["nama"] . " - " . $s["nilai"] . "<br>";
    }
}
?>
