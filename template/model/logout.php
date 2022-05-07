<?php
// session_destroy();
if (isset($_SESSION["loggedin"])) {
    unset($_SESSION['loggedin']);
}
header('location:../../www/index.php');
?>