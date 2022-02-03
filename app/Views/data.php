<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $judul ?></title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No. HP</th>
        </tr>
        <?php
        $i = 0;
        foreach ($data as $d) : ?>
            <tr>
                <td><?= $i++ ?></td>
                <td><?= $d['nama'] ?></td>
                <td><?= $d['alamat'] ?></td>
                <td><?= $d['no_hp'] ?></td>
            </tr>
        <?php endforeach ?>
    </table>
</body>

</html>