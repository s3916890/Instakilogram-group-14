<?php 
session_start();
$userName = $_SESSION['userName']; 
$getDatabase = file_get_contents("../database/account.db");
$decodeDatabase = json_decode($getDatabase);



if (isset($_POST["submit"])) {
    $before_pass = $_POST["Confirm_Password"];
    $pass = password_hash($_POST["Confirm_Password"], PASSWORD_DEFAULT);
    echo('hello'); 
    echo($before_pass); 
    echo($pass); 
    if ($decodeDatabase != null) {
        for ($i = 0; $i < count($decodeDatabase); $i++) {
            $temp = $decodeDatabase[$i]->password;
            if ($userName == $decodeDatabase[$i]->userName) {
                $temp = $pass;  
            } 
            }
            header('location:../view/adminPage.php'); 
        }
        header('location:../view/adminPage.php'); 
    }
