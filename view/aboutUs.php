<?php
    session_start(); 
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <script src="https://use.fontawesome.com/releases/v6.1.1/js/all.js" data-auto-replace-svg="nest"></script>
        <title>About Us</title>

        <!-- Stylesheet CSS -->
        <link rel="stylesheet" href="../style/style.css">
        <link rel="stylesheet" href="../style/cookies.css">
        <link rel="stylesheet" href="../style/footerPage.css">
        <link rel="stylesheet" href="../style/header.css">
        <link rel="stylesheet" href="../style/footer.css">

        <!-- Javascript -->
        <script src="../script/cookies.js"></script>
    </head>

    <body>
        <!-- Header of the site -->
        <?php include_once "../inc/header.php" ?>

        <!-- Main section -->
        <main id="about-us">
            <img src="../assets/teamwork.jpeg" alt="About Us ">
            <div class="about-text">
                <h1>About Us</h1>
                <h2>Instakilogram</h2>
                <p>After earning an HD grade in RMIT's Web Programming course, our group is motivated to found a
                    start-up
                    specializing in mobile and web application development. Our start-up, founded less than a month
                    ago, has
                    successfully built and launched more than ten small and medium-sized websites. Despite its small
                    size and
                    lack of experience, our company aims to compete directly with larger firms by providing
                    innovative design,
                    an enjoyable user interface/user experience, and timely support.</p>
            </div>
        </main>
        <!-- Footer -->
        <?php include_once "../inc/footer.php" ?>
    </body>

</html>