<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Writing Files</title>
</head>

<body>

    <?php
    // $path = $_SERVER['DOCUMENT_ROOT'] . '/uploads/file.txt';
    $path = __DIR__ . '/fileNew.txt';
    $myFile = fopen($path, "w") or die('Can\'t create file');
    // sudo chown -R $USER:$USER /var/www
    // chmod -R 777 ./ Write this and giver permissions 
    echo $myFile;
    echo __DIR__;
    ?>

</body>

</html>