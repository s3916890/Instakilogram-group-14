<?php
$postDatabase = file_get_contents("../../database/post.db");
$decodeDatabase = json_decode($postDatabase, true);

if ($decodeDatabase != null) {
    foreach ($decodeDatabase as $key => $value) {
        $postImg = '
        <div class="post post-adminPage">
            <div class="author">
                <div class="info-container">
                    <img src= "../assets/userAvatar/' . $value['uAva'] . '"class="avatar" alt="Avatar">
                    <h1 class="user-name user-name-adminPage">' . $value['uName'] . '</h1>
                </div>
                <label for="status">
                ' . $value['status'] . '
                </label>   
            </div>
            <div class="post-desc">
                <p class="created-time created-time-adminPage">' . $value['createdTime'] .  '</p>
                <p class="description description-adminPage">' . $value['description'] . '</p>
            </div>  
            <img src= "../assets/postImage/' . $value['postImage'] . '"class="post-image" alt="Post Image">
        </div>';
        if ($value['status'] === 'public') {
            $_SESSION['public'] = true;
            echo $postImg;
        } elseif ($value['status'] === 'internal') {
            if ($_SESSION['loggedin'] === true) {
                $_SESSION['internal'] = true;
                echo $postImg;
            }
        } elseif ($value['status'] === 'private') {
            if ($_SESSION['loggedin'] === true && $_SESSION['userID'] === $value['uID']) {
                $_SESSION['private'] = true;
                echo $postImg;
            }
        }
    }
}
