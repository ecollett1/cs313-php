<?php
	echo "Name: ", $_POST["name"], "<br>";
	echo "Email: ", $_POST["email"], "<br>";
	echo "Major: ", $_POST["major"], "<br>";
	echo "Continents Visited: <br>";

	foreach ($_POST['continents'] as $check) {
		echo $check, "<br>";
	}
?>