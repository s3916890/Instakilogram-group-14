<?php
    // Loop through array and return objects of matched accounts 
    $beforeUpperUserInput = $_GET['searchInput'];
    $userInput = strtolower($beforeUpperUserInput); 
    $filteredFile = "../database/searchAccount.db";

    $fileName = "../database/account.db";
    $decodeDatabase = json_decode(file_get_contents($fileName));
    for ($i = 0; $i < count($decodeDatabase); $i++) {
        $seleEmail = $decodeDatabase[$i]->email; 
        $seleFirstName = $decodeDatabase[$i]->firstName;
        $seleLastName = $decodeDatabase[$i]->lastName; 
        $lowerEmail = strtolower($seleEmail); 
        $lowerFirstName = strtolower($seleFirstName); 
        $lowerLastName = strtolower($seleLastName); 
        if (str_contains($lowerEmail,$userInput) or str_contains($lowerFirstName,$userInput) or str_contains($lowerLastName,$userInput)) {
            $accountArray = array(
                "userID" => $decodeDatabase[$i]->userID,
                "userName" => $decodeDatabase[$i]->userName,
                "firstName" => $decodeDatabase[$i]->firstName,
                "lastName" => $decodeDatabase[$i]->lastName,
                "email" =>  $decodeDatabase[$i]->email,
                "password" => $decodeDatabase[$i]->password,
                "avatar" => $decodeDatabase[$i]->avatar, 
                "registerTime" => $decodeDatabase[$i]->registerTime

            );
            // Save the account in JSON file 
            if (filesize($filteredFile) == 0) {
                $firstRecord = array($accountArray);
                $dataToSave = $firstRecord;
            } 
            else {
                $oldRecords = json_decode(file_get_contents($filteredFile), TRUE);
                array_push($oldRecords, $accountArray);
                $dataToSave = $oldRecords;
            }
            $encoded_data = json_encode($dataToSave, JSON_PRETTY_PRINT);
            file_put_contents($filteredFile, $encoded_data, LOCK_EX);
            }
        
    }

?>