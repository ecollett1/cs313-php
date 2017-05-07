<?php
	session_start();
	$passchk = "5678";
	$pass = $_POST["password"];
	$username = $_POST["username"];

	if ($passchk == $pass) {
		$_SESSION["username"] = $username;
		header("Location: home2.php");
		die();
	}

	else {
		echo "<script type=\"text/javascript\"> alert(\"Password Incorrect\")</script>";
		header("Location: login.php");
		die();
	}
	
?>