<?php
$postDatabase = file_get_contents("../database/post.db");
$decodeDatabase = json_decode($postDatabase, true);

if ($decodeDatabase != null) {
    foreach ($decodeDatabase as $key => $value) {
        $postImg = '
        <div class="post">
            <div class="author">
                <label for="status">
                    ' . $value['status'] . '
                </label>
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
