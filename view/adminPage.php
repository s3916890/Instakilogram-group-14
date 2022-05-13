<?php
header('Cache-Control: no cache'); 
session_cache_limiter('private_no_expire'); 
session_start();
if (!isset($_SESSION['adminLoggedIn'])) {
    header('location: AdminLogin.php');
}
$_SESSION['myAccount'] = false;
$_SESSION['userID'] = false;

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
    <link rel="stylesheet" href="../style/footer.css">

    <title>Admin Page</title>
</head>

<body>
    <div class="homepage-container">

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
        <!-- Footer -->
        <?php include_once "../inc/footer.php" ?>
    </div>

    <script src="../script/pagination.js"></script>
    <script>
        <?php include "../model/listUserAccount.php" ?>
        <?php $fullUserInfo = $_SESSION["fullUserInfo"] ?>
        let listAccounts = new Array();

        <?php foreach ($_SESSION["fullUserInfo"] as $userKey => $userValue) { ?>
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