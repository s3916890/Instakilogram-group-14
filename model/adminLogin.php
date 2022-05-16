<?php
  session_start();
  $email = $_POST['admin-account'];
  if (isset($_POST['submit'])) {
    if (strtolower($email) == 'admin@gmail.com' && $_POST['admin-password'] == 'Admin123') {
      $_SESSION['adminLoggedIn'] = true;
      header('location: ../view/adminPage.php');
    } else {
      header('location: ../view/adminLogin.php');
    }
  }
?>