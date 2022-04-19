<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result Appending</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            background-color: #F5F8FB;
        }

        p {
            font-family: 'Poppins', sans-serif;
            font-size: 36px;
            font-weight: bold;
            position: absolute;
            top: -100%;
            right: 50%;
            transform: translate(50%, -50%);
            animation: slideTop 1s forwards;
            animation-delay: 0.1s;
        }

        span {
            color: #9900F0;
        }

        @keyframes slideTop {

            to {
                opacity: 100%;
                top: 50%;
            }
        }
    </style>
</head>

<body>
    <?php
    /**  USER DATABASE */
    class UserDatabase
    {
        public function getFirstName(){
            return $_POST["firstName"];
        }
        public function getLastName(){
            return $_POST["lastName"];
        }
        public function getEmail(){
            return $_POST["email"];
        }
        public function getPassword(){
            return $_POST["password"];
        }
        public function getRetypePassword(){
            return $_POST["password_confirmation"];
        }
        public function getProfileLink(){
            return $_POST["avatar"];
        }
        public function databaseAccount(){
            $newArr = array(
                'First name' => $this->getFirstName(),
                'Last name' => $this->getLastName(),
                'Email' => $this->getEmail(),
                'Password' => $this->getPassword(),
                'Retype Password' => $this->getRetypePassword(),
                'Avatar' => $this->getProfileLink(),
            );
            // CONVERT TO THE NEW ARRAY TO CONVERT JSON 
            $final_data = json_encode($newArr, JSON_PRETTY_PRINT);
            // If not file is there then automatic create and write inside it.
            $file = 'account.db';
            $current = file_get_contents($file);
            $current .= $final_data;
            // Append the contents back to the file
            file_put_contents($file, $current);
            // Check successfully or unsuccessfully append to file txt
            if (file_put_contents($file, $current)) {
                echo "<p>Successfully appended to <span>account</span>.txt</p>";
            } 
            else {
                echo "<p>Unsuccessfully appended to <span>account</span>.txt</p>";
            }
        }
    }
    ?>
    <?php
    $user = new UserDatabase();
    $user->databaseAccount();
    ?>
</body>

</html>
