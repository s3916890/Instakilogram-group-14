<?php 
    $fileName = "../database/account.db";
    $accounts = json_decode(file_get_contents($fileName), TRUE);
    <script>
        function filterData() {
            let result = []; 
            let searchValue=searchUserInput.value.toString().toLowerCase.);
            foreach $accounts as $account {
                let email = $account['email'].toLowerCase();
                let firstName = $account['firstName'].toLowerCase();
                let LastName = $account['lastName'].toLowerCase () ;
                Let name = firstName + " " + lastName; 
                if (
                    email.includes(searchValue) ||
                    firstName.includes(searchValue) ||
                    lastName.includes(searchValue) ||
                    name.includes(searchValue)
                ) {
                    result.push($account);
                }
            }
        });
    </script>

    $currentEmailInFileDb = array();
    $currentRegisterTimeInFileDb = array();
    $currentUserName = array(); 

    function user_created_time_cmp($firstPost, $nextPost) {
        return strtotime($nextPost['registerTime']) - strtotime($firstPost['registerTime']);
    }
    uasort($oldRecords, 'user_created_time_cmp');
    foreach ($oldRecords as $userInputObject) {
        array_push($currentEmailInFileDb, strtolower($userInputObject['email']));
        array_push($currentRegisterTimeInFileDb, strtolower($userInputObject['registerTime']));
        array_push($currentUserName, strtolower($userInputObject['userID']));
    }
    $listUserAccounts = array();
    for($i = 0; $i < sizeof($currentRegisterTimeInFileDb); $i++){
        array_push($listUserAccounts, $currentEmailInFileDb[$i] . " (" . $currentRegisterTimeInFileDb[$i] . ")");
    }
