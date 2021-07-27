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
    //Superglobals
    $x = 100;
    $y = 200;

    function add()
    {
        $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
    }

    add();
    echo $z . "<br><br>";

    //POST
    //Collects data from HTML form (invisible)
    if (isset($_POST)) {
        echo $_POST['name'] . ", Your form has been successfully submited";
    }

    echo "<br>";
    print_r($_POST);

    //GET Data will be visible in the URL (Non-sensitive Data)


    //Session
    //Good to use for sensitive information
    //Sessions exists as long as the browser opens

    session_start();

    $_SESSION["Name"] = "Sithum";
    $_SESSION["Age"] = 21;

    echo "Hello " . $_SESSION["Name"];

    session_destroy();

    echo "Hello " . $_SESSION["Name"] . "<br><br>";

    //Cookies
    //Small file that the webserver stores in the client computer

    //cookies can have 6 arguments
    //Name
    //Value
    //Expire
    //Path - Mandotary
    //Domain - Mandotary
    //Security - Mandotary
    // setcookie("name", "Sithum", time() + 86400 * 30,);
    setcookie("name", "Sithum", time() - 86400 * 30); //Won't Work

    //If we do not include an expiration datel, the cookie will only be stored for the current session.

    //Files

    print_r($_COOKIE);

    ?>

    <!-- <form action="index.php" method="POST">
        <input type="text" name="name">
        <input type="text" name="age">
        <button type="submit">Submit</button>
    </form>

    <br>
    <br>
    <br>

    <form action="index.php" method="GET">
        <input type="text" name="name">
        <input type="password" name="password">
        <button type="submit">Submit</button>
    </form> -->

</body>

</html>