<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: #393939;
            color: #fff;
            font-family: sans-serif;
            font-size: 24px;
        }
    </style>
</head>

<body>

    <?php

    $x = 8;
    $y = 7;

    $z = ($x + $y) * 5;

    echo "The total is " . $z;

    //value Added Text

    $price = 100;
    $vat  = 0.21;


    $totalPrice = $price * $vat;



    ?>

</body>

</html>