<?php
$_SESSION['adminLoggedIn'] = false;
$_SESSION['loggedin'] = false;
$_SESSION['myAccount'] = false;
$_SESSION['userID'] = false;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instakilogram</title>

    <script src="https://use.fontawesome.com/releases/v6.1.1/js/all.js" data-auto-replace-svg="nest"></script>

    <!-- Stylesheet CSS -->
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/homepage.css">
    <link rel="stylesheet" href="../style/cookies.css">
    <link rel="stylesheet" href="../style/header.css">
    <link rel="stylesheet" href="../style/footer.css">

    <!-- Javascript -->
    <script src="../script/cookies.js"></script>
</head>

<body>
    <div class="homepage-container">
        <!-- Header of the site -->
        <?php include "../inc/header.php" ?>

        <!-- Main content section -->
        <main class="main-section">
            <div class="post-content">
                <?php
                    include '../model/post.php';
                ?>

            </div>
        </main>

        <!-- Footer -->
        <?php include "../inc/footer.php" ?>

    </div>

</body>

</html>