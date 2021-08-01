<!-- Error Handling -->

<?php

if (isset($_POST['submit'])) {
    $file = $_FILES['file'];
    $name = $_FILES['file']['name']; //Find file name
    $tmp_name = $_FILES['file']['tmp_name']; //Find file temp_name
    $size = $_FILES['file']['size']; //Find file size
    $error = $_FILES['file']['error']; //Find errors


    $tempExtension = explode('.', $name); //explode from punctuation mark

    $fileExtension = strtolower(end($tempExtension)); //file extention

    //Allowed Extensions
    $isAllowed = array('jpg, jpeg', 'png', 'pdf');

    //0 is no error, 1 is an error
    // PHP is woking with KBs
    if (in_array($fileExtension, $isAllowed)) {
        if ($error === 0) {
            if ($size < 30000) {
                $newFileName = uniqid('', true) . "." . $fileExtension;
                $fileDestination = "uploads/" . $newFileName;
                move_uploaded_file($tmp_name, $fileDestination) or die('cant move');
                header("Location: index.php?uploadedsuccess");
            } else {
                echo "<br><br> Sorry your file is too big!";
            }
        } else {
            echo "<br><br>Sorry there is an error";
        }
    } else {
        echo "<br><br>sorry your file type is not accepted";
    }
}

?>