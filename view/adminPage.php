<?php
    session_start();
    if (!isset($_SESSION['adminLoggedIn'])) {
        header('location: AdminLogin.php');
    }
    $_SESSION['adminPage'] = true;

?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://use.fontawesome.com/releases/v6.1.1/js/all.js" data-auto-replace-svg="nest"></script>

        <!-- Stylesheet CSS -->
        <link rel="stylesheet" href="../style/style.css">
        <link rel="stylesheet" href="../style/cookies.css">
        <link rel="stylesheet" href="../style/header.css">
        <link rel="stylesheet" href="../style/homepage.css">
        <link rel="stylesheet" href="../style/pagination.css">
        <link rel="stylesheet" href="../style/adminPageHeader.css">

        <!-- Javascript -->
        <script src="../script/cookies.js"></script>
        <title>Admin Page</title>
    </head>

    <body>
        <div class="homepage-container">
            <!-- Header of the site -->
            <header><?php include_once "../inc/searchBar.php" ?></header>
            <!-- Main content section -->
            <!-- CONTENT ROW -->
            <main class="main-section">
                <div class="list" id="list"></div>
                <div class="pageNumbers" id="pagination"></div>
                <div class="post-content">
                    <?php
                    include '../model/post.php';
                    ?>
                </div>
            </main>
        </div>

        <script src="../script/pagination.js"></script>
        <script>
            let listAccounts = new Array();
            <?php include_once "../model/listUserAccount.php" ?>

            <?php foreach ($_SESSION["listUserAccounts"] as $userKey => $userValue) { ?>
                listAccounts.push("<?php echo $userValue; ?>");
            <?php } ?>

            const listElement = $("#list");
            const paginationElement = $("#pagination");

            let currentPage = 1,
                rows = 5;

            displayList(listAccounts, listElement, rows, currentPage);
            setupPagination(listAccounts, paginationElement, rows);
        </script>
    </body>

</html>