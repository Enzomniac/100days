<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>100 Days -- Dashboard</title>
</head>
<body>
    <main class="dash-main">
        <form action="db_post.php"  class="entry-form" id="entry-form-id" method="POST">
            <input type="number" name="day" id="day-entry" placeholder="ENTER DAY">
            <input type="date" name="date" id="date">
            <textarea name="entry_copy" id="entry-copy" cols="30" rows="10" placeholder="What did you achieve today"></textarea>
            <input type="password" name="pwd" id="pwd">
            <button type="submit">Submit Entry</button>
        </form>
    </main>
    
</body>
</html>