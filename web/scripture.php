<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Scripture Resources</h1>

<?php
	try {
		$user = 'postgres';
		$password = 'sh0m0mm@';
		$db = new PDO('pgsql:host=127.0.0.1;dbname=scriptures', $user, $password);
	}
	catch (PDOException $ex) {
		echo 'Error: ' . $ex->getMessage();
		die();
	}

	echo '<br>';
	
	foreach ($db->query('SELECT * FROM scripture') as $row) {
		echo '<strong>' . $row['book'];
		echo ' ' . $row['chapter'];
		echo ':' . $row['verse'] . '</strong>';
		echo ' - "' . $row['content'] . '"';
		echo '<br>';
	}
?>

<form action="phpsearch.php" method="POST">
	<input type="text" name="book" id="book" value="john">
	<input type="submit" name="submit">
</form>
</body>
</html>

