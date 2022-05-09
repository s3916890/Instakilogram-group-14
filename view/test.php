<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Users</title>

    <link rel="stylesheet" href="../style/pagination.css" />
</head>

<body>
    <header>
        <h1>User Accounts</h1>
    </header>
    <main>
        <div class="list" id="list"></div>
        <div class="pageNumbers" id="pagination"></div>
    </main>

    <script src="./pagination.js">
        $fileName = ("../database/account.db");
        $getUserAccountFromFile = file_get_contents($fileName);
        $decodeUserAccount = json_decode($getUserAccountFromFile);

        const listItem = $decodeUserAccount;
        displayList(listItem, listElement, rows, currentPage);
        setupPagination(listItem, paginationElement, rows);
    </script>
</body>

</html>