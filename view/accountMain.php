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

            <form class="change-avatar" method="POST" action="../model/avatarChange.php" enctype='multipart/form-data'>
                <input id="new-avatar" name="newAvatar" type="file" placeholder="New Profile Picture">
                <button type="submit" name="submit" class="upload-btn">Change Button</button>
            </form>
        </div>

    </div>

    <div class="post-content">
        <?php
        include '../model/post.php';
        ?>

    </div>

</main>