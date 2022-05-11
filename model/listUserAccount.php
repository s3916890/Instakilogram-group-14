<?php
    $fileName = "../../database/accounts.db";
    $oldRecords = json_decode(file_get_contents($fileName), TRUE);
    $currentEmailInFileDb = array();
    $currentRegisterTimeInFileDb = array();

    foreach ($oldRecords as $userInputObject) {
        array_push($currentEmailInFileDb, strtolower($userInputObject['email']));
        array_push($currentRegisterTimeInFileDb, strtolower($userInputObject['registerTime']));
    }

    $currentEmailInFileDb = array_reverse($currentEmailInFileDb);
    $currentRegisterTimeInFileDb = array_reverse($currentRegisterTimeInFileDb);


    $listUserAccounts = array();
    for($i = 0; $i < sizeof($currentRegisterTimeInFileDb); $i++){
        array_push($listUserAccounts, $currentEmailInFileDb[$i] . " (" . $currentRegisterTimeInFileDb[$i] . ")");
    }    
    $_SESSION["listUserAccounts"] = $listUserAccounts;
?>