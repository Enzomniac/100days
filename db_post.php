<?php
$dbConnection = mysqli_connect("localhost", "root", "", "rupton_db");

//check connection
if (mysqli_connect_errno()) {
    echo("Failed to connect to MySQLi: " .mysqli_connect_error());
} else {
    echo("Succesfull connection to database<br>");
}

$queryString = "INSERT INTO days_entry (day, date, entry_list) 
    VALUES (" . $_POST['day'] . ", '" . $_POST['date'] . "', '" . $_POST['entry_copy'] . "')";

echo($queryString . "<br>");

if ($dbConnection->query($queryString) === TRUE) {
    echo("New record created succesfully");
} else {
    echo("Error: " . $queryString . "<br>" . $dbConnection->error . "<br>");
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Process to DB</title>
</head>
<body>
<?php
    foreach ($_POST as $key => $value) {
        echo($key . ": " . $value . "<br>");
    }
?>   
</body>
</html>


