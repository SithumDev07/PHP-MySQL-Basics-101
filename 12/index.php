<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>

    <div>
        <h1>Get in touch</h1>
        <p>Please fill in the fields</p>

        <form action="contact.php" method="POST">
            <input type="text" name="name" placeholder="Full Name">
            <input type="email" name="email" placeholder="E-mail">
            <input type="text" name="subject" placeholder="Subject">
            <textarea name="message" placeholder="Enter a message"></textarea>
            <button type="submit" name="submit">Send</button>
        </form>
    </div>

</body>

</html>