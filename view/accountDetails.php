<?php
session_start();
if (!isset($_SESSION['adminLoggedIn'])) {
    header('location: AdminLogin.php');
}
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
        if (preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&\*])[a-zA-Z0-9!@#$%^&\*]{8,20}$/", $pass)) {
            for ($i = 0; $i < count($accounts); $i++) {
                $temp = $accounts[$i]->password;
                if ($accountID == $accounts[$i]->userID) {
                    $temp = $pass;
                    $accounts[$i]->password = password_hash($temp, PASSWORD_DEFAULT);
                    echo 'sucessfully saved';
                }
            }
        } else {
            echo 'failed';
        }
    }
    file_put_contents('../database/account.db', json_encode($accounts));
}
$getDatabase = file_get_contents("../database/account.db");
$accounts = json_decode($getDatabase);
// echo $accountID;
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
        <!-- Main section -->
        <?php include "accountMain.php" ?>

        <!-- Footer -->
        <?php include_once "../inc/footer.php" ?>


    </div>

</body>

</html>