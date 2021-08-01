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
    //Exercise 01
    $numbers = array("Milk" => 2, "Cheese" => 4, "7-Up" => 3);
    arsort($numbers);

    print_r($numbers);
    echo "<br><br>";

    //Exercise 02
    $targetDays = mktime("0", "0", "0", "09", "23", "2021");
    $today = time();

    $differenceDays = ($targetDays - $today);

    $days = (int)($differenceDays / 86400);

    echo "Days till next birthday: " . $days . " days.<br><br>";


    //Exercise 03
    $randNumber = rand(0, 100) / 10;
    echo $randNumber . "<br><br>";

    //Exercise 04
    $str = "My name is Sithum, I'm 21 years old and I live in Badulla, Sri Lanka. I like PHP.";

    function lowercaseCheck($str)
    {
        echo strtolower($str) . "<br><br>";
    }

    lowercaseCheck($str);

    //Exercise 05

    $punctuation = 0;

    function searchText($str, $punctuation)
    {
        for ($i = 0; $i < strlen($str); $i++) {
            if ($str[$i] == '.')
                $punctuation++;
        }
        echo "The text has " . $punctuation . " punctuation <br><br>";
    }

    searchText($str, $punctuation);

    //Exercise 06
    $onlyNumbers = array(78, 5, 15, 23, 11, 66, 45, 48, 96);
    echo "The lowest value is " . min($onlyNumbers) . " and highest value is " . max($onlyNumbers) . "<br><br>";

    //Exercise 07
    echo str_repeat($str, 10);
    ?>
</body>

</html>