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
    $U1 = 10000;
    $a = 10000;
    $U68 = 30100;
    $b = ($U68 - $U1) / (67);
    $U81= $a;

    for ($i=1; $i < 81 ; $i++) { 
        $U81+=300; 
    };
    
    echo $U81;
    ?>
</body>
</html>