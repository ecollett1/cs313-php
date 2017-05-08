<?php
	session_start();

	if (empty($_POST["firstname"])) {
		header("Location: checkout.php");
		die();
	} elseif (empty($_POST["lastname"])) {
		header("Location: checkout.php");
		die();
	} elseif (empty($_POST["phoneNumber"])) {
		header("Location: checkout.php");
		die();
	} else {

	}
	
?>