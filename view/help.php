<?php
session_start(); 
if (isset($_SESSION['loggedin'])) {
    $_SESSION['adminLoggedIn'] = false;
    $_SESSION['myAccount'] = false;
}
elseif (isset($_SESSION['adminLoggedIn'])) {
    $_SESSION['myAccount'] = false;
    $_SESSION['loggedin'] = false;
}
else {
    $_SESSION['adminLoggedIn'] = false;
    $_SESSION['myAccount'] = false;
    $_SESSION['loggedin'] = false;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Help</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />

  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.css" rel="stylesheet" />

  <!-- CSS Stylesheet -->
  <link rel="stylesheet" href="../style/style.css">
  <link rel="stylesheet" href="../style/cookies.css">
  <link rel="stylesheet" href="../style/footerPage.css">
  <link rel="stylesheet" href="../style/header.css">
  <link rel="stylesheet" href="../style/homepage.css">

  <!-- Javascript -->
  <script src="../script/cookies.js"></script>
</head>

<body>
  <!-- Header of the site -->
  <?php include_once "../inc/header.php" ?>

  <main id="faq">
    <!--Section: FAQ-->
    <h1 class="text-center mb-4 pb-2 fw-bold">FAQ</h1>
    <p class="text-center mb-5">
      Find the answers for the most frequently asked questions below
    </p>

    <div class="row">
      <div class="col-md-6 col-lg-4 mb-4">
        <h6 class="mb-3"><i class="far fa-paper-plane pe-2"></i> How do I sign up?
        </h6>
        <p>
          You can sign up by creating an account with your
          email, a password (between 8 and 20 characters long with no special characters
          allowed), and your user name
        </p>
      </div>
      <div class="col-md-6 col-lg-4 mb-4">
        <h6 class="mb-3"><i class="fas fa-pen-alt pe-2"></i> Is InstaKilogram a paid app?
        </h6>
        <p>
          <strong><u>Nope!</u></strong> InstaKilogram is completely free! <a href='#'>Sign up here</a> to enjoy
          InstaKilogram completely free!
        </p>
      </div>

      <div class="col-md-6 col-lg-4 mb-4">
        <h6 class="mb-3"><i class="fas fa-user pe-2"></i> Where can I change my profile
          image?
        </h6>
        <p>
          You can change your profile image by choosing Settings -> My Account </p>
      </div>


      <div class="col-md-6 col-lg-4 mb-4">
        <h6 class="mb-3"><i class="fas fa-rocket pe-2"></i> What is the requirement of the
          password?
        </h6>
        <p>
          Password must be from 8 to 20 characters. Each password must contain at least 1 lower case letter, at least
          1 upper case letter, at least 1 digit
        </p>
      </div>

      <div class="col-md-6 col-lg-4 mb-4">
        <h6 class="mb-3"><i class="fas fa-home pe-2"></i> Why do I receive errors when
          changing the profile image?</h6>
        <p> Please check that your image extensions are in the following formats: jpg/jpeg, png, and gif.</p>
      </div>

      <div class="col-md-6 col-lg-4 mb-4">
        <h6 class="mb-3"><i class="fas fa-book-open pe-2"></i>How could I like or share a
          posts?</h6>
        <p>
          Unfortunately these features are not yet ready. Please wait for a later update once we get an HD from the
          course!:) </p>
      </div>
    </div>
    </div>
    </div>
  </main>
  <!-- Footer -->
  <?php include_once "../inc/footer.php" ?>
</body>

</html>