<?php
session_start();
if (!isset($_SESSION['adminLoggedIn'])) {
    header('location: AdminLogin.php');
}
$accountID = $_GET['accountID'];
$fileName = "../database/account.db";
$accounts = json_decode(file_get_contents($fileName));

if ($accounts != null) {
    for ($i = 0; $i < count($accounts); $i++) {
        if ($accountID == $accounts[$i]->userID) {
            $_SESSION["userName"] = $accounts[$i]->userName;
            $_SESSION["firstName"] = $accounts[$i]->firstName;
            $_SESSION["lastName"] = $accounts[$i]->lastName;
            $_SESSION["email"] = $accounts[$i]->email;
            $_SESSION["avatar"] = $accounts[$i]->avatar;
        }
    }
};
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://use.fontawesome.com/releases/v6.1.1/js/all.js" data-auto-replace-svg="nest"></script>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/homepage.css">
    <link rel="stylesheet" href="../style/header.css">
    <link rel="stylesheet" href="../style/footer.css">

    <title>Instakilogram</title>
    <!-- Javascript -->
    <script src="../script/cookies.js"></script>
</head>

<body>
    <div class="homepage-container">
     <!-- Header of the site -->
     <header><?php include_once "../inc/adminHeader.php"?></header>
        <!-- Main section -->
        <?php include "accountMain.php" ?>

        <!-- Footer -->
        <?php include_once "../inc/footer.php" ?>


    </div>

</body>

</html>