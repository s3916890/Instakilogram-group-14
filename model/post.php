<?php
$postDatabase = json_decode(file_get_contents("../database/post.db"), true);
$accountDatabase = json_decode(file_get_contents("../database/account.db"), true);

if ($postDatabase != null) {
    function post_created_time_cmp($firstPost, $nextPost)
    {
        return strtotime($nextPost['createdTime']) - strtotime($firstPost['createdTime']);
    }
    uasort($postDatabase, 'post_created_time_cmp');

    foreach ($postDatabase as $key => $value) {
        foreach ($accountDatabase as $k => $v) {
            // change the avatar appearing in the post
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

                        <form method="post">
                            <input type="submit" name="button" class="button" value="Delete post"/>
                        </form>
                       
                    </div>  
                    <img src= "../assets/postImage/' . $value['postImage'] . '"class="post-image" alt="Post Image">
                    

                </div>';
            }
        }
        if ($_SESSION['myAccount']) {
            if ($_SESSION['userID'] === $value['uID']) {
                echo $postImg;
            }
        } elseif ($_SESSION['adminLoggedIn']) {
            echo $postImg;
        } else {
            if ($value['status'] === 'public') {
                echo $postImg;
            } elseif ($value['status'] === 'internal') {
                if ($_SESSION['loggedin'] === true) {
                    echo $postImg;
                }
            } elseif ($value['status'] === 'private') {
                if ($_SESSION['loggedin'] === true && $_SESSION['userID'] === $value['uID']) {
                    echo $postImg;
                }
            }
        }
    }
}


if (array_key_exists('button', $_POST)) {
    // get array index to delete
    $arr_index = array();
    foreach ($postDatabase as $key => $value) {
        if ($value['postID'] === $_POST['postID']) {
            if ($value['uID'] === $_SESSION['userID'] || $_SESSION['adminLoggedIn']){
                $arr_index[] = $key;
            }
        }
    }

    // delete data
    foreach ($arr_index as $i) {
        unset($postDatabase[$i]);
    }

    // rebase array
    $postDatabase = array_values($postDatabase);

    // encode array to json and save to file
    file_put_contents("../database/post.db", json_encode($postDatabase));
}
