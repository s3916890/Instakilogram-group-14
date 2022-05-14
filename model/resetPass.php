<?php 
session_start();
$userName = $_SESSION['userName']; 
$getDatabase = file_get_contents("../database/account.db");
$decodeDatabase = json_decode($getDatabase);

if (isset($_POST["submit"])) {
    $before_pass = $_POST["Confirm_Password"];
    $pass = password_hash($_POST["Confirm_Password"], PASSWORD_DEFAULT);
    if ($decodeDatabase != null) {
        for ($i = 0; $i < count($decodeDatabase); $i++) {
            $temp = $decodeDatabase[$i]->password;
            if ($userName == $decodeDatabase[$i]->userName) {
                $temp = $pass;
                $decodeDatabase[$i]->password = $temp;
            }
            }
        }
        file_put_contents('../database/account.db', json_encode($decodeDatabase));
    }
    $getDatabase = file_get_contents("../database/account.db");
    $decodeDatabase = json_decode($getDatabase);

?>

