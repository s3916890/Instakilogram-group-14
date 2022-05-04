<?php
    session_start();
    echo "User name " . $_SESSION["userName"];
    echo "First name " . $_SESSION["firstName"];
    echo "Last name " . $_SESSION["lastName"];

    if (isset($_COOKIE["email"]) and isset($_COOKIE["password"])){
        $email = $_COOKIE["email"];
        $password = $_COOKIE["password"];
        
        echo "Email: " . $email;
        echo "Password: " . $password;
    }

?>
