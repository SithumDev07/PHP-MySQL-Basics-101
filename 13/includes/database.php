<?php

// Params to connect a database
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "php_learn";

// Connection to database
$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if ($conn) {
    # code...
} else {
    die('Database connection failed');
}
