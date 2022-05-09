<div class="post">
    <div class="author">
        <label for="status">
            <?php
            // if ($_SESSION["optionStatus"] === "public") {
            //     if ($_SESSION["loggedin"] === true or $_SESSION["loggedin"] === false) {
            //         echo $_SESSION["optionStatus"];
            //     }
            // } elseif ($_SESSION["optionStatus"] === "internal") {
            //     if ($_SESSION["loggedin"] === true or $_SESSION["loggedin"] === false) {

            //         echo $_SESSION["optionStatus"];
            //     }
            // } elseif ($_SESSION["optionStatus"] == "private") {
            //     if ($_SESSION["loggedin"] === true or $_SESSION["isYourSharing"] === true) {
            //     }
            // }
                echo $_SESSION["optionStatus"];
            ?>
        </label>
    </div>
    <img src="<?php echo "../../assets/postImage/" . $post->postImage ?>" class="post-image" alt="">
</div>
