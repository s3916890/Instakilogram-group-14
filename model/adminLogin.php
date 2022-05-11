<?php
  session_start();

  if (isset($_POST['act'])) {
    if ($_POST['admin-account'] == 'admin@mail.com' && $_POST['admin-password'] == 'Admin123') {
      $_SESSION['adminLoggedIn'] = true;
      header('location: ../view/adminPage.php');
    } else {
      $error = 'Invalid username/password';
    }
  }
?>