<?php
  session_start();

  if (isset($_POST['submit'])) {
    if ($_POST['admin-account'] == 'admin@gmail.com' && $_POST['admin-password'] == 'Admin123') {
      $_SESSION['adminLoggedIn'] = true;
      header('location: ../view/adminPage.php');
    } else {
      header('location: ../view/adminLogin.php');
    }
  }
?>