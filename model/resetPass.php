<?php 
session_start();
$userName = $_SESSION['userName']; 
$getDatabase = file_get_contents("../database/account.db");
$decodeDatabase = json_decode($getDatabase);



if (isset($_POST["submit"])) {
    $pass = password_hash($_POST["password"], PASSWORD_DEFAULT);
    if ($decodeDatabase != null) {
        // Find the matching email and password
        for ($i = 0; $i < count($decodeDatabase); $i++) {
            $temp = $decodeDatabase[$i]->password;
            // Go to homepage if the email and password are correct
            if ($userName == $decodeDatabase[$i]->userName) {
                $temp = $pass;  
            } 
            }
        }
        file_put_contents("../database/account.db", json_encode($post));
    }
    
