<?php
$userInput = $_GET['searchInput'];
$test = $_GET['accountID'];
$fileName = "../database/account.db";
$decodeDatabase = json_decode(file_get_contents($fileName));
for ($i = 0; $i < count($decodeDatabase); $i++) {
    // Go to homepage if the email and password are correct
    if ($userInput == strtolower($decodeDatabase[$i]->email) or $userInput === strtolower($decodeDatabase[$i]->firstName) or $userInput === strtolower($decodeDatabase[$i]->lastName)) {
        $accountArray = array(
            "userID" => $decodeDatabase[$i]->userID,
            "userName" => $decodeDatabase[$i]->userName,
            "firstName" => $decodeDatabase[$i]->firstName,
            "lastName" => $decodeDatabase[$i]->firstName,
            "email" =>  $decodeDatabase[$i]->email,
            "password" => $decodeDatabase[$i]->password,
            "avatar" => $decodeDatabase[$i]->avatar
        );
    } 
}
$json = json_encode($accountArray);
$selectedAccounts = file_put_contents("myfile.json", $json);

searchInformation($selectedAccounts); 

