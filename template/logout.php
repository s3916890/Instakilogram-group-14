<?php
    if(isset($_COOKIE["userID"])){
        session_start();
        session_destroy();
        setcookie("userID", "", time() - 3600, "/");
        header("location: ../www/index.php");
    }
?>