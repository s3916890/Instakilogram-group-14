<header id="header-section">
    <nav>
        <div class="header-logo">
            <?php
            if (isset($_SESSION['loggedin'])) {
                if ($_SESSION['loggedin']) { ?>
                    <?php $logoLink = 'homepage.php' ?>
                <?php } 
                if ($_SESSION['adminLoggedIn']) { ?>
                    <?php $logoLink = 'adminPage.php' ?>
                <?php }
            } else { ?>
                <?php $logoLink = '../www/index.php' ?>
            <?php }
            ?>
            <a href=" <?php echo $logoLink ?>">
                <h1>InstaKilogram</h1>
            </a>
        </div>
        <?php
        
        if (isset($_SESSION['loggedin'])) {
            if ($_SESSION['loggedin']) { ?>
                <?php include('headerCore.php') ?>
            <?php } 
            if ($_SESSION['adminLoggedIn']) { ?>
                <?php include('adminHeader.php') ?>
            <?php }
        } else { ?>
            <?php include('signupBlock.php') ?>
        <?php }
        ?>
    </nav>
</header>