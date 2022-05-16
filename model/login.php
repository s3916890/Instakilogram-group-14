<?php
    session_start();
    $getDatabase = file_get_contents("../database/account.db");
    $decodeDatabase = json_decode($getDatabase);

    if (isset($_POST["submit"])) {
        $email = $_POST["user_email"];
        $pass = $_POST["user_password"];
        $loginValidate = false;
        if ($decodeDatabase != null) {
            // Find the matching email and password
            for ($i = 0; $i < count($decodeDatabase); $i++) {
                // Go to homepage if the email and password are correct
                if (strtolower($email) === strtolower($decodeDatabase[$i]->email) and password_verify($pass, $decodeDatabase[$i]->password)) {
                    $_SESSION["loggedin"] = true;
                    $_SESSION["userID"] = $decodeDatabase[$i]->userID;
                    $_SESSION["userName"] = $decodeDatabase[$i]->userName;
                    $_SESSION["firstName"] = $decodeDatabase[$i]->firstName;
                    $_SESSION["lastName"] = $decodeDatabase[$i]->lastName;
                    $_SESSION["email"] = $decodeDatabase[$i]->email;
                    $_SESSION["avatar"] = $decodeDatabase[$i]->avatar;
                    header("location:../view/homepage.php");
                    die();
                } else {
                    // Reload the page if the email or the password is incorrect
                    header("Location:../view/login.php");
                }
            }
        } else {
            header("Location:../view/login.php");
        }
    }
?>