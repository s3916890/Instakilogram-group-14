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
        <?php
        if ($_SESSION['loggedin']) { ?>
            <?php include('../inc/headerCore.php'); 
            include ('../inc/loggedInBlock.php') ?>
        <?php } elseif ($_SESSION['adminLoggedIn']) { ?>
            <?php include('../inc/adminHeader.php'); 
             include('../inc/loggedInBlock.php') ?>
        <?php } else { ?>
            <?php include('../inc/signupBlock.php') ?>
        <?php }
        ?>

    </nav>
</header>