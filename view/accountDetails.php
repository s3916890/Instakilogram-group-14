<?php
session_start();
if (!isset($_SESSION['adminLoggedIn'])) {
    header('location: AdminLogin.php');
}
$accountID = $_GET['accountID'];
$fileName = "../database/account.db";
$accounts = json_decode(file_get_contents($fileName));
if ($accounts != null) {
    for ($i = 0; $i < count($accounts); $i++) {
        // Go to homepage if the email and password are correct
        if ($accountID == $accounts[$i]->userID) {
            $_SESSION["userName"] = $accounts[$i]->userName; 
            $_SESSION["firstName"] = $accounts[$i]->firstName;
            $_SESSION["lastName"] = $accounts[$i]->lastName;
            $_SESSION["email"] = $accounts[$i]->email;
            $_SESSION["avatar"] = $accounts[$i]->avatar;
        }
    }    
}; 
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

    <title>Instakilogram</title>
    <!-- Javascript -->
    <script src="../script/cookies.js"></script>
</head>

<body>
    <div class="homepage-container">
        <!-- Header of the site -->
        <?php include_once "../inc/header.php" ?>
        <!-- Main content section -->
        <!-- CONTENT ROW -->
        <main class="main-section">

            <div class="profile">
                <div class="avatar-section">
                    <?php
                    if (isset($_SESSION['avatar'])) {
                    ?>
                        <img src="<?php echo '../assets/userAvatar/' . $_SESSION['avatar']; ?>" class="avt" alt="Avatar">
                    <?php
                    }
                    ?>
                </div>
                <div class="profile-info">
                    <div class="information">
                        <h1 class="account-name">
                            <?php
                            if (isset($_SESSION["userName"])) {
                                echo $_SESSION["userName"];
                            }
                            ?>
                        </h1>
                        <ul class="view-information">
                            <li class="key-name">First name:
                                <span class="key-value">
                                    <?php
                                    if (isset($_SESSION["firstName"])) {
                                        echo $_SESSION["firstName"];
                                    }
                                    ?>
                                </span>
                            </li>
                            <li class="key-name">Last name:
                                <span class="key-value">
                                    <?php
                                    if (isset($_SESSION["lastName"])) {
                                        echo $_SESSION["lastName"];
                                    }
                                    ?>
                                </span>
                            </li>
                            <li class="key-name">Email:
                                <span class="key-value">
                                    <?php
                                    if (isset($_SESSION["email"])) {
                                        echo $_SESSION["email"];
                                    }
                                    ?>
                                </span>
                            </li>
                        </ul>
                    </div>

                    <form class="change-avatar" method="POST" action="resetPass.php" enctype='multipart/form-data'>
                        <input id="new-avatar" name="newAvatar" type="file" placeholder="New Profile Picture">
                        <button type="submit" name="submit" class="upload-btn">Reset Password</button>
                    </form>
                </div>

            </div>

            <div class="post-content">
                <?php
                include '../model/post.php';
                ?>

            </div>

        </main>

        <!-- Footer -->
        <?php include_once "../inc/footer.php" ?>


    </div>

</body>

</html>