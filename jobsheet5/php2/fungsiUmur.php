<?php
//membuat fungsi
function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}
function perkenalan ($nama, $salam="Assalamualaikum"){
    echo $salam.", ";
    echo "Perkenalkan, nama saya " . $nama . "<br/>"; // Sesuaikan dengan nama

    //memanggil fungsi lain
    echo "Perkenalkan, nama saya " . hitungUmur(2003, 2024) . "tahun<br/>";
    echo "Senang berkenalan dengan anda<br/>";
}

//memanggil fungsi perkenalan
    perkenalan("Nela");
?>