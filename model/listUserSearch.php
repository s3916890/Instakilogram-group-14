<?php
    $fileName = "../../database/searchAccount.db";
    $oldRecords = json_decode(file_get_contents($fileName), TRUE);
    $currentUIDInFileDb = array();
    $currentRegisterTimeInFileDb = array();
    $currentEmailInFileDb = array();
    $currentFirstNameInFileDb = array();
    $currentLastNameInFileDb = array();

    function user_created_time_cmp($firstPost, $nextPost) {
        return strtotime($nextPost['registerTime']) - strtotime($firstPost['registerTime']);
    }
    uasort($oldRecords, 'user_created_time_cmp');
    foreach ($oldRecords as $userInputObject) {
        array_push($currentUIDInFileDb, strtolower($userInputObject['userID']));
        array_push($currentRegisterTimeInFileDb, strtolower($userInputObject['registerTime']));
        array_push($currentEmailInFileDb, strtolower($userInputObject['email']));
        array_push($currentFirstNameInFileDb, strtolower($userInputObject['firstName']));
        array_push($currentLastNameInFileDb, strtolower($userInputObject['lastName']));

    }

    $listUserAccounts = array();
    for($i = 0; $i < sizeof($currentUIDInFileDb); $i++){
        array_push($listUserAccounts, $currentUIDInFileDb[$i] .', ' .$currentEmailInFileDb[$i] .', '. $currentFirstNameInFileDb[$i]. ' '. $currentLastNameInFileDb[$i] ." (" . $currentRegisterTimeInFileDb[$i] . ")");
    }    
    $_SESSION["listUserAccounts"] = $listUserAccounts;
?>

