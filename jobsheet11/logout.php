<?php
// Memeriksa apakah session telah dimulai
if (session_status() == PHP_SESSION_NONE) {
    // Jika belum dimulai, maka mulai session
    session_start();
    // Menghancurkan session yang ada
    session_destroy();
    // Mengarahkan pengguna kembali ke halaman indek
    header('location: index.php');
}
?>