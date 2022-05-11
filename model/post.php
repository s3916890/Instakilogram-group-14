<?php
$postDatabase = json_decode(file_get_contents("../../database/post.db"), true);
$accountDatabase = json_decode(file_get_contents("../../database/accounts.db"), true);

if ($postDatabase != null) {
    foreach ($postDatabase as $key => $value) {
        foreach ($accountDatabase as $k => $v) {
            if ($value['uID'] === $v['userID']) {
                $value['uAva'] = $v['avatar'];
                $postImg = '
                <div class="post">
                    <div class="author">
                        <div class="info-container">
                            <img src= "../assets/userAvatar/' . $value['uAva'] . '"class="avatar" alt="Avatar">
                            <h1 class="user-name">' . $value['uName'] . '</h1>
                        </div>
                        <label for="status">
                        ' . $value['status'] . '
                        </label>   
                    </div>
                    <div class="post-desc">
                        <p class="created-time">' . $value['createdTime'] .  '</p>
                        <p class="description">' . $value['description'] . '</p>
                    </div>  
                    <img src= "../assets/postImage/' . $value['postImage'] . '"class="post-image" alt="Post Image">
                </div>';
            }
        }
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
