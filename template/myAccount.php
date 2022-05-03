<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://use.fontawesome.com/releases/v6.1.1/js/all.js" data-auto-replace-svg="nest"></script>
        <link rel="stylesheet" href="../style/myAccount.css">
        <link rel="stylesheet" href="../style/style.css">
        <link rel="stylesheet" href="../style/header.css">
        
        <title>Instakilogram</title>
        <!-- Javascript -->
        <script src="../script/cookies.js"></script>
    </head>
    
    <body>
        <div class="homepage-container">
            <!-- Header of the site -->
            <?php include "loginHeader.php"; ?>
            <!-- Main content section -->
            <!-- CONTENT ROW -->
            <main id="main">
                <div class="profile">
                    <div class="avatar-section">
                        <img src="../assets/karma2710.jpeg" class="avt" alt="avatar">
                    </div>
                    <div class="profile-info">
                        <h1 class="userName">
                            <?php
                                // if ($_POST["submit"]){
                                    if (isset($_POST["userName"])) {
                                        echo $_POST["userName"];
                                    }
                                    else{
                                        echo "karma.2710";
                                    }
                                // }
                            ?> 
                    </h1>
                    <ul class="viewInformation">
                        <li class="keyName">First name: 
                            <span class="keyValue">
                                <?php
                                    if (isset($_POST["firstName"])) {
                                        echo $_POST["firstName"];
                                    }  
                                    else{
                                        echo "Nguyen";
                                    }
                                ?> 
                            </span>
                        </li>
                        <li class="keyName">Last name: 
                            <span class="keyValue">
                                <?php
                                    if (isset($_POST["lastName"])) {
                                        echo $_POST["lastName"];
                                    }  
                                    else{
                                        echo "Loi";
                                    }
                                ?> 
                            </span>
                        </li>
                        <li class="keyName">Email: 
                            <span class="keyValue">
                                <?php
                                    if (isset($_POST["email"])) {
                                        echo $_POST["email"];
                                    }   
                                    else{
                                        echo "nguyenphucloi2710@gmail.com";
                                    }
                                ?> 
                            </span>
                        </li>
                    </ul>
                    <button class="uploadBtn">Upload and share image</button>
                </div>
            </div>
            <!-- First row -->
            <div class="post-content">
                <div class="post">
                    <div class="author">
                        <label for="status"></label>
                        <select name="status" class="status">
                            <option value="public">Public</option>
                            <option value="internal">Internal</option>
                            <option value="private">Private</option>
                        </select>
                    </div>
                    <img src="../assets/aesthetic.jpg" class="post-image" alt="post image">
                </div>
                <div class="post">
                    <div class="author">
                        <label for="status"></label>
                        <select name="status" class="status">
                            <option value="public">Public</option>
                            <option value="internal">Internal</option>
                            <option value="private">Private</option>
                        </select>
                    </div>
                    <img src="../assets/aesthetic.jpg" class="post-image" alt="post image">
                </div>
                <div class="post">
                    <div class="author">
                        <label for="status"></label>
                        <select name="status" class="status">
                            <option value="public">Public</option>
                            <option value="internal">Internal</option>
                            <option value="private">Private</option>
                        </select>
                    </div>
                    <img src="../assets/aesthetic.jpg" class="post-image" alt="post image">
                </div>
            </div>

            <!-- Second row -->
            <div class="post-content">
                <div class="post">
                    <div class="author">
                        <label for="status"></label>
                        <select name="status" class="status">
                            <option value="public">Public</option>
                            <option value="internal">Internal</option>
                            <option value="private">Private</option>
                        </select>
                    </div>
                    <img src="../assets/aesthetic.jpg" class="post-image" alt="post image">
                </div>
                <div class="post">
                    <div class="author">
                        <label for="status"></label>
                        <select name="status" class="status">
                            <option value="public">Public</option>
                            <option value="internal">Internal</option>
                            <option value="private">Private</option>
                        </select>
                    </div>
                    <img src="../assets/aesthetic.jpg" class="post-image" alt="post image">
                </div>
                <div class="post">
                    <div class="author">
                        <label for="status"></label>
                        <select name="status" class="status">
                            <option value="public">Public</option>
                            <option value="internal">Internal</option>
                            <option value="private">Private</option>
                        </select>
                    </div>
                    <img src="../assets/aesthetic.jpg" class="post-image" alt="post image">
                </div>
            </div>

            <!-- Third row -->
            <div class="post-content">
                <div class="post">
                    <div class="author">
                        <label for="status"></label>
                        <select name="status" class="status">
                            <option value="public">Public</option>
                            <option value="internal">Internal</option>
                            <option value="private">Private</option>
                        </select>
                    </div>
                    <img src="../assets/aesthetic.jpg" class="post-image" alt="post image">
                </div>
                <div class="post">
                    <div class="author">
                        <label for="status"></label>
                        <select name="status" class="status">
                            <option value="public">Public</option>
                            <option value="internal">Internal</option>
                            <option value="private">Private</option>
                        </select>
                    </div>
                    <img src="../assets/aesthetic.jpg" class="post-image" alt="post image">
                </div>
                <div class="post">
                    <div class="author">
                        <label for="status"></label>
                        <select name="status" class="status">
                            <option value="public">Public</option>
                            <option value="internal">Internal</option>
                            <option value="private">Private</option>
                        </select>
                    </div>
                    <img src="../assets/aesthetic.jpg" class="post-image" alt="post image">
                </div>
            </div>
        </main>

        <!-- Footer -->
        <footer id="footer">
            <a class="footer-link" href="footerPage/aboutUs.php">About Us</a>
            <a class="footer-link" href="footerPage/privacy.php">Privacy</a>
            <a class="footer-link" href="footerPage/help.php">Help</a>
            &copy; Instakilogram FROM GROUP 14
        </footer>

    </div>
</body>

</html>