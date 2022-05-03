<?php
    class VerifyingPassword
    {
        private $fileName = "account.db";
        private $fileHandle;

        public function getUserName(){
            return $_POST["userName"];
        }
        public function getFirstName(){
            return $_POST["firstName"];
        }
        public function getLastName()
        {
            return $_POST["lastName"];
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
                'userName' => $this->getUserName(),
                'firstName' => $this->getFirstName(),
                'lastName' => $this->getLastName(),
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
                        include "../myAccount.php";
                    }
                    else{
                        continue;
                    }
                }
            }
        }
    }
?>
<?php
    $runDatabase = new VerifyingPassword;
    $runDatabase->handleVerifyingPassword();
?>
