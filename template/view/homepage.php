<?php
session_start();

if (!isset($_SESSION['userID'])) {
    header('location: ../../www/index.php');
}
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
    <link rel="stylesheet" href="../../style/style.css">
    <link rel="stylesheet" href="../../style/homepage.css">
    <link rel="stylesheet" href="../style/cookies.css">
    <link rel="stylesheet" href="../../style/header.css">
    <link rel="stylesheet" href="../../style/footer.css">
    <link rel="stylesheet" href="../../style/responsive.css">

    <!-- Javascript -->
    <script src="../../script/cookies.js"></script>
</head>

<body>
    <div class="homepage-container">
        <!-- Header of the site -->
        <?php include 'loginHeader.php' ?>

        <!-- Main content section -->
        <main id="main">

            <div class="posts-upload">
                <form method="post" action="../model/postGenerator.php" enctype='multipart/form-data'>
                    <input id="post-image" name="post-image" type="file" placeholder="Post Image">
                    Description <input type="textarea" name="description">
                    <input type="submit" name="upload" value="Upload">
                </form>
            </div>

            <div class="post-content">
                <a href="../template/login.php" class="post">
                    <div class="author">
                        <div class="info-container">
                            <img src="../assets/karma2710.jpeg" class="avatar" alt="avatar">
                            <h1 class="userName">karma.2710</h1>
                        </div>
                        <h2 class="option">Public</h2>
                    </div>
                    <img src="../assets/aesthetic.jpg" class="post-image" alt="post image">
                </a>
                <!-- <a href="../template/login.php" class="post">
                    <div class="author">
                        <div class="info-container">
                            <img src="../assets/karma2710.jpeg" class="avatar" alt="avatar">
                            <h1 class="userName">karma.2710</h1>
                        </div>
                        <h2 class="option">Public</h2>
                    </div>
                    <img src="../assets/aesthetic.jpg" class="post-image" alt="post image">
                </a> -->
            </div>
        </main>
    </div>
</body>

</html>