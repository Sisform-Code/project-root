<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php foreach ($data_mhs as $mhs) : ?>
        <?= $mhs['npm'] ?><br>
        <?= $mhs['nama'] ?><br>
    <?php endforeach ?>
</body>

</html>