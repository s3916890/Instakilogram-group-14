<?php
function php_func(){
// read json file
$json_data = file_get_contents("../database/post.db");

// decode json to associative array
$post = json_decode($json_data, true);

// get array index to delete
$arr_index = array();
foreach ($post as $key => $value)
{
    if ($value['postID'])
    {
        $arr_index[] = $key;
    }
}

// delete data
foreach ($arr_index as $i)
{
    unset($post[$i]);
}

// rebase array
$post = array_values($post);

// encode array to json and save to file
file_put_contents("../database/post.db", json_encode($post));
}
?>


 