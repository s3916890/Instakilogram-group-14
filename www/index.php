<?php header("Cache-Control: no-cache, must-revalidate"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://use.fontawesome.com/releases/v6.1.1/js/all.js" data-auto-replace-svg="nest"></script>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/homepage.css">
    <link rel="stylesheet" href="../style/cookies.css">
    <link rel="stylesheet" href="../style/header.css">
    <link rel="stylesheet" href="../style/footer.css">

    <!-- Javascript -->
    <script src="../script/cookies.js"></script>
    <title>Instakilogram</title>
</head>

<body>
    <div class="homepage-container">
        <?php include "nonLoginHeader.php" ?>

        <?php include "nonLoginContent.php" ?>
        <!-- Footer -->
        <?php include "../template/homepageFooter.php" ?>

    </div>
    <script>
        history.pushState(null, null, null);
        window.addEventListener('popstate', function() {
            history.pushState(null, null, null);
        });
    </script>
</body>


</html>