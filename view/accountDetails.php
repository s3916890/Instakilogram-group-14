<?php
    session_start();
    if (!isset($_SESSION['adminLoggedIn'])) {
        header('location: AdminLogin.php');
    }
    $_SESSION['myAccount'] = false;
    $_SESSION['loggedin'] = false;
    $_SESSION['adminPage'] = false;
    $_SESSION['accountDetail'] = true;

    $accountID = $_GET['accountID'];
    $_SESSION['accountID'] = $accountID;
    // echo $_SESSION['accountID'];
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

    // Reset the password
    if (isset($_POST["resetPass"])) {
        $pass = $_POST["newPass"];
        if ($accounts != null) {
            if (preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/", $pass)) {
                for ($i = 0; $i < count($accounts); $i++) {
                    $temp = $accounts[$i]->password;
                    if ($accountID == $accounts[$i]->userID) {
                        $temp = $pass;
                        $accounts[$i]->password = password_hash($temp, PASSWORD_DEFAULT);
                        echo 'Successfully saved';
                    }
                }
            } else {
                echo 'failed';
            }
        }
        file_put_contents('../database/account.db', json_encode($accounts));
    }
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
          <!-- Stylesheet CSS -->
        <link rel="stylesheet" href="../style/style.css">
        <link rel="stylesheet" href="../style/cookies.css">
        <link rel="stylesheet" href="../style/homepage.css">
        <link rel="stylesheet" href="../style/pagination.css">
        <link rel="stylesheet" href="../style/adminPageHeader.css">

        <title>Instakilogram</title>
        <!-- Javascript -->
        <script src="../script/cookies.js"></script>
    </head>

    <body>
    <header><?php include_once "../inc/searchBar.php" ?></header>
        <div class="homepage-container">
            <!-- Main section -->
            <?php include "accountMain.php" ?>
        </div>

    </body>

</html>