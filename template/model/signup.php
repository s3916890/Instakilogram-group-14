<?php
    if(isset($_POST['submit'])){
        $new_message = array(
            "userID" => "user-" . uniqid(),
            "userName" => $_POST['userName'],
            "firstName" => $_POST['firstName'],
            "lastName" => $_POST['lastName'],
            "email" => $_POST['email'],
            "password" => password_hash($_POST["password"], PASSWORD_DEFAULT),
            // "retypePassword" => $_POST['password_confirmation'],
            "avatar" => $_FILES['avatar']['name'],
        );

        if (empty($_POST["userName"]) || empty($_POST["firstName"] || empty($_POST["lastName"]) || empty($_POST["email"]) || empty($_POST["password"]) || empty($_POST["password_confirmation"]) || empty($_POST["avatar"]))) {
            header("location: ../view/signup.php");
        } else {
            $fileName = "database/accounts.db";
            stat(iconv('UTF-8', 'ISO-8859-1', $fileName));
            // Set the path to save the image
            $target_dir    = "../../assets/userAvatar/";
            $target_file   = $target_dir . basename($_FILES["avatar"]["name"]);
            $allowUpload   = true;
            $fileUploadExtension = pathinfo($target_file,PATHINFO_EXTENSION);
            $allowedExtension = array("jpg", "jpeg", "png", "gif");
            // If the extension of file upload is not proper, the executing will immediately exit to the statement. 
            if (in_array($fileUploadExtension, $allowedExtension) ) {
                if(filesize($fileName) == 0){
                    $first_record = array($new_message);
                    $data_to_save = $first_record;
                } else {
                    $old_records = json_decode(file_get_contents($fileName), TRUE);
                    $currentEmailInFileDb = array();

                    foreach($old_records as $userInputObject){
                        array_push($currentEmailInFileDb, strtolower($userInputObject['email']));
                    }

                    // CHECK DUPLICATION EMAIL PROCESS
                    if (!in_array(strtolower($new_message["email"]), $currentEmailInFileDb)){
                        if ($_FILES["avatar"]["error"] == 0) {
                            array_push($old_records, $new_message);
                            header("location:../view/login.php");
                        }
                        header("location:../view/signup.php");
                    } else {
                        header("location:../view/signup.php");
                    }
                    $data_to_save = $old_records;
                }
                
                // Move the images to the folder    
                if ($allowUpload) {
                    if (move_uploaded_file($_FILES['avatar']["tmp_name"], $target_file)) {   
                        $flag = true;
                        header("location:../view/login.php");
                    }
                }  
                
                $encoded_data = json_encode($data_to_save, JSON_PRETTY_PRINT);

                if(!file_put_contents($fileName, $encoded_data, LOCK_EX)){
                    header("location:../view/signup.php");
                } 
            }
        } 
    }
?>