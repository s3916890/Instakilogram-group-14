<<<<<<< HEAD:template/form/adminLogin.php

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form method="POST" action='validateAdmin.php'>
        <div class='form-row'>
            <div class='form-label' >
                <label for='user_name'>Enter your username:</label>
            </div>
            <div class='form-field'>
                <input required id="user_name" type="text" name="user_name" maxlength="50">
            </div>
        </div>
        <div class='form-row'>
            <div class='form-lable' >
                <label for='user_password'>Enter your password</lable>
            </div>
            <div class='form-field'>
                <input required id="user_password" type="password" name="user_password">
            </div>
        </div>
        <input type='submit' name='submit' value='login'>
    </form>
</body>
</html>
=======
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Login</title>

        <!-- Stylesheet CSS -->
        <link rel="stylesheet" href="../style/form.css">
    </head>

    <body>
    <div class="forms">
            <form method="post" action="../model/adminLogin.php" class="form">
            <div class="form-container">
                <!-- USERNAME -->
                <div class="form-group">
                    <label for="username" class="form-label">Admin Username</label>
                    <input id="userName" rules="required" name="admin-account" type="text" placeholder="Enter Admin's Username" class="form-control">
                    <span class="form-message"></span>
                </div>
                <!-- PASSWORD -->
                <div class="form-group">
                    <label for="password" class="form-label">Admin Password</label>
                    <input id="current-password" name="admin-password" type="password" placeholder="Enter the password" class="form-control">
                    <span class="form-message"></span>
                </div>
                <input type="submit" name="submit" value="Login" class="form-submit">
            </div>
            </form>
        </div>
    </div>
    </body>
</html>

>>>>>>> NewTri:view/adminLogin.php
