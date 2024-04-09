<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Informasi Dosen</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }

        th, td {
            border: 1px solid black;
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
        $Dosen = [
            'nama' => 'Elok Nur Hamdana',
            'domisili' => 'Malang',
            'jenis_kelamin' => 'Perempuan' ];
        
        echo "<table>";
        echo "<tr><th colspan='2'>Informasi Dosen</th></tr>";
        echo "<tr><td>Nama</td><td>{$Dosen['nama']}</td></tr>";
        echo "<tr><td>Domisili</td><td>{$Dosen['domisili']}</td></tr>";
        echo "<tr><td>Jenis Kelamin</td><td>{$Dosen['jenis_kelamin']}</td></tr>";
        echo "</table>";

    ?>
</body>
</html>
