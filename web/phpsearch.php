
<?php
	$book = $_POST["book"];


	try {
		$user = 'postgres';
		$password = 'sh0m0mm@';
		$db = new PDO('pgsql:host=127.0.0.1;dbname=scriptures', $user, $password);
	}
	catch (PDOException $ex) {
		echo 'Error: ' . $ex->getMessage();
		die();
	}

	$stmt = $db->prepare("SELECT * FROM scripture WHERE book = :book");
	$stmt->bindValue(':book', $book, PDO::PARAM_STR);
	$stmt->execute();
	$rows = $stmt->fetchAll();
	echo "<h1> Scripture Resources</h1>";
	echo "<br>"
	foreach ($rows as $row) {
		echo "Something is happening...";
		echo '<strong>' . $row['book'];
		echo ' ' . $row['chapter'];
		echo ':' . $row['verse'] . '</strong>';
		echo ' - "' . $row['content'] . '"';
		echo '<br>';
	}

?>