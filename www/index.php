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

        <!-- Javascript -->
        <script src="../script/cookies.js"></script>
        <title>Instakilogram</title>
    </head>

    <body>
        <div class="homepage-container">
            <!-- Header of the site -->
            <header id="header">
                <nav>
                    <div class="homepage-logo">
                        <a href="index.php"><h1>InstaKilogram</h1></a>
                    </div>
                    <div class="searchBar">
                        <input type="text" placeholder="Search InstaKilogram..." class="searchInput">
                        <button id="search-btn" type="submit"><i class="icon-style fa-lg fa-solid fa-magnifying-glass"></i></button>
                    </div>

                    <!-- SIGN BUTTON -->
                    <ul class="signBtn">
                        <a href="../template/form/login.php"><li class="btn-item">
                            <button class="transparent-btn">Log In</button>
                        </li></a>
                        <a href="../template/form/signup.php"><li class="btn-item">
                            <button class="transparent-btn">Sign Up</button>
                        </li></a>
                    </ul>
                </nav>
            </header>

            <!-- Main content section -->
            <!-- CONTENT ROW -->
            <main id="main">
                <!-- First row -->
                <div class="post-content">
                    <a href="../template/form/login.php" class="post">
                        <div class="author">
                            <div class="info-container">
                                <img src="../assets/karma2710.jpeg" class="avatar" alt="avatar">
                                <h1 class="userName">karma.2710</h1>
                            </div>
                            <h2 class="option">Public</h2>
                        </div>
                        <img src="../assets/aesthetic.jpg" class="post-image" alt="post image">
                    </a>
                    <a href="../template/form/login.php" class="post">
                        <div class="author">
                            <div class="info-container">
                                <img src="../assets/karma2710.jpeg" class="avatar" alt="avatar">
                                <h1 class="userName">karma.2710</h1>
                            </div>
                            <h2 class="option">Public</h2>
                        </div>
                        <img src="../assets/aesthetic.jpg" class="post-image" alt="post image">
                    </a>
                </div>

                <!-- Second row -->
                <div class="post-content">
                    <a href="../template/form/login.php" class="post">
                        <div class="author">
                            <div class="info-container">
                                <img src="../assets/karma2710.jpeg" class="avatar" alt="avatar">
                                <h1 class="userName">karma.2710</h1>
                            </div>
                            <h2 class="option">Public</h2>
                        </div>
                        <img src="../assets/aesthetic.jpg" class="post-image" alt="post image">
                    </a>
                    <a href="../template/form/login.php" class="post">
                        <div class="author">
                            <div class="info-container">
                                <img src="../assets/karma2710.jpeg" class="avatar" alt="avatar">
                                <h1 class="userName">karma.2710</h1>
                            </div>
                            <h2 class="option">Public</h2>
                        </div>
                        <img src="../assets/aesthetic.jpg" class="post-image" alt="post image">
                    </a>
                </div>

                <!-- Third row -->
                <div class="post-content">
                    <a href="../template/form/login.php" class="post">
                        <div class="author">
                            <div class="info-container">
                                <img src="../assets/karma2710.jpeg" class="avatar" alt="avatar">
                                <h1 class="userName">karma.2710</h1>
                            </div>
                            <h2 class="option">Public</h2>
                        </div>
                        <img src="../assets/aesthetic.jpg" class="post-image" alt="post image">
                    </a>
                    <a href="../template/form/login.php" class="post">
                        <div class="author">
                            <div class="info-container">
                                <img src="../assets/karma2710.jpeg" class="avatar" alt="avatar">
                                <h1 class="userName">karma.2710</h1>
                            </div>
                            <h2 class="option">Public</h2>
                        </div>
                        <img src="../assets/aesthetic.jpg" class="post-image" alt="post image">
                    </a>
                </div>
            </main>

            <!-- Footer -->
            <?php include "../template/homepageFooter.php" ?>
            
        </div>
    </body>

</html>
