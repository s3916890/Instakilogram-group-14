<?php
    class VerifyingPassword
    {
        private $fileName = "account.db";
        private $fileHandle;

        public function handleOpenFile()
        {
            $this->fileHandle = fopen($this->fileName, "a+");
        }
        public function getEmail()
        {
            return $_POST["email"];
        }
        public function getPassword()
        {
            return $_POST["password"];
        }
        // This function's purpose existence is the process of verifying the password
        public function handleVerifyingPassword()
        {
            $userLoginDatabase = array(
                'email' => $this->getEmail(),
                'password' => $this->getPassword(),
            );            
            if (isset($_POST["submit"])){
                $getUserRegisterDatabase = file_get_contents("account.db");
                $decodingUserRegisterDatabase = json_decode($getUserRegisterDatabase);
                $currentPasswordDatabase = array();
                
                foreach($decodingUserRegisterDatabase as $userRegisterValue){
                    array_push($currentPasswordDatabase, $userRegisterValue->password);
                }
                foreach($currentPasswordDatabase as $passwordValue){
                    if(password_verify($userLoginDatabase["password"], $passwordValue)){
                        echo("Password Valid :3");
                        header("Location: ../homepage.php"); 
                    }
                    else{
                        echo("Password Invalid :3");
                        continue;
                    }
                }
            }
        }
        public function handleCloseFile()
        {
            fclose($this->fileHandle);
        }
    }
?>
<?php
    $runDatabase = new VerifyingPassword;

    $runDatabase->handleOpenFile();
    $runDatabase->handleVerifyingPassword();
    $runDatabase->handleCloseFile();
?>
