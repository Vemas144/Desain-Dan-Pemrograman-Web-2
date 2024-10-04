<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <style>
        table {
            width: 50%;
        }

        th, td {
            text-align: left;
            padding: 6px;
        }

        tr {
            background-color: #f2f2f2;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>
<body>

<table>
    <tr>
        <th>Nama</th>
        <th>Domisili</th>
        <th>Jenis Kelamin</th>
    </tr>
    <?php
    $Dosen = [
        'nama' => 'Elok Nur Hamdana',
        'domisili' => 'Malang',
        'jenis_kelamin' => 'Perempuan'
    ];
    
    echo "<tr>";
    echo "<td>" . $Dosen['nama'] . "</td>";
    echo "<td>" . $Dosen['domisili'] . "</td>";
    echo "<td>" . $Dosen['jenis_kelamin'] . "</td>";
    echo "</tr>";
    ?>
</table>

</body>
</html>