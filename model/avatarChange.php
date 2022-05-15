<?php
session_start();

if (!isset($_SESSION['loggedin'])) {
    header('location: ../view/login.php');
}
?>

<?php
$getDatabase = file_get_contents("../database/account.db");
$decodeDatabase = json_decode($getDatabase, true);

if (isset($_POST["submit"])) {
    $newAvatar = $_FILES['newAvatar']['name'];
    $target_dir    = "../assets/userAvatar/";
    $target_file   = $target_dir . basename($newAvatar);
    $fileUploadExtension = pathinfo($target_file,PATHINFO_EXTENSION);
    $allowedExtension = array("jpg", "jpeg", "png", "gif");
    // If the extension of file upload is not proper, the executing will immediately exit to the statement. 
    if (in_array($fileUploadExtension, $allowedExtension) and $_FILES["newAvatar"]["error"] == 0) {
        foreach ($decodeDatabase as $key => $value) {
            if ($value['userID'] === $_SESSION['userID']) {
                $decodeDatabase[$key]['avatar'] = $newAvatar;
                move_uploaded_file($_FILES['newAvatar']["tmp_name"], $target_file);  

                if (isset($_SESSION['avatar'])) {
                    $_SESSION['avatar'] = $newAvatar;
                }
            }
        }
    }
    header("location: ../view/myAccount.php");
    // Encode array to json and save to file
    file_put_contents('../database/account.db', json_encode($decodeDatabase));

}
?>