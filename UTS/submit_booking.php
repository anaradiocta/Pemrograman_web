<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $service = $_POST['service'];
  $date = $_POST['date'];
  $time = $_POST['time'];

  if (!isset($_SESSION['bookings'])) {
    $_SESSION['bookings'] = array();
  }

  $newBooking = array(
    'name' => $name,
    'email' => $email,
    'phone' => $phone,
    'service' => $service,
    'date' => $date,
    'time' => $time
  );

  array_push($_SESSION['bookings'], $newBooking);
  header('Location: jadwal_booking.php');
  exit;
}
?>
