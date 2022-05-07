<?php
session_start();

if (isset($_POST['upload'])) {
    $post = array(
        'postImage' => $_FILES['post-image']['name'],
        'description' => $_POST['description'],
        'created_time' => date('Y-m-d h:i:s')
    );

    $fileName = "post.db";
    stat(iconv('UTF-8', 'ISO-8859-1', $fileName));

    // Set the path to save the image
    $target_dir    = "../../postImage/";
    $target_file   = $target_dir . basename($_FILES["post-image"]["name"]);
    $allowUpload   = true;
    $fileUploadExtension = pathinfo($target_file, PATHINFO_EXTENSION);
    $allowedExtension = array("jpg", "jpeg", "png", "gif");
    // If the extension of file upload is not proper, the executing will immediately exit to the statement. 
    if (in_array($fileUploadExtension, $allowedExtension)) {
        if (filesize($fileName) == 0) {
            $new_record = array($post);
            $data_to_save = $new_record;
        } else {
            $old_record = json_decode(file_get_contents($fileName), TRUE);

            if ($_FILES["post-image"]["error"] == 0) {
                array_push($old_record, $post);
            }
            $data_to_save = $old_record;
        }

        // Move the images to the folder    
        if ($allowUpload) {
            if (move_uploaded_file($_FILES['post-image']["tmp_name"], $target_file)) {
                $flag = true;
                // header("location:../view/homepage.php");
            }
        }

        $encoded_data = json_encode($data_to_save, JSON_PRETTY_PRINT);

        if (!file_put_contents($fileName, $encoded_data, LOCK_EX)) {
            // header("location:../view/signup.php");
        }
    }
}
?>