<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
     let fetches = fetch("../database/post.db");
     fetches
        .then(res => res.json())
        .then(data => {
            for (let i = 0; i < data.length; i++){
                console.log(data[i]["postID"])
            }
        })
    </script>

</head>

<body>
    <form method="post" action="../model/adminLogin.php">
        Username <input type="text" name="admin-account"><br>
        Password <input type="password" name="admin-password"><br>
        <input type="submit" name="act" value="Login">
    </form>
</body>

</html>