<?php

if (isset($_POST['submit'])) {
    // Add database connection

    require 'database.php';

    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    if (empty($username)  || empty($password) || empty($confirmPassword)) {
        header("Location: ../register.php?error=emptyfields&username" . $username);
        exit();
    } else if (!preg_match("/^[a-zA-Z0-9]*/", $username)) {
        header("Location: ../register.php?error=invalidusername&username" . $username);
        exit();
    } elseif ($password !== $confirmPassword) {
        header("Location: ../register.php?error=passwordsdonotmatch&username" . $username);
        exit();
    } else {
        // $sql = "SELECT username FROM users WHERE username = $username"; don't use this. this cause to SQL Injection
        $sql = "SELECT username FROM users WHERE username = ?";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../register.php?error=sqlerror");
            exit();
        } else {
            // s - string
            // ss - 
            // i - integer
            // b- boolean
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $rowCount = mysqli_stmt_num_rows($stmt);

            if ($rowCount > 0) {
                header("Location: ../register.php?error=usernametaken");
                exit();
            } else {
                $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../register.php?error=sqlerror");
                    exit();
                } else {
                    mysqli_stmt_bind_param($stmt, "ss", $username, $password);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_store_result($stmt);
                }
            }
        }
    }
}
