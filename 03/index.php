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


    //Associative Arrays

    $vehicles = array("AUDI" => 50.500, "Mercedes" => 40.700, "Range Rover" => 60.300);
    echo "<br><br><br>";
    var_dump($vehicles);
    print_r($vehicles); //print_r is converting into human readable manner

    $carNew["Mercedes"] = 50.554;

    foreach ($vehicles as $key => $value) {
        echo "<br><br><br>" . $key . " and " . $value;
    }
    ?>
</body>

</html>