<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $judul ?></title>
</head>
<style>
    table {
        width: 100%
    }

    table,
    th,
    td {
        border: 1px solid black;
    }
</style>

<body>
    <table>
        <tr>
            <th>NPM</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No HP</th>
        </tr>
        <?php foreach ($data_mahasiswa as $mhs) : ?>
            <tr>
                <td><?= $mhs['npm'] ?></td>
                <td><?= $mhs['nama'] ?></td>
                <td><?= $mhs['alamat'] ?></td>
                <td><?= $mhs['no_hp'] ?></td>
            </tr>
        <?php endforeach ?>
    </table>
</body>

</html>