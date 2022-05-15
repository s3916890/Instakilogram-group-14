<?php
session_start();

if (!isset($_SESSION['loggedin'])) {
    header('location: login.php');
}
$_SESSION['myAccount'] = true;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://use.fontawesome.com/releases/v6.1.1/js/all.js" data-auto-replace-svg="nest"></script>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/homepage.css">
    <link rel="stylesheet" href="../style/header.css">
    <link rel="stylesheet" href="../style/footer.css">
    <link rel="stylesheet" href="../style/cookies.css">

    <title>Instakilogram</title>
    <!-- Javascript -->
    <script src="../script/cookies.js"></script>
</head>

<body>
    <div class="homepage-container">
        <!-- Header of the site -->
        <?php include_once "../inc/header.php" ?>

        <!-- Main section -->
        <?php include "accountMain.php" ?>

        <!-- Footer -->
        <?php include_once "../inc/footer.php" ?>


    </div>

</body>

</html>