<?php
$hargaProduk = 120000;
$batasDiskon = 100000;
$diskonPersen = 20;

echo "Harga awal produk: Rp $hargaProduk <br>";
echo "Pelanggan akan mendapat diskon sebesar $diskonPersen% untuk pembelian di atas : Rp $batasDiskon <br>";

if ($hargaProduk > $batasDiskon) {
    $besarDiskon = $hargaProduk * ($diskonPersen / 100);

    $hargaSetelahDiskon = $hargaProduk - $besarDiskon;

    echo "Harga yang harus dibayar setelah diskon 20% adalah: Rp " . number_format($hargaSetelahDiskon, 0, ",", ".");
} else {
    echo "Harga yang harus dibayar: Rp " . number_format($hargaProduk, 0, ",", ".");
}
?>
