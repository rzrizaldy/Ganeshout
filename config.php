<?php

$servername = "sql6.freemysqlhosting.net";
$username = "sql6149896";
$password = "48fC2D1VQ7";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_select_db($conn,"sql6149896");
 ?>
