<?php
include('php_modules/connect_db.php');
$queryString = "INSERT INTO days_entry (day, date, entry_list) 
    VALUES (" . $_POST['day'] . ", '" . $_POST['date'] . "', '" . $_POST['entry_copy'] . "')";

echo($queryString . "<br>");

if ($dbConnection->query($queryString) === TRUE) {
    echo("New record created succesfully");
} else {
    echo("Error: " . $queryString . "<br>" . $dbConnection->error . "<br>");
}

$dbConnection->close();

header("Location: http://100days.rupton.co.za/index.php?" . rand(1, 50));
die();