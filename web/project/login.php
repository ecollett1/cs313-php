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
			<label for="username">Username:</label><input type="text" name="username" id="username">
			<br>
			<label for="password">Password:</label><input type="password" name="password" id="password">
			<br>
			<input type="submit" name="submit" value="Login">
		</form>
	</main>
</body>
</html>