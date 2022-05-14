<form method='POST' action="../model/resetPass.php">
  <label for="fname">New Password:</label><br>
  <input type="password" id="New Password" name="New Password" value=><br>
  <label for="lname">Confirm Password:</label><br>
  <input type="password" id="Confirm Password" name="Confirm Password" value=><br><br>
  <input type="submit" value="submit" name='submit'>
</form> 

<h1><?php echo($_SESSION["userName"])?></h1>
