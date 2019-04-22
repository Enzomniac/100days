<?php 
include('php_modules/connect_db.php');
$queryString = "SELECT day, date, entry_list FROM days_entry";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>100 days of code</title>
</head>
<body>
    <header>
        <div class="header__box">
            <h1 class="header__title">
                100 days
            </h1>
            <h1 class="header__title">
                of code
            </h1>
        </div>
    </header>
    <aside class="counter">
        <div class="the-day">
            Day: 1, only 99 days to go!
        </div>
        <div class="the-day">
            Major Goals
        </div>        
    </aside>
    <main>
<?php

$result = $dbConnection->query($queryString);

if ($result -> num_rows > 0) {
    $anEntryString = "";
    while ($row = $result->fetch_assoc()) {
        $anEntryString =    '<div class="an-entry">';
        $anEntryString .=        '<div class="an-entry__title">';
        $anEntryString .=           'Day: ' . $row['day'];
        $anEntryString .=       '</div>';
        $anEntryString .=       '<div class="an-entry__copy">';
        $anEntryString .=           $row['entry_list'];
        $anEntryString .=       '</div>';
        $anEntryString .=   '</div>';
        echo($anEntryString);        
    }
} else {
    echo("No results!<br>");
}
$dbConnection->close();
?>        
    </main>
    <footer>
        <div class="link">
            <a href="dashboard.php" class="link">DASHBOARD</a>
        </div>
    </footer>
</body>
</html>