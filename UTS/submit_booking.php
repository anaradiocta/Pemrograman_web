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

<?php
session_start();

// Jika tidak ada data booking dalam session, redirect ke halaman indeks
if (!isset($_SESSION['booking'])) {
  header('Location: index.html');
  exit();
}

// Memasukkan data booking dari session ke variabel lokal
$booking = $_SESSION['booking'];

// Menampilkan pesan sukses jika ada
if (isset($_GET['success']) && $_GET['success'] == 1) {
  echo '<p style="color: green;">Booking berhasil! Kami akan menghubungi Anda segera.</p>';
}

// Menampilkan tabel jadwal booking
echo '<h2>Jadwal Booking</h2>';
echo '<table>';
echo '<tr><th>Nama</th><th>Email</th><th>Nomor Telepon</th><th>Layanan</th><th>Tanggal</th><th>Waktu</th></tr>';
echo '<tr>';
echo '<td>' . htmlspecialchars($booking['name']) . '</td>';
echo '<td>' . htmlspecialchars($booking['email']) . '</td>';
echo '<td>' . htmlspecialchars($booking['phone']) . '</td>';
echo '<td>' . htmlspecialchars($booking['service']) . '</td>';
echo '<td>' . htmlspecialchars($booking['date']) . '</td>';
echo '<td>' . htmlspecialchars($booking['time']) . '</td>';
echo '</tr>';
echo '</table>';

// Mengosongkan data booking setelah ditampilkan
unset($_SESSION['booking']);
?>

</body>
</html>
