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

    //Date
    // 'd' = Day
    // 'j' = Day without zeros
    // 'D' = Day of week (3 letters)
    // 'l' = Full day of the week
    // 'm' = Month as the number of zeros
    // 'n' = Month as the number without zeros
    // 'M' = Month three letters
    // 'F' = Full Month
    // 'y' = Two Digit Year
    // 'Y' = Full Year

    echo date('Y/m/d') . "<br><br>";

    //Times
    //'g' = Hours in 12 hour format
    //'h' = Hours in 12 hour format with zeros
    // 'G' = Hours in 24 hour format without zeros
    // 'H' = Hours in 24 hour format with zeros
    // 'A' = am/pm in uppercase
    // 'a' = am/pm in lowercase
    // 'i' = minutes without leading zeros
    // 's' = seconds without leading zeros

    echo date('H:i:s a') . " <br><br>";

    //Setting timezone
    date_default_timezone_set('Asia/Colombo');

    //String to time
    $time = strtotime("4.00 pm December 07 1997");
    //is the timestamp is the value represented as seconds calculated, since UNIX Epoch, January 1, 1970 and also called as UNIX timestamp.
    echo $time . "<br><br>";

    echo date('m/d/Y H:i:s a', $time) . "<br><br>";

    //Random Number Generator
    // echo rand();
    // echo getrandmax();
    // $min = 1;
    // $max = 10;
    echo rand(1, 10);

    ?>
</body>

</html>