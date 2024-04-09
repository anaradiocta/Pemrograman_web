<?php
$total_kursi = 45;
$kursi_terisi = 28;

$kursi_kosong = $total_kursi - $kursi_terisi;
$persentase_kosong = ($kursi_kosong / $total_kursi) * 100;
echo "Jumlah Total Kursi di Restoran = $total_kursi <br>";
echo "Jumlah Kursi terisi di Restoran = $kursi_terisi <br>";
echo "Persentase kursi yang masih tersedia di restoran adalah: " . $persentase_kosong . "%";
?>
