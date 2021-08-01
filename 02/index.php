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

    $name = "Sithum";

    // Variable name starts with a letter A-Z a-z,
    // underscore followed by any number of letters, numbers or underscores.

    $Name = "Wanderer";

    // $9Name - Throw Errors

    $_nnaammee = "SithumDev07";

    echo $name . " and " . $Name . $_nnaammee;

    echo "<br><br>";

    $_age = 21;
    echo "My age is {$_age}";

    echo "<br>" . "My age is " . $_age;

    //Single Quotes - Variable names are echoed as it is
    ?>
</body>

</html>