<!-- Main content section -->
<main class="main-section">

    <div class="profile">
        <div class="avatar-section">
            <?php
            if (isset($_SESSION['avatar'])) {
            ?>
                <img src="<?php echo '../../database/userAvatar/' . $_SESSION['avatar']; ?>" class="avt" alt="Avatar">
            <?php
            }
            ?>
            <h1 class="account-name">
                <?php
                if (isset($_SESSION["userName"])) {
                    echo $_SESSION["userName"];
                }
                ?>
            </h1>
        </div>
        <div class="profile-info">
            <div class="information">
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
            <div class="button-section">
                <?php
                // if the session is myAccount, render the change avatar field
                if ($_SESSION["myAccount"]) {
                    echo '
                <form class="change-avatar" method="POST" action="../model/avatarChange.php" enctype="multipart/form-data">
                    <input id="new-avatar" name="newAvatar" type="file" placeholder="New Profile Picture">
                    <button type="submit" name="submit" class="upload-btn">Change Avatar</button>
                </form>';
                }
                // if the session is adminLoggedIn, render the reset password field
                elseif ($_SESSION["adminLoggedIn"]) {
                    echo '
                <form method="POST">
                <label for="newPass">New Password:</label><br>
                <input type="password" id="new-password" name="newPass"><br>
                <input type="submit" value="submit" name="resetPass">
              </form> ';
                }
                ?>
            </div>
        </div>

    </div>

    <div class="post-content"> <!-- display posts of all accounts -->
            
        <?php
        include '../model/post.php';
        ?>

    </div>

</main>