<!-- Main content section -->
<!-- CONTENT ROW -->
<script src="../script/resetPass.js"></script>
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

            <form class="change-avatar" method="POST" action='../view/resetPass.php'>
            <button>Click me</button>
            </form>
        </div>

    </div>
    <h1><?php echo($_SESSION["userName"])?></h1>
    <?php
        include '../model/resetPass.php';
        ?>
    <div class="post-content">
        <?php
        include '../model/post.php';
        ?>

    </div>

</main>