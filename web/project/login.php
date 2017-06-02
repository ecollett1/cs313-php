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
		<form action="account.php" method="post">
			<label for="username">Username:</label><input type="text" name="username" id="username" class="center">
			<br>
			<label for="password">Password:</label><input type="password" name="password" id="password" class="center">
			<br>
			<input type="submit" name="submit" value="Login" class="center">
		</form>
		<h3>New here?</h3>
		<form action="createaccount.php" method="post">
			<span class="center">Create account here: <input type="submit" name="create" value="Create Account"></span>
		</form>
	</main>
</body>
</html>