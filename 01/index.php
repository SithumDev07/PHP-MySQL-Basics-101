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

    echo "Hello World";
    echo 'Hello World'; //Same

    echo "Ehell ", "World";

    $name = "Sithum";

    echo $name;

    echo "I am $name";

    print $name; //Echo Is slightly faster than the echo

    //Different Types of comments

    //One

    #Two

    /* Three*/

    //Line Breaks


    echo "My name is  Sithum \r\n I am working ass off to become a fullstack developer."; //Single Line
    echo nl2br("My name is  Sithum \r\n I am working ass off to become a fullstack developer."); //Double Lined and it takes some time to render.
    echo "My name is  Sithum <br> I am working ass off to become a fullstack developer."; //Best way to done with HTML br tag.
    echo "<br>" . "My name is  Sithum" . " <br>" . "I am working ass off to become a fullstack developer."; //Recommended Way
    ?>
</body>

</html>