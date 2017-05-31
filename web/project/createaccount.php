<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Call It Photography</title>
    <link rel="stylesheet" type="text/css" href="style.css">

  </head>
  <body id="mainContainer" class="fade">
    <main>
		<?php
	        require("header.php");
	    ?>
		<h2>Login</h2>
		<form action="accountcreate.php" method="post">
			<label for="email">Email:</label><input type="text" name="email" id="email" required>
			<br>
			<label for="password">Password:</label><input type="password" name="password" id="password" required>
			<br>
			<label for="confirmpassword">Confirm:</label><input type="password" name="confirmpassword" id="confirmpassword" required>
			<br>
			<label for="fname">First Name:</label><input type="text" name="fname" id="fname" required>
			<br>
			<label for="lname">Last Name:</label><input type="text" name="lname" id="lname">
			<br>
			<label for="phonenum">Phone Number:</label><input type="text" name="phonenum" id="phonenum" required>
			<br>
			<label for="address">Address:</label><input type="text" name="address" id="address">
			<br>
			<input type="submit" name="submit" value="Login">
		</form>
	</main>
</body>
</html>