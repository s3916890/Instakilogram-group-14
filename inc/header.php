<header id="header-section">
    <nav>
        <div class="header-logo">
            <?php
            if ($_SESSION['loggedin']) { ?>
                <?php $logoLink = 'homepage.php' ?>
            <?php } elseif ($_SESSION['adminLoggedIn']) { ?>
                <?php $logoLink = 'adminPage.php' ?>
            <?php } else { ?>
                <?php $logoLink = '../www/index.php' ?>
            <?php }
            ?>

            <a href=" <?php echo $logoLink ?>">
                <h1>InstaKilogram</h1>
            </a>
        </div>
        <div class="search-bar">
            <input type="text" placeholder="Search InstaKilogram..." class="searchInput">
            <button id="search-btn" type="submit"><i class="icon-style fa-lg fa-solid fa-magnifying-glass"></i></button>
        </div>
        <?php
        if ($_SESSION['loggedin']) { ?>
            <?php include('loggedInBlock.php') ?>
        <?php } elseif ($_SESSION['adminLoggedIn']) {

        }
         else { ?>
            <?php include('signupBlock.php') ?>
        <?php }
        ?>

    </nav>
</header>