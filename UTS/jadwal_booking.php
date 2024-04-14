<?php
session_start();

if (!isset($_SESSION['bookings'])) {
  header('Location: index.html');
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jadwal Booking</title>
  <style>
    table {
      border-collapse: collapse;
      width: 100%;
    }
    th, td {
      border: 1px solid #ddd;
      padding: 8px;
      text-align: left;
    }
    th {
      background-color: #f2f2f2;
    }
  </style>
</head>
<body>

<h2>Jadwal Booking</h2>
<table>
  <thead>
    <tr>
      <th>Nama</th>
      <th>Email</th>
      <th>Nomor Telepon</th>
      <th>Layanan</th>
      <th>Tanggal</th>
      <th>Waktu</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($_SESSION['bookings'] as $booking): ?>
      <tr>
        <td><?php echo htmlspecialchars($booking['name']); ?></td>
        <td><?php echo htmlspecialchars($booking['email']); ?></td>
        <td><?php echo htmlspecialchars($booking['phone']); ?></td>
        <td><?php echo htmlspecialchars($booking['service']); ?></td>
        <td><?php echo htmlspecialchars($booking['date']); ?></td>
        <td><?php echo htmlspecialchars($booking['time']); ?></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>

</body>
</html>
