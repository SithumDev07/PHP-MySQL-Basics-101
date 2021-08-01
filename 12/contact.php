<?php

if (isset($_POST['submit'])) {
    // Trim removes whitespaces
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);

    $myMail = "sithumsd100@gmail.com";
    $header = "From: " . $email;
    $message2 = "You have a recieved a meesage from " . $name . ".\n\n" . $message;

    //1. Email we are sending into
    // 2.Subject
    // 3. is the message
    mail($myMail, $subject, $message, $header);
    header("Location: index.php?mailsend");
}
