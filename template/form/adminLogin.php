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
            header("location:../adminHomepage.php");
            setcookie("userID", $userName, time() + 3600, "/");
        } else {
        // Reload the page if the email or the password is incorrect
            header("location:adminLogin.php");
            echo('Re-enter your login information');
        }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form method="POST" action='/Users/myluong/Desktop/Instakilogram-group-14/template/adminLogin.php'>
        <div class='form-row'>
            <div class='form-label' >
                <label for='user_name'>Enter your username:</label>
            </div>
            <div class='form-field'>
                <input required id="user_name" type="text" name="user_name" maxlength="50">
            </div>
        </div>
        <div class='form-row'>
            <div class='form-lable' >
                <label for='user_password'>Enter your password</lable>
            </div>
            <div class='form-field'>
                <input required id="user_password" type="password" name="user_password">
            </div>
        </div>
        <input type='submit' name='submit' value='login'>
    </form>
</body>
</html>