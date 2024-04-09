<!-- <?php
for($i=1; $i<=25; $i++){
    echo"Perulangan ke-{$i} <br/>";
}
?> -->

<?php
function tampilAngka (int $jumlah, int $indeks=1){
    echo"Perulangan ke-{$indeks} <br>";

    //panggil diri sendiri selama $indeks <= $jumlah
    if($indeks<$jumlah){
        tampilAngka($jumlah, $indeks+1);
    }
}
tampilAngka(20);
?>