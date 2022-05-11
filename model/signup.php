<?php
if (isset($_POST['submit'])) {
    $newMessage = array(
        "userID" => "user-" . uniqid(),
        "userName" => $_POST['userName'],
        "firstName" => $_POST['firstName'],
        "lastName" => $_POST['lastName'],
        "email" => $_POST['email'],
        "password" => password_hash($_POST["password"], PASSWORD_DEFAULT),
        // "retypePassword" => $_POST['password_confirmation'],
        "avatar" => $_FILES['avatar']['name'],
        "registerTime" => date('Y-m-d H:i:s')
    );

    if (empty($_POST["userName"]) || empty($_POST["firstName"] || empty($_POST["lastName"]) || empty($_POST["email"]) || empty($_POST["password"]) || empty($_POST["password_confirmation"]) || empty($_POST["avatar"]))) {
        header("location: ../view/signup.php");
    } else {
        $fileName = "../../database/accounts.db";
        stat(iconv('UTF-8', 'ISO-8859-1', $fileName));
        // Set the path to save the image
        $targetDirectory    = "../assets/userAvatar/";
        $targetFile   = $targetDirectory . basename($_FILES["avatar"]["name"]);
        $allowUpload   = true;
        $fileUploadExtension = pathinfo($targetFile, PATHINFO_EXTENSION);
        $allowedExtension = array("jpg", "jpeg", "png", "gif");
        // If the extension of file upload is not proper, the executing will immediately exit to the statement. 
        if (in_array($fileUploadExtension, $allowedExtension) and $_FILES["avatar"]["error"] == 0) {
            if (filesize($fileName) == 0) {
                $firstRecord = array($newMessage);
                $dataToSave = $firstRecord;
                header("location:../view/login.php");
            } else {
                $oldRecords = json_decode(file_get_contents($fileName), TRUE);
                $currentEmailInFileDb = array();

                foreach ($oldRecords as $userInputObject) {
                    array_push($currentEmailInFileDb, strtolower($userInputObject['email']));
                }
                // Check duplication email
                if (!in_array(strtolower($newMessage["email"]), $currentEmailInFileDb)) {
                    array_push($oldRecords, $newMessage);
                    header("location:../view/login.php");
                } else {
                    header("location:../view/signup.php");
                }


                $dataToSave = $oldRecords;
            }

            move_uploaded_file($_FILES['avatar']["tmp_name"], $targetFile);
            $encoded_data = json_encode($dataToSave, JSON_PRETTY_PRINT);

            if (!file_put_contents($fileName, $encoded_data, LOCK_EX)) {
                header("location:../view/signup.php");
            }

        } else {
            header("location:../view/signup.php");
        }
    }
}
