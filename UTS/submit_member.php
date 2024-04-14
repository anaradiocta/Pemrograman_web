<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $alamat = $_POST['alamat']; 

  $data = "$name, $email, $phone, $alamat\n";
  $file = "data_member.csv";
  file_put_contents($file, $data, FILE_APPEND);

  setcookie("registration_status", "success", time() + 60, "/");

  header("Location: daftar_sukses.html");
  exit();
} else {
  setcookie("registration_status", "failed", time() + 60, "/");
  header("Location: daftar_gagal.html");
  exit();
}
?>
