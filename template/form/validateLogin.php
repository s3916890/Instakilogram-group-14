<?php
    $getDatabase = file_get_contents("account.db");
    $decodeDatabase = json_decode($getDatabase);

    if (isset($_POST["submit"])) {
        $email = $_POST["email"];
        $pass = $_POST["password"];

        for ($i = 0; $i < count($decodeDatabase); $i++) {
            if ($email == $decodeDatabase[$i]->email and password_verify($pass, $decodeDatabase[$i]->password)){
                session_start();
                $_SESSION["userName"] = $decodeDatabase[$i]->userName;
                $_SESSION["firstName"] = $decodeDatabase[$i]->firstName;
                $_SESSION["lastName"] = $decodeDatabase[$i]->lastName;
                $_SESSION["email"] = $email;
                $_SESSION["password"] = $hashPass;
                
                $imageValue = $decodeDatabase[$i]->avatar;
                
                // Image path
                $img = '../assets/';
                
                // Save image 
                file_put_contents($img, file_get_contents($imageValue));
                $_SESSION["avatar"] = "../assets/$imageValue";
                header("location: ../myAccount.php");
            } 
            else {
                echo "PASSWORD INVALID";
            }
        }
    }
?>