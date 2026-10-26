<?php
$penduduk = array(
    array("Moyudan", 27.62, 31497),
    array("Minggir", 27.27, 29886),
    array("Seyegan", 26.63, 47129),
    array("Godean", 26.84, 72028),
    array("Gamping", 29.25, 108675)
);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Data Penduduk PHP</title>
    <style>
        table {
            border-collapse: collapse;
            width: 465px;
        }

        th, td {
            border: 1px solid black;
            padding: 4px 10px;
        }

        th {
            text-align: center;
        }

        td:first-child {
            text-align: left;
        }

        td:nth-child(2),
        td:nth-child(3) {
            text-align: right;
        }
    </style>
</head>
<body>

    <h2>Data Penduduk Kecamatan</h2>

    <table>
        <tr>
            <th>kecamatan</th>
            <th>luas</th>
            <th>jumlah_penduduk</th>
        </tr>

        <?php foreach ($penduduk as $data) { ?>
        <tr>
            <td><?php echo $data[0]; ?></td>
            <td><?php echo number_format($data[1], 2, '.', ''); ?></td>
            <td><?php echo $data[2]; ?></td>
        </tr>
        <?php } ?>

    </table>

</body>
</html>
