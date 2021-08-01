<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php


    if (isset($_POST['submit'])) {
        $myFile = fopen("uploads/file.txt", "a") or die('cant create file');

        $text = "My age is " . $_POST['age'] . "\n";

        fwrite($myFile, $text);
        fclose($myFile);
    }

    ?>

    <form action="index.php" method="POST">
        <input type="number" name="age">
        <input type="submit" name="submit">
    </form>

</body>

</html>