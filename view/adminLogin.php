<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <!-- Stylesheet CSS -->
    <link rel="stylesheet" href="../style/animation.css">
    <link rel="stylesheet" href="../style/responsive.css">
    <link rel="stylesheet" href="../style/form.css">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/cookies.css">

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

