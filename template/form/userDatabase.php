<?php
    class UserInputDatabase
    {
        private $fileName = "account.db";
        private $fileHandle;

        public function handleOpenFile()
        {
            $this->fileHandle = fopen($this->fileName, "a+");
        }
        // Get all input value of users
        public function getUserName()
        {
            return $_POST["userName"];
        }
        public function getFirstName()
        {
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
            $harshPassword = password_hash($_POST["password"], PASSWORD_DEFAULT);
            return $harshPassword;
        }
        public function getProfileLink()
        {
            return $_POST["avatar"];
        }
        // This function's purpose existence is the process of reading and writing the File 
        public function handleReadAndWriteFile()
        {;
            $userDatabase = array(
                'userName' => $this->getUserName(),
                'firstName' => $this->getFirstName(),
                'lastName' => $this->getLastName(),
                'email' => $this->getEmail(),
                'password' => $this->getPassword(),
                'avatar' => $this->getProfileLink()
            );

            if (isset($_POST["submit"])) {
                $allowedExtension = array("jpg", "jpeg", "png", "gif");
                $fileUploadExtension = pathinfo($userDatabase["avatar"], PATHINFO_EXTENSION);
                // If the extension of file upload is not proper, the executing will immediately exit to the statement. 
                if (in_array($fileUploadExtension, $allowedExtension)) {
                    if (filesize($this->fileName) == 0) {
                        $firstStorageRecord = array($userDatabase);
                        $dataToSaveDatabase = $firstStorageRecord;
                    } 
                    else {
                        $getUserDatabase = file_get_contents($this->fileName);
                        $oldUserDatabase = json_decode($getUserDatabase);
                        $currentEmailInFileDb = array();
                        foreach($oldUserDatabase as $userInputObject){
                            array_push($currentEmailInFileDb, $userInputObject->email);                    
                        }
                        /** CHECK DUPLICATION EMAIL PROCESS */
                        if (!in_array($userDatabase["email"], $currentEmailInFileDb)){
                            array_push($oldUserDatabase, $userDatabase);
                        }
                        $dataToSaveDatabase = $oldUserDatabase;
                    }
                    // PUT CONTENT TO THE FILE
                    if (!file_put_contents($this->fileName, json_encode($dataToSaveDatabase, JSON_PRETTY_PRINT), LOCK_EX)) {
                        $preventDuplication = "Error, there is duplication of email value";
                        echo $preventDuplication;
                    } 
                    else {
                        $success = "Successfully, there is no duplication of email value";
                        echo $success;
                    }
                }
            }
        }

        public function finishProcess()
        {
            fclose($this->fileHandle);
        }
    }
?>
<?php
    $runDatabase = new UserInputDatabase;

    $runDatabase->handleOpenFile();
    $runDatabase->handleReadAndWriteFile();
    $runDatabase->finishProcess();
    
?>
