<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Call It Photography</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" type="image/png" href="Call it.PNG" />

  </head>
  <body id="mainContainer" class="fade">
    <main>
		<?php
	        require("header.php");
	    ?>
		<h2>Login</h2>
		<form action="account.php" method="post">
			<span class="center"><label for="username">Email: </label><br><input type="text" name="username" id="username"></span>
			<br>
			<span class="center"><label for="password">Password: </label><br><input type="password" name="password" id="password"></span>
			<br>
            <span class="center"><button type="submit" name="submit">Login</button></span>
		</form>
		<h3>New here?</h3>
		<form action="createaccount.php" method="post">
            <span class="center">Create account here: <button type="submit" name="create">Create Account</button></span>
		</form>
	</main>
</body>
</html>