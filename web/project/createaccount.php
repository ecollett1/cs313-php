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
			<span class="center"><label for="email">Email:</label><input type="text" name="email" id="email" required></span>
			<br>
			<span class="center"><label for="password">Password:</label><input type="password" name="password" id="password" required></span>
			<br>
			<span class="center"><label for="confirmpassword">Confirm Password:</label><input type="password" name="confirmpassword" id="confirmpassword" required></span>
			<br>
			<span class="center"><label for="fname">First Name:</label><input type="text" name="fname" id="fname" required></span>
			<br>
			<span class="center"><label for="lname">Last Name:</label><input type="text" name="lname" id="lname"></span>
			<br>
			<span class="center"><label for="phonenum">Phone Number:</label><input type="text" name="phonenum" id="phonenum" required></span>
			<br>
			<span class="center"><label for="address">Address:</label><input type="text" name="address" id="address"></span>
			<br>
			<span class="center"><input type="submit" name="submit" value="Login"></span>
		</form>
		<?php
        	require("footer.php");
      	?>
	</main>
</body>
</html>