<?php
session_start();
$getDatabase = file_get_contents("../database/admin_login.db");
$decodeDatabase = json_decode($getDatabase);

if (isset($_POST["submit"])) {
    $email = $_POST["user_email"];
    $pass = $_POST["user_password"];
    $loginValidate = false;
    
    // Find the matching email and password
    for ($i = 0; $i < count($decodeDatabase); $i++) {
        // Go to homepage if the email and password are correct
        if ( strtolower($email) === strtolower($decodeDatabase[$i]->email) and password_verify($pass, $decodeDatabase[$i]->password)) {
            $_SESSION["loggedin"] = true;
            $_SESSION["userName"] = $decodeDatabase[$i]->userName;
            $_SESSION["password"] = $decodeDatabase[$i]->password;
            header("location:../view/admin_homepage.php");
            die();
        } else {
        // Reload the page if the email or the password is incorrect
            header("Location:../view/admin_login.php");
        }
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
    <form method="POST" action='Admin_Login.html'>
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