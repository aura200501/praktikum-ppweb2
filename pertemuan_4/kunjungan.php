<?php
    require_once( 'bukuTamu.php');
    session_start();

    if (!isset($_SESSION['bukutamu'])){
        $_SESSION['bukutamu'] = [];
    }

    if (isset($_POST['submit'])) {
        $bukutamu = new BukuTamu();
        $bukutamu->timestamp = date ('Y-m-d H:i:s');
        $bukutamu->fullname = $_POST ['fullname'];
        $bukutamu->email = $_POST ['email'];
        $bukutamu->message = $_POST ['message'];

        array_push($_SESSION['bukutamu'], $bukutamu);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>
    <style>
        body {
            background-color: #f8d3e0; /* Warna latar belakang soft pink */
            font-family: Arial, sans-serif; /* Font yang lebih baik */
            margin: 0;
            padding: 20px;
        }
        .container {
            background-color: #ffffff; /* Warna latar belakang kontainer */
            border-radius: 8px; /* Sudut melengkung */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Bayangan */
            padding: 20px;
        }
        h4 {
            color: #d5006d; /* Warna teks judul */
        }
        table {
            width: 100%;
            border-collapse: collapse; /* Menghilangkan jarak antara border */
        }
        th, td {
            border: 1px solid #d5006d; /* Warna border tabel */
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f1a7b5; /* Warna latar belakang header tabel */
            color: #ffffff; /* Warna teks header tabel */
        }
        tr:nth-child(even) {
            background-color: #f8c4d4; /* Warna latar belakang baris genap */
        }
        tr:hover {
            background-color: #f1a7b5; /* Warna latar belakang saat hover */
        }
    </style>
</head>
<body>
    <div class="container">
        <h4>Daftar Kunjungan</h4>
        <table>
            <thead>
                <tr>
                    <th>Timestamp</th>
                    <th>Fullname</th>
                    <th>Email</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($_SESSION['bukutamu'] as $buku): ?>
                <tr>
                    <td><?=htmlspecialchars($buku->timestamp) ?></td>
                    <td><?=htmlspecialchars($buku->fullname) ?></td>
                    <td><?=htmlspecialchars($buku->email) ?></td>
                    <td><?=htmlspecialchars($buku->message) ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
