<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        background-color: #393939;
        color: #fff;
        font-family: sans-serif;
        font-size: 24px;
    }
</style>

<body>
    <?php
    //Integer

    $age = 21;

    //Floats

    $price = 10.5;

    //Strings

    $name = "Sithum";

    //Booleans

    $_Is_Allowed = true;

    //NULL

    $_x = null;

    //Arrays

    $cars = array("BMW", "MERCEDES", "AUDI");
    echo $cars[1] . "<br><br><br>";

    foreach ($cars as $car) {
        echo $car . "<br>";
    }

    $myCar = array("BMW M8 Coupe", 2021, 78000);
    $cars2 = array("Chevy", "VOLVO", "Volkswagen");
    var_dump($myCar);
    print_r($myCar);

    //Array Merging

    $cars = array_merge($cars, $cars2);

    echo "<br><br><br>";
    print_r($cars);
    ?>
</body>

</html>