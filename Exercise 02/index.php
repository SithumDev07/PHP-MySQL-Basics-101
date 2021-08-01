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

<?php

//Exercise 01
$price = 100;
$vat = 0.21;

function calculateVat($price, $vat)
{
    $calculatedPrice = ($price * $vat) + $price;
    return $calculatedPrice;
}

echo "Price " . $price . "<br>";
echo "Vat " . $vat . "<br>";
echo "Total Price " . calculateVat($price, $vat) . "<br><br>";

//Exercise 02
$year = 2000;
function isLeapYear($year)
{
    if ($year % 400 == 0 || $year % 4 == 0) {
        return true;
    } else
        return false;
}

if (isLeapYear($year))
    echo "Yeah the year " . $year . " is a leap year! <br><br>";
else
    echo "Yeah the year " . $year . " is not a leap year! <br><br>";

//Exercise 03
$num1 = 10;
$num2 = 15;

function addNumbers($num1, $num2)
{
    return $num1 + $num2;
}
function substractNumbers($num1, $num2)
{
    return $num1 - $num2;
}
function multiplyNumbers($num1, $num2)
{
    return $num1 * $num2;
}
function divideNumbers($num1, $num2)
{
    return $num1 / $num2;
}

echo "Addition of " . $num1 . " and " . $num2 . " is " . addNumbers($num1, $num2) . "<br>";
echo "Substraction of " . $num1 . " and " . $num2 . " is " . substractNumbers($num1, $num2) . "<br>";
echo "Multiplication of " . $num1 . " and " . $num2 . " is " . multiplyNumbers($num1, $num2) . "<br>";
echo "Division of " . $num1 . " and " . $num2 . " is " . divideNumbers($num1, $num2) . "<br><br>";

//Exercise 04

function SwapNumbers($para1, $para2)
{
    $temp = $para1;
    $para1 = $para2;
    $para2 = $temp;

    echo "After swapping parameter 1 of " . $para1 . " and parameter 2 of " . $para2 . "<br><br>";
}

SwapNumbers(10, 5585);

//Exercise 05

function evenOrNot($num1)
{
    if ($num1 % 2 == 0)
        echo $num1 . " is even! <br><br>";
    else
        echo $num1 . " is not even! <br><br>";
}

evenOrNot($num1);

//Exercise 06

$num1 = 4;

function isPrime($num1)
{
    if ($num1 == 1)
        return false;
    else {
        for ($i = 2; $i < $num1 / 2; $i++) {
            if ($num1 % $i == 0) {
                return false;
            }
        }
        return true;
    }
}

if (isPrime($num1))
    echo "This number is a prime number <br><br>";
else
    echo "This number is not a prime number <br><br>";

?>

<body>

</body>

</html>