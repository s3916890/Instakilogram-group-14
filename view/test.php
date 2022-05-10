<?php include "../model/listUserAccount.php" ?>
<?php
    print_r($_SESSION["listUserAccounts"]);
    print_r($_SESSION["listRegisterTime"]);
    $listUserAccounts = $_SESSION["listUserAccounts"];
?>

<script>
    let listAccounts = new Array();

    <?php foreach($_SESSION["listUserAccounts"] as $userKey => $userValue){ ?>
            listAccounts.push("<?php echo $userValue; ?>");
    <?php }?>
    
    console.log(listAccounts);
</script>