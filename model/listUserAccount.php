<?php
    $fileName = "../database/account.db";
    $oldRecords = json_decode(file_get_contents($fileName), TRUE);
    $currentEmailInFileDb = array();
    $currentRegisterTimeInFileDb = array();

    function user_created_time_cmp($firstPost, $nextPost) {
        return strtotime($nextPost['registerTime']) - strtotime($firstPost['registerTime']);
    }
    uasort($oldRecords, 'user_created_time_cmp');
    foreach ($oldRecords as $userInputObject) {
        array_push($currentEmailInFileDb, strtolower($userInputObject['email']));
        array_push($currentRegisterTimeInFileDb, strtolower($userInputObject['registerTime']));
    }

    $listUserAccounts = array();
    for($i = 0; $i < sizeof($currentRegisterTimeInFileDb); $i++){
        array_push($listUserAccounts, $currentEmailInFileDb[$i] . " (" . $currentRegisterTimeInFileDb[$i] . ")");
    }    
    $_SESSION["listUserAccounts"] = $listUserAccounts;
?>

