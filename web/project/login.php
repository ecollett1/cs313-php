<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<h1>Login</h1>
	<form action="authenticate.php" method="post">
		<label for="username">Username:</label><input type="text" name="username" id="username">
		<br>
		<label for="password">Password:</label><input type="password" name="password" id="password">
		<br>
		<input type="submit" name="submi" value="Login">
	</form>
</body>
</html>