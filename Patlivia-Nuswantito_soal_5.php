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

function daftarMenu ( $indeks = 1) {
    if($indeks <= 1){echo "Makanan <br>";}
    if($indeks <4){echo "$indeks. Menu Makanan ke {$indeks}<br>";}

    if($indeks === 4){echo "Minuman <br>";}
    if($indeks >= 6 && $indeks <= 8){echo ($indeks-5).". Menu Minuman ke ".($indeks-5)."<br>";}

    if($indeks === 8){echo "Parsel <br>";}
    if($indeks >= 10 && $indeks <= 12){echo ($indeks-9).". Menu Parsel ke ".($indeks-9)."<br>";}

    if($indeks<=12) {daftarMenu($indeks+1);}
}

daftarMenu()
    ?>
</body>
</html>