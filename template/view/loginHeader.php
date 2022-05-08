<header id="header">
    <nav>
        <div class="header-logo">
            <a href="homepage.php">
                <h1>InstaKilogram</h1>
            </a>
        </div>
        <div class="searchBar">
            <input type="text" placeholder="Search InstaKilogram..." class="searchInput">
            <button id="search-btn" type="submit"><i class="icon-style fa-lg fa-solid fa-magnifying-glass"></i></button>
        </div>

        <div class="avatar-container dropdown">
            <div class="user">
                <div class="profile-pic">
                    <?php
                    if (isset($_SESSION['avatar'])) {
                    ?>
                        <img src="<?php echo '../../assets/userAvatar/' . $_SESSION['avatar']; ?>" class="avatar" alt="Avatar">
                    <?php
                    }
                    ?>
                </div>
            </div>
            <div class="account-field">
                <button class="dropBtn">My Account</button>
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
    </nav>
</header>