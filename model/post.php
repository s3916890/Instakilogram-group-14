<?php
    $accountDatabase = json_decode(file_get_contents("../database/account.db"), true);
    $postDatabase = json_decode(file_get_contents("../database/post.db"), true);

    if (array_key_exists('delBtn', $_POST)) {
        // get array index to delete
        $arr_index = array();
        if ($postDatabase != null) {
            foreach ($postDatabase as $key => $value) {
                if ($value['postID'] === $_POST['postID']) {
                    if ($value['uID'] === $_SESSION['userID'] || $_SESSION['adminLoggedIn']) {
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
    }

    if ($postDatabase != null) {
        function post_created_time_cmp($firstPost, $nextPost)
        {
            return strtotime($nextPost['createdTime']) - strtotime($firstPost['createdTime']);
        }
        uasort($postDatabase, 'post_created_time_cmp');

        foreach ($postDatabase as $key => $value) {
            // echo $value['uID'];
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
                                <input type="submit" name="delBtn" class="delete-btn" value="Delete post"/>
                                <input type="hidden" name="postID" value=' . $value['postID'] .  '>
                            </form>
                                                        
                        </div>  
                        <img src= "../assets/postImage/' . $value['postImage'] . '"class="post-image" alt="Post Image">

                    </div>';
                }
            }
            // Print all the user's post if the session is adminPage
            if ($_SESSION['adminPage']) {
                echo $postImg;
            }
            // For the admin search page, print the user's posts
            elseif ($_SESSION['accountDetail']) {
                if ($_SESSION['accountID'] === $value['uID']) {
                    echo $postImg;
                }
            }
            // Only print the user's post if the session is myAccount
            elseif ($_SESSION['myAccount']) {
                if ($_SESSION['userID'] === $value['uID']) {
                    echo $postImg;
                }
            }
            // For other cases
            else {
                // Check the status of the post and render the post to the right users
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
?>