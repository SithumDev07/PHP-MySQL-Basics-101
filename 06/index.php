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
//Built in functions
//Ceil
echo ceil(1.50) . "<br>";

//Floor
echo floor(1.50) . "<br>";

//Round
echo round(0.541125, 2) . "<br>";

//Exp
echo exp(4) . "<br>";

//String functions
//Use strlen rather than using maxlength in HTML: Avoid Hackers

$str = "Today is a sunny day";

echo strlen($str) . "<br><br>";

//String word count
$firstName = "My name is Sithum.";
echo str_word_count($firstName) . "<br><br>";

//How to find a text within a text.
$email = "sithum@uxdesino.com";
if (strpos($email, "@"))
    echo "This is a valid email.<br><br>";
else
    echo "This is not a valid email.<br><br>";

//Ucwords - Uppercase
echo ucwords("What is your name?" . "<br><br>");

//Whole string to uppercase
echo strtoupper("What is your name?" . "<br><br>");

//Whole string to lowercase
echo strtolower("What is your name?" . "<br><br>");


//Array built in functions

//Merging arrays
$personalInfo = array("Name" => "Sithum", "Age" => 21, "City" => "Badulla");

$moreInfo = array("State" => "UVA", "Weight" => 80);

$personalInfo = array_merge($personalInfo, $moreInfo);

foreach ($personalInfo as $key => $value) {
    echo $key . ": " . $value . "<br>";
}

//Print only keys
print_r(array_keys($personalInfo));
echo "<br><br>";

// Print only values
print_r(array_values($personalInfo));
echo "<br><br>";

//Push to arrays
$cars = array("Volswagen", "Audi", "Mercedes");
array_push($cars, "Volvo");

print_r($cars);
echo "<br><br>";

//Array Search
echo array_search("Volvo", $cars);
echo "<br><br>";

//Array Count
echo count($cars);
echo "<br><br>";

?>

<body>

</body>

</html>