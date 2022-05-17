<div class="avatar-container dropdown">
    <div class="user">
        <div class="profile-pic">
            <?php
            if (isset($_SESSION['avatar'])) {
            ?>
                <img src="<?php echo '../../database/userAvatar/' . $_SESSION['avatar']; ?>" class="avatar" alt="Avatar">
            <?php
            }
            ?>
        </div>
    </div>
    <div class="account-field">
        <button class="drop-btn">My Account</button>
        <div class="dropdown-content">
            <a href="myAccount.php">
                <div class="dropdown-container">
                    <i class="fa-solid fa-user"></i>
                    My profile
                </div>
            </a>
            <a href="../model/logout.php">Log Out</a>
        </div>
    </div>
</div>