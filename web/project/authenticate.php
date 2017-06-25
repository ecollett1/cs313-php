<?php
	session_start();
	
	$_SESSION["user"] = $_POST["pictures"];
	if ($_SESSION["user"] == null) {
		$_SESSION["user"] = "guest";
		header("Location: callitphotography.php");
		die();
	} else {
		header("Location: callitphotography.php");
		die();
}
?>