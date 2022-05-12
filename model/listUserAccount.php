<!-- Display a table of users based on user_name and email (optional: image) -->
<table>
		<!-- The first row is the tables header -->
		<tr>
            <th>Profile Image</th>
			<th>User ID</th>
			<th>User Name</th>
			<th>Email</th>
			<th>Actions</th>
		</tr>
        <!-- Next we will have the template which we will use inside
	  		the loop and poplulate with the data from the json file. -->
		<?php
            $json_data = file_get_contents("../database/account.db");
            $accounts = json_decode($json_data, true);
                foreach ($accounts as $account) {
                    ?>
                        <tr>
                            <td>
                                <!-- Images need to be in the same folder as this file to load -->
								<img src="<?php echo $account['avatar']; ?>" alt="User Profile Image">
							</td>
                            <td>
                                <?php echo $account['userID']; ?>
                            </td>
                            <td>
                                <?php echo $account['userName']; ?>
                            </td>
                            <td>
                                <?php echo $account['email']; ?>;
                            </td>
                            <td>
                                <input type='button' name='button' value='view'>
                            </td>
                        </tr>
        <?php
}
?>
</table>