<?php
    $fileName = "../../database/accounts.db";
    $oldRecords = json_decode(file_get_contents($fileName), TRUE);
    $currentEmailInFileDb = array();
    $currentRegisterTimeInFileDb = array();

    foreach ($oldRecords as $userInputObject) {
        array_push($currentEmailInFileDb, strtolower($userInputObject['email']));
        array_push($currentRegisterTimeInFileDb, strtolower($userInputObject['registerTime']));
    }

    $listUserAccounts = array();
    for($i = 0; $i < sizeof($currentRegisterTimeInFileDb); $i++){
        array_push($listUserAccounts, $currentEmailInFileDb[$i] . " (" . $currentRegisterTimeInFileDb[$i] . ")");
    }
    ksort($listUserAccounts);
    
    $_SESSION["listUserAccounts"] = $listUserAccounts;

?>