<?php
    /** USER DATABASE */
    class UserDatabase{
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
            if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                if ($this->getFirstName() != '' && $this->getLastName() != '' && $this->getEmail() != '' &&
                    $this->getPassword() != '' && $this->getRetypePassword() != '' && $this->getProfileLink() != ''){
                    $file = 'account.json';
                    if (file_exists($file)){
                        $current_data = file_get_contents($file);
                        $array_data = json_decode($current_data, true);
                        $newArr = array(
                            'First name' => $this->getFirstName(),
                            'Last name' => $this->getLastName(),
                            'Email' => $this->getEmail(),
                            'Password' => $this->getPassword(),
                            'Retype Password' => $this->getRetypePassword(),
                            'Avatar' => $this->getProfileLink(),
                        );
                        // CONVERT TO THE NEW ARRAY AND CONVERT JSON
                        $array_data[] = $newArr;
                        $final_data = json_encode($array_data, JSON_PRETTY_PRINT);
                        
                        print $final_data;
    
                        $putContent = file_put_contents($file, $final_data);
                        // FIXING.........
                        // if ($putContent) {
                        //     echo "Successfully Appended!!";
                        // } 
                        // else{
                        //     echo "Unsuccessfully Appended";
                        // }
                    }
                    else{
                        echo "JSON FILE does not exist";
                    }
                }
            }
        }
    }
    $user1 = new UserDatabase();
    $user1->databaseAccount();
?>
