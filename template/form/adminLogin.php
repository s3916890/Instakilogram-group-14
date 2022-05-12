
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