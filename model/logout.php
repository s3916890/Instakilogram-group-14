<?php
    session_start();
    // destroy all the session and go back to the homepage
    session_destroy();
    // if (isset($_SESSION["loggedin"])) {
    //     unset($_SESSION['loggedin']);
    // }
    header('location:../www/index.php');
?>