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

    echo "The total is " . $z . "<br><br>";

    //value Added Tax

    $price = 100;
    $vat  = 0.21;


    $totalPrice = ($price * $vat) + $price;

    echo "Value Added TaxPrice " . $price . "<br>";
    echo "Vat " . $vat . "<br>";
    echo "Total Price " . $totalPrice . "<br><br>";

    //Average

    $x = 4;
    $y = 5;
    $z = 2;

    $average = ($x + $y + $z) / 3;

    echo "Average " . number_format($average, 2, ',', ' ') . "<br><br>";

    $countries = array("Netherlands" => "Amsterdam", "Germany" => "Berlin", "Thailand" => "Bangkok", "Sri Lanka" => "Colombo", "Canada" => "Toronto");

    foreach ($countries as $key => $value) {
        echo "The capital of  " . $key . " is " . $value;
        echo "<br>";
    }

    echo "<br><br>";

    $cm = 150;

    $cmToInch = $cm * 0.39;

    echo $cm . " centimeters is " . $cmToInch . " inch <br><br>";

    $expenses = array(40, 70, 85, 150);

    $totalAmount;
    $amountOfExpenses;

    foreach ($expenses as $expense) {
        $totalAmount = $totalAmount + $expense;
    }

    echo "The total amount " . $totalAmount . "<br><br>";

    //Weather Conditions

    $weather = array("Rain", "Sunshine", "Clouds", "Hail", "Sleet", "Snow", "Wind");

    echo "We've seen all kinds of weather this month. At the begining of the month, we had " . $weather[5] . " and " . $weather[6] . ". Then came " . $weather[1] . " with a few " . $weather[2] . " and some " . $weather[0] . ". At least we didn't get any " . $weather[3] . " or " . $weather[4];

    ?>

</body>

</html>