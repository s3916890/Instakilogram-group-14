<?php include "./Instakilogram-group-14/template/userDatabase.php"?>

<?php
    class UserInputDatabase
    {
        private $fileName = "account.db";
        private $fileHandle;
        
        public function openFile(){
            $this->fileHandle = fopen($this->fileName, "a+");
        }
        // Get all input value of users
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
        // This function's purpose existence is the process of reading and writing the File 
        public function readAndWriteFileProcess(){
            $userDatabase = array(
                'firstName' => $this->getFirstName(),
                'lastName' => $this->getLastName(),
                'email' => $this->getEmail(),
                'password' => $this->getPassword(),
                'retypePassword' => $this->getRetypePassword(),
                'avatar' => $this->getProfileLink()
            );
            
            if (isset($_POST["submit"])){
                $allowedExtension = array("jpg", "jpeg", "png", "gif");
                $fileUploadExtension = pathinfo($userDatabase["avatar"], PATHINFO_EXTENSION);
                // If the extension of file upload is not proper, the executing will immediately exit to the statement. 
                if(in_array($fileUploadExtension, $allowedExtension)){
                    if(filesize($this->fileName) == 0){
                        $firstStorageRecord = array($userDatabase);
                        $dataToSaveDatabase = $firstStorageRecord;
                    }
                    else{
                        $getUserDatabase = file_get_contents($this->fileName);
                        $old_records = array_unique(json_decode($getUserDatabase));
                        /** CHECK DUPLICATION EMAIL PROCESS */
                        // Iterate the old database to compare the current email value and the email value in file "account.db"
                        foreach($old_records as $userInputObject){
                            if($userDatabase["email"] !== $userInputObject->email){
                                array_push($old_records, $userDatabase);
                            }
                        }
                        $dataToSaveDatabase = $old_records;
                    }
                    // PUT CONTENT TO THE FILE
                    if (!file_put_contents($this->fileName, json_encode($dataToSaveDatabase, JSON_PRETTY_PRINT), LOCK_EX)) {
                        $preventDuplication = "Error, there is duplication of email value";
                        echo $preventDuplication;
                    } 
                    else {
                        $success = "Successfully, there is sno duplication of email value";
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

    $runDatabase->openFile();
    $runDatabase->readAndWriteFileProcess();
    $runDatabase->finishProcess();
?>
