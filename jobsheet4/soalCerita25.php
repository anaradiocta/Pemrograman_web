<?php
$skor1 = 700;
$skor2 = 100;

$hadiah_tambahan1 = ($skor1 > 500) ? "YA" : "TIDAK";
$hadiah_tambahan2 = ($skor2 > 500) ? "YA" : "TIDAK";

echo "Total skor pemain1 adalah: " . $skor1 . "<br>";
echo "Apakah pemain1 mendapatkan hadiah tambahan? " . $hadiah_tambahan1;
echo "<br>Total skor pemain2 adalah: " . $skor2 . "<br>";
echo "Apakah pemain2 mendapatkan hadiah tambahan? " . $hadiah_tambahan2;
?>
