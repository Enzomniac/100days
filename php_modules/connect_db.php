<?php
include('credentials.php');

$dbConnection = mysqli_connect($db_host, $db_user, $db_password, $db_name);

//check connection
if (mysqli_connect_errno()) {
    //echo("Failed to connect to MySQLi: " .mysqli_connect_error() . "<br>");
} else {
    //echo("Succesful connection to " . $db_name . "<br>");
}

header("Location: http://100days.rupton.co.zaindex.php?" . rand(1, 50));
die();