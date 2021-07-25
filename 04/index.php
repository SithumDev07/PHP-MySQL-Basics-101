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

    //Arithmetic Operators 

    // + - * / %

    $x = 5;
    $y = 3;

    echo $x + $y . "<br>";
    echo $x - $y . "<br>";
    echo $x * $y . "<br>";
    echo $x % $y . "<br><br>";

    //Assignment Operators

    //+= --- Add and assign
    //-= --- Substract and assign
    //*= --- Multiply and assign
    // /= --- Divide and assign
    // .= --- Concatenate and assign  

    //Comparison Operators

    //Spaceship Operator (PHP 7.0 and above) <=>
    //if the value on the left side is less than the value on the right, the system will return a -1.
    //If the value on the left is equal to the value on the right, the system will return a 0.
    //If the value on the left is greater than the value on the right, the system will return  a 1.

    1 <=> 2; //return value is -1
    2 <=> 2; // Return value is 0
    2 <=> 1; //Return value 1

    //Logical Operators

    ?>
</body>

</html>