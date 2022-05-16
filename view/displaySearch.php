<?php
session_start();
$_SESSION['myAccount'] = false;
$_SESSION['userID'] = false;


if (!isset($_SESSION['adminLoggedIn'])) {
    header('location: AdminLogin.php');
}
?>
<?php 
$data = '../database/searchAccount.db';

    if (array_key_exists('search-submit', $_GET)) {
        $json = file_get_contents('../database/searchAccount.db');
        // decode json to associative array
        $json_arr = json_decode($json,true);
        if(filesize($data) == 0) {
            $json_arr[] = array();
        }
        else {
                    // get array index to delete
        $arr_index = array();
        foreach ($json_arr as $key => $value) {
                $arr_index[] = $key;
        }
        
        // delete data
        foreach ($arr_index as $i) {
            unset($json_arr[$i]);
        }
        
        // rebase array
        $json_arr = array_values($json_arr);
        
        // encode array to json and save to file
        file_put_contents('../database/searchAccount.db', json_encode($json_arr));  

        }
    }
?>
<?php include_once "../model/adminSearch.php" ?>


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

        <!-- Header of the site -->
        <header><?php include_once "../inc/searchBar.php"?></header>
        <!-- Main content section -->
        <!-- CONTENT ROW -->
        <main class="main-section">
            <div class="list" id="list"></div>
            <div class="pageNumbers" id="pagination"></div>
            <div class="post-content">
            </div>
        </main>
        <!-- Footer -->
        <?php include_once "../inc/footer.php" ?>
    </div>

    <script src="../script/pagination.js"></script>
    <script>
        let listAccounts = new Array();
        <?php include_once "../model/listUserSearch.php" ?>

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