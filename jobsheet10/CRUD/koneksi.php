<?php
//koneksi database
$koneksi = mysqli_connect("localhost","root","","prakwebdb");

//memeriksa koneksi
if(mysqli_connect_errno()){
    die("Koneki database gagal : " . mysqli_connect_error());
}
?>
