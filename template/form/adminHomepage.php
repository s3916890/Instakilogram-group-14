<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Homepage</title>
</head>
<body>
    <header>
        <div id='logo'>Logo</div>
        <div id='search bar'></div> <!-- include search bar code -->
    </header>
    <main>
        <div class='allAccounts'>
            <h2>View information of all user accounts:</h2>
            <!-- Display a table of users based on user_name and email (optional: image) -->
        <?php include 'allAccounts.php'?>
        </div>
    </main>
</body>
</html>