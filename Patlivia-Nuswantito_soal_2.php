<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $uangSetyo = (3*10000) + (4*5000) + (5*20000);
    $hargaMainan = 55000;
    $bayar = $uangSetyo - $hargaMainan;
    $uangSetyoSekarang = $bayar;

        echo($uangSetyoSekarang);
    ?>
</body>
</html>