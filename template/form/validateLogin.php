<?php
    $getDatabase = file_get_contents("account.db");
    $decodeDatabase = json_decode($getDatabase);


    if (isset($_POST["submit"])) {
        $email = $_POST["email"];
        $pass = $_POST["password"];

        
        for ($i = 0; $i < count($decodeDatabase); $i++) {
            if ($email == $decodeDatabase[$i]->email and password_verify($pass, $decodeDatabase[$i]->password)){
                if(isset($_POST["remember"])){
                    setcookie("userID", $decodeDatabase[$i]->userID, time() + 3600, "/");
                    header("location: ../homepage.php");
                }    
                session_start();
                $_SESSION["userName"] = $decodeDatabase[$i]->userName;
                $_SESSION["firstName"] = $decodeDatabase[$i]->firstName;
                $_SESSION["lastName"] = $decodeDatabase[$i]->lastName;
                $_SESSION["email"] = $email;

                header("location: ../homepage.php");
            } 
            else {
                echo "PASSWORD INVALID";
            }
        }
    }
?>