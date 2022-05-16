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
                <img src='../assets/FormBackgroundImage(Register).png' style="width: 100%; height: 100%;" alt="Form Background Image" />
            </div>

            <!-- REGISTER FORM -->
            <div class="forms">
                <form action="../model/signup.php" method="POST" class="form" id="register-form" enctype='multipart/form-data'>
                    <h3 class="heading">SIGN UP</h3>
                    <p class="desc">To join the Instakilogram, please fill out the registeration form.</p>
                    <div class="spacer"></div>
                    <div class="form-container">
                        <!-- USER NAME -->
                        <div class="form-group">
                            <label for="userName" class="form-label">Username</label>
                            <input id="userName" rules="required" name="userName" type="text" placeholder="karma.2710" class="form-control">
                            <span class="form-message"></span>
                        </div>
                        <!-- FIRST NAME AND LAST NAME -->
                        <div class="form-group">
                            <!-- FIRST NAME -->
                            <label for="firstName" class="form-label">First name</label>
                            <input id="firstName" rules="required|min:2|max:20" name="firstName" type="text" placeholder="Ex: Karma" class="form-control">
                            <span class="form-message"></span>
                        </div>
                        <!-- LAST NAME -->
                        <div class="form-group">
                            <label for="lastName" class="form-label">Last name</label>
                            <input id="lastName" rules="required|min:2|max:20" name="lastName" type="text" placeholder="Ex: Nguyen" class="form-control">
                            <span class="form-message"></span>
                        </div>
                        <!-- EMAIL ADDRESS -->
                        <div class="form-group">
                            <label for="email" class="form-label">Email Address</label>
                            <input id="email" rules="required|email" name="email" type="text" placeholder="Example: email@domain.com" class="form-control">
                            <span class="form-message"></span>
                        </div>
                        <!-- PASSWORD -->
                        <div class="form-group">
                            <label for="password" class="form-label">Password</label>
                            <input id="password" rules="required|min:8|max:20|regexPassword" name="password" type="password" placeholder="Enter the password" class="form-control">
                            <span class="form-message"></span>
                        </div>
                        <!-- RETYPE PASSWORD -->
                        <div class="form-group">
                            <label for="password_confirmation" class="form-label">Retype Password</label>
                            <input id="password_confirmation" rules="required|isConfirmed" name="password_confirmation" placeholder="Confirm the password" type="password" class="form-control">
                            <span class="form-message"></span>
                        </div>
                        <!-- PROFILE PICTURE -->
                        <div class="form-group">
                            <label for="avatar" class="form-label">Profile Picture</label>
                            <input id="avatar" name="avatar" rules="required|isImage" type="file" class="form-control" placeholder="Profile Picture">
                            <span class="form-message"></span>
                        </div>
                    </div>
                    <input type="submit" class="form-submit" name="submit"></input>
                    <input type="reset" class="form-clear" name="clear"></input>
                </form>
            </div>
        </main>

        <!-- JAVASCRIPT -->
        <script src="../script/signup.js"></script>
        <script>
            FormValidator('#register-form', {
                onSubmit: function(data) {}
            });
        </script>
    </body>

</html>