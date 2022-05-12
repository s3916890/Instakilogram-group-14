<?php
session_start();
if (isset($_POST["submit"])) {
    // store user's input data 
    $userName = $_POST["user_name"];
    $pass = $_POST["user_password"];
    // Validate user input information
        if ($userName === 'adminName' and $pass === 'admin@123') {
            $_SESSION["loggedin"] = true;
            $_SESSION["userName"] = $userName;
            $_SESSION["password"] = $pass;
            header("location:adminHomepage.php");
            setcookie("userID", $userName, time() + 3600, "/");
        } else {
        // Reload the page if the email or the password is incorrect
            header("location:adminLogin.php");
        }
}
?>
