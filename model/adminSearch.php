<?php
$userInput = $_GET['searchInput'];
$fileName = "../database/account.db";
$decodeDatabase = json_decode(file_get_contents($fileName));
for ($i = 0; $i < count($decodeDatabase); $i++) {
    if (str_contains($decodeDatabase[$i]->email,$userInput) or str_contains($decodeDatabase[$i]->firstName,$userInput) or str_contains($decodeDatabase[$i]->lastName,$userInput)) {
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
$selectedAccounts = file_put_contents("../database/filteredAccounts.db", $json);

?>
