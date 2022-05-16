<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Instakilogram</title>

        <!-- Stylesheet CSS -->
        <link rel="stylesheet" href="../style/form.css">
        <link rel="stylesheet" href="../style/style.css">

    </head>

    <body>
        <main class="form-containers">
            <div class="formBackgroundImage">
                <!-- BACKGROUND IMAGE -->
                <img src="../assets/FormBackgroundImage(Login).png" style="width: 100%; height: 100%;" alt="Form Background Image" />
            </div>

            <!-- LOGIN FORM -->
            <div class="forms">
                <form action="../model/login.php" method="POST" class="form" id="login-form">
                    <h3 class="heading">LOG IN</h3>
                    <p class="desc">To log in the account, please fill out the form below.</p>
                    <div class="spacer"></div>
                    <div class="form-container">
                        <!-- EMAIL -->
                        <div class="form-group">
                            <label for="email" class="form-label">Email Address</label>
                            <input id="mail" name="user_email" type="text" placeholder="Enter the email" class="form-control">
                            <span class="form-message"></span>
                        </div>

                        <!-- PASSWORD -->
                        <div class="form-group">
                            <label for="password" class="form-label">Password</label>
                            <input id="current-password" name="user_password" type="password" placeholder="Enter the password" class="form-control">
                            <span class="form-message"></span>
                        </div>
                    </div>

                    <input type="submit" class="form-submit" name="submit"></input>

                    <a href="signup.php">
                        <p class="desc">Don't have an account? Register a new one</p>
                    </a>
                </form>
            </div>
        </main>

    </body>

</html>