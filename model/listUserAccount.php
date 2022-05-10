<?php
    $fileName = "../../database/accounts.db";
    $oldRecords = json_decode(file_get_contents($fileName), TRUE);
    $currentEmailInFileDb = array();
    $currentRegisterTimeInFileDb = array();

    foreach ($oldRecords as $userInputObject) {
        array_push($currentEmailInFileDb, strtolower($userInputObject['email']));
        array_push($currentRegisterTimeInFileDb, strtolower($userInputObject['registerTime']));
    }

    $_SESSION["listUserAccounts"] = $currentEmailInFileDb;

    $newCurrentRegisterTime = array();
    for($i = 0; $i < sizeof($currentRegisterTimeInFileDb); $i++){
        array_push($newCurrentRegisterTime, $currentEmailInFileDb[$i] . " (" . $currentRegisterTimeInFileDb[$i] . ")");
    }
    ksort($newCurrentRegisterTime);
    $_SESSION["listRegisterTime"] = $newCurrentRegisterTime;

?>