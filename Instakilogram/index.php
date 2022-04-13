<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/animation.css">
    <link rel="stylesheet" href="./assets/responsive.css">
    <link rel="stylesheet" href="./assets/style.css">
    <title>Instakilogram</title>
</head>

<body>
    <main class="container">
        <div class="formBackgroundImage">
            <!-- BACKGROUND IMAGE -->
            <?php
            function img_create($filename, $image_type)
            {
                $content = file_get_contents($filename);
                $base64  = base64_encode($content);
                return ('data:' . $image_type . ';base64,' . $base64);
            }
            ?>
            <img src="<?php print img_create('./assets/Demo Instakilogram Design/FormBackgroundImage.png', 'image/png'); ?>" style="width: 100%; height: 100%;" alt="Form Background Image" />
        </div>

        <!-- REGISTER FORM -->
        <div class="formRegister">
            <form action="" method="POST" class="form" id="register-form">
                <h3 class="heading">SIGN UP</h3>
                <p class="desc">To join the Instakilogram, please fill out the registeration form.</p>
                <div class="spacer"></div>
                <div class="form-container">
                    <div class="form-group">
                        <!-- SEPARATE THE FIRST AND LAST NAME -->
                        <div class="sub-form-group">
                            <!-- FIRST NAME -->
                            <div class="sub-form-group-input">
                                <label for="firstName" class="sub-form-label">First name</label>
                                <input id="firstName" rules="required|min:2|max:20" name="firstName" type="text" placeholder="Ex: Karma" class="form-control">
                            </div>
                            <!-- LAST NAME -->
                            <div class="sub-form-group-input">
                                <label for="lastName" class="sub-form-label">Last name</label>
                                <input id="lastName" rules="required|min:2|max:20" name="lastName" type="text" placeholder="Ex: Nguyen" class="form-control">
                            </div>
                        </div>
                        <span class="form-message invalid"></span>
                    </div>

                    <div class="form-group">
                        <label for="email" class="form-label">Email Address</label>
                        <input id="email" rules="required|email" name="email" type="text" placeholder="Example: email@domain.com" class="form-control">
                        <span class="form-message"></span>
                    </div>

                    <div class="form-group">
                        <label for="password" class="form-label">Password</label>
                        <input id="password" rules="required|min:8|max:20|regexPassword" name="password" type="password" placeholder="Enter the password" class="form-control">
                        <span class="form-message"></span>
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation" class="form-label">Retype Password</label>
                        <input id="password_confirmation" rules="required|isConfirmed" name="password_confirmation" placeholder="Confirm the password" type="password" class="form-control">
                        <span class="form-message"></span>
                    </div>

                    <div class="form-group">
                        <label for="avatar" class="form-label">Profile Picture</label>
                        <input id="avatar" name="avatar" rules="required|isImage" type="file" class="form-control" placeholder="Profile Picture">
                        <span class="form-message"></span>
                    </div>
                </div>
                <button class="form-submit">Register</button>
                <button class="form-clear">Clear</button>
            </form>
        </div>
    </main>
    <!-- JAVASCRIPT -->
    <script src="./assets/app.js"></script>
    <!-- <script src="./assets/file.js"></script> -->
    <script>
        FormValidator('#register-form', {
            onSubmit: function(data) {
                console.log(data);
            }
        });
    </script>
</body>

</html>
