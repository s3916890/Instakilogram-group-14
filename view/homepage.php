<?php
session_start();
    $_SESSION['internal'] = true;
    $_SESSION['public'] = true;

if (!isset($_SESSION['loggedin'])) {
    header('location: login.php');
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
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/homepage.css">
    <link rel="stylesheet" href="../style/cookies.css">
    <link rel="stylesheet" href="../style/header.css">
    <link rel="stylesheet" href="../style/footer.css">
    <link rel="stylesheet" href="../style/responsive.css">

    <!-- Javascript -->
    <script src="../script/cookies.js"></script>
</head>

<body>
    <div class="homepage-container">
        <!-- Header of the site -->
        <?php include_once "loginHeader.php"; ?>

        <!-- Main content section -->
        <main id="main">

            <div class="posts-upload">
                <form method="post" action="../model/postGenerator.php" enctype='multipart/form-data'>
                    <input id="post-image" name="post-image" type="file" placeholder="Post Image">
                    Description <input type="textarea" name="description">

                    <div class="selectOption">
                        <label for="status"></label>
                        <select name="status" class="status">
                            <option class="optionValue" value="public">Public</option>
                            <option class="optionValue" value="internal">Internal</option>
                            <option class="optionValue" value="private">Private</option>
                        </select>
                    </div>

                    <input type="submit" name="upload" value="Upload" id="upload" class="upload">
                    <label for="upload" class="uploadLabel">Upload</label>
                </form>
            </div>

            <div class="post-content">
                <?php
                    include '../model/post.php';
                ?>

            </div>
        </main>

        <!-- Footer -->
        <?php include_once "footer.php" ?>
    </div>

</body>

</html>