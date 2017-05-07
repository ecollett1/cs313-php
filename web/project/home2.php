<?php
	session_start();
	if (!isset($_SESSION["username"])) {
		header("Location: login.php");
		die();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
<?php
$user = $_SESSION["username"];
	echo "<h1>Welcome $user</h1>";
?>
</body>
</html>