<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
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
</head>

<body>
    <h1>Daftar Buku</h1><br>
    <table>
        <tr>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Penerbit</th>
        </tr>
        <?php foreach ($buku as $b) : ?>
            <tr>
                <td><?= $b['judul'] ?></td>
                <td><?= $b['penulis'] ?></td>
                <td><?= $b['penerbit'] ?></td>
            </tr>
        <?php endforeach ?>
    </table>
</body>

</html>