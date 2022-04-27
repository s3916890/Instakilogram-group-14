<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://use.fontawesome.com/releases/v6.1.1/js/all.js" data-auto-replace-svg="nest"></script>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/myAccount.css">
    <title>Instakilogram</title>
    <!-- Javascript -->
    <script src="../script/cookies.js"></script>
</head>

<body>
    <div class="homepage-container">
        <!-- Header of the site -->
        <header id="header">
            <nav>
                <div class="homepage-logo">
                    <a href="homepage.php">
                        <h1>InstaKilogram</h1>
                    </a>
                </div>

                <div class="searchBar">
                    <input type="text" placeholder="Search InstaKilogram..." class="searchInput">
                    <button id="search-btn" type="submit"><i
                            class="icon-style fa-lg fa-solid fa-magnifying-glass"></i></button>
                </div>

                <div class="avatar-container">
                    <div class="user">
                        <div class="profile-pic">
                            <img src="../assets/karma2710.jpeg" alt="profile-pic">
                        </div>

                    </div>
                    <div class="dropdown">
                        <button class="dropbtn">My Account</button>
                        <div class="dropdown-content">
                            <a href="#">My profile</a>
                            <a href="#">Change Image</a>
                            <a href="#">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <!-- Main content section -->
        <!-- CONTENT ROW -->
        <main id="main">
            <div class="profile">
                <div class="avatar-section">
                    <img src="../assets/karma2710.jpeg" class="avt" alt="avatar">
                </div>
                <div class="profile-info">
                    <h1 class="userName">karma.2710</h1>
                    <button>Upload and share image</button>
                </div>
            </div>
            <!-- First row -->
            <div class="post-content">
                <a href="#" class="post">
                    <div class="author">
                        <h1 class="option">Public</h1>
                        <div class="arrow-container">
                            <p> <i class="arrow down"></i></p>
                            <!-- <div class="dropdown-status">
                                <a href="#">Public</a>
                                <a href="#">Internal</a>
                                <a href="#">Private</a>
                            </div> -->
                        </div>
                    </div>
                    <img src="../assets/aesthetic.jpg" class="post-image" alt="post image">
                </a>
                <a href="#" class="post">
                    <div class="author">
                        <h1 class="option">Internal</h1>
                        <div class="arrow-container">
                            <p> <i class="arrow down"></i></p>
                        </div>
                    </div>
                    <img src="../assets/aesthetic.jpg" class="post-image" alt="post image">
                </a>
                <a href="#" class="post">
                    <div class="author">
                        <h1 class="option">Private</h1>
                        <div class="arrow-container">
                            <p> <i class="arrow down"></i></p>
                        </div>
                    </div>
                    <img src="../assets/aesthetic.jpg" class="post-image" alt="post image">
                </a>
            </div>

            <!-- Second row -->
            <div class="post-content">
                <a href="#" class="post">
                    <div class="author">
                        <h1 class="option">Public</h1>
                        <div class="arrow-container">
                            <p> <i class="arrow down"></i></p>
                        </div>
                    </div>
                    <img src="../assets/aesthetic.jpg" class="post-image" alt="post image">
                </a>
                <a href="#" class="post">
                    <div class="author">
                        <h1 class="option">Internal</h1>
                        <div class="arrow-container">
                            <p> <i class="arrow down"></i></p>
                        </div>
                    </div>
                    <img src="../assets/aesthetic.jpg" class="post-image" alt="post image">
                </a>
                <a href="#" class="post">
                    <div class="author">
                        <h1 class="option">Private</h1>
                        <div class="arrow-container">
                            <p> <i class="arrow down"></i></p>
                        </div>
                    </div>
                    <img src="../assets/aesthetic.jpg" class="post-image" alt="post image">
                </a>
            </div>

            <!-- Third row -->
            <div class="post-content">
                <a href="#" class="post">
                    <div class="author">
                        <h1 class="option">Public</h1>
                        <div class="arrow-container">
                            <p> <i class="arrow down"></i></p>
                        </div>
                    </div>
                    <img src="../assets/aesthetic.jpg" class="post-image" alt="post image">
                </a>
                <a href="#" class="post">
                    <div class="author">
                        <h1 class="option">Internal</h1>
                        <div class="arrow-container">
                            <p> <i class="arrow down"></i></p>
                        </div>
                    </div>
                    <img src="../assets/aesthetic.jpg" class="post-image" alt="post image">
                </a>
                <a href="#" class="post">
                    <div class="author">
                        <h1 class="option">Private</h1>
                        <div class="arrow-container">
                            <p> <i class="arrow down"></i></p>
                        </div>
                    </div>
                    <img src="../assets/aesthetic.jpg" class="post-image" alt="post image">
                </a>
            </div>
        </main>

        <!-- Footer -->
        <footer id="footer">
            <a class="footer-link" href="html/aboutUs.html">About Us</a>
            <a class="footer-link" href="html/privacy.html">Privacy</a>
            <a class="footer-link" href="html/help.html">Help</a>
            &copy; Instakilogram FROM GROUP 14
        </footer>

    </div>
</body>

</html>