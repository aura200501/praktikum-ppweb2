<?php
if (!isset($_POST['nama'])){
    echo '<script>alert("Anda harus mengisi form terlebih dahulu")</script>
    <meta http-equiv="refresh" content="0; url=formnilai.php">';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Nilai Mahasiswa</title>
    <style>
        body {
            background-color: #f8d7da; /* Soft pink background */
            font-family: Arial, sans-serif;
        }
        table {
            width: 60%;
            margin: 50px auto;
            border-collapse: collapse;
            background-color: #ffffff; /* White background for the table */
            border-radius: 10px; /* Rounded corners */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow */
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #f5c6cb; /* Light pink border */
        }
        th {
            background-color: #f5c6cb; /* Light pink header */
            color: #721c24; /* Darker text color */
        }
        tr:hover {
            background-color: #f1c4d2; /* Light pink on hover */
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th colspan="3">Hasil Nilai Mahasiswa</th>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?= ($_POST['nama']) ?></td>
        </tr>
        <tr>
            <td>NIM</td>
            <td>:</td>
            <td><?= ($_POST['nim']) ?></td>
        </tr>
        <tr>
            <td>Rombel</td>
            <td>:</td>
            <td><?= ($_POST['rombel']) ?></td>
        </tr>
        <tr>
            <td>Matkul</td>
            <td>:</td>
            <td><?= ($_POST['matkul']) ?></td>
        </tr>
        <tr>
            <td>Tugas</td>
            <td>:</td>
            <td><?= ($_POST['tugas']) ?></td>
        </tr>
        <tr>
            <td>Nilai UTS</td>
            <td>:</td>
            <td><?= ($_POST['uts']) ?></td>
        </tr>
        <tr>
            <td>Nilai UAS</td>
            <td>:</td>
            <td><?= ($_POST['uas']) ?></td>
        </tr>
        <tr>
            <td>Predikat</td>
            <td>:</td>
            <td>
                <?php
                $tugas = $_POST['tugas'] * (35/100);
                $uts = $_POST['uts'] * (30/100);
                $uas = $_POST['uas'] * (35/100);
                $total = $tugas + $uts + $uas;

                if ($total <= 35) {
                    $pred = "E";
                } elseif ($total <= 55) {
                    $pred = "D";
                } elseif ($total <= 69) {
                    $pred = "C";
                } elseif ($total <= 84) {
                    $pred = "B";
                } elseif ($total <= 100) {
                    $pred = "A";
                } else {
                    $pred = "Tidak Diketahui";
                }
                echo $pred;
                ?>
            </td>
        </tr>
        <tr>
            <td>Keterangan</td>
            <td>:</td>
            <td>
                <?php
                switch ($pred) {
                    case 'A':
                        echo "Sangat Baik";
                        break;
                    case 'B':
                        echo "Baik";
                        break;
                    case 'C':
                        echo "Cukup";
                        break;
                    case 'D':
                        echo "Kurang";
                        break;
                    case 'E':
                        echo "Sangat Kurang";
                        break;
                    default:
                        echo "Tidak Diketahui";
                        break;
                }
                ?>
            </td>    
        </tr>
    </table>
</body>
</html>
``