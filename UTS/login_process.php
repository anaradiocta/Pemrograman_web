<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $name = $_POST['name'];
  $email_or_notelp = $_POST['email_or_notelp']; 

  if (($name === "Nela" && $email_or_notelp === "nelaocta12@email.com") ||
      ($name === "Nela" && $email_or_notelp === "0895358120709")) {
    header("Location: index.html");
    exit();
  } else {
    header("Location: login.php?error=1");
    exit();
  }
}
?>
