<?php
    session_start();

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
        <?php include_once "loginHeader.php"; ?>
        <!-- Main content section -->
        <!-- CONTENT ROW -->
        <main id="main">
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
                    <h1 class="userName">
                        <?php
                        if (isset($_SESSION["userName"])) {
                            echo $_SESSION["userName"];
                        }
                        ?>
                    </h1>
                    <ul class="viewInformation">
                        <li class="keyName">First name:
                            <span class="keyValue">
                                <?php
                                if (isset($_SESSION["firstName"])) {
                                    echo $_SESSION["firstName"];
                                }
                                ?>
                            </span>
                        </li>
                        <li class="keyName">Last name:
                            <span class="keyValue">
                                <?php
                                if (isset($_SESSION["lastName"])) {
                                    echo $_SESSION["lastName"];
                                }
                                ?>
                            </span>
                        </li>
                        <li class="keyName">Email:
                            <span class="keyValue">
                                <?php
                                if (isset($_SESSION["email"])) {
                                    echo $_SESSION["email"];
                                }
                                ?>
                            </span>
                        </li>
                    </ul>
                    <form class="change-avatar" method="POST" action="../model/avatarChange.php" enctype='multipart/form-data'>
                        <input id="new-avatar" name="newAvatar" type="file" placeholder="New Profile Picture">
                        <button type="submit" name="submit" class="uploadBtn">Change Avatar</button>
                    </form>

                </div>
            </div>

        </main>

        <!-- Footer -->
        <?php include_once "footer.php" ?>

    </div>
</body>

</html>