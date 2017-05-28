<?php
	session_start();
	$dbURL = getenv('DATABASE_URL');
    $dbopts = parse_url($dbURL);

    $dbHost = $dbopts["host"];
    $dbPort = $dbopts["port"];
    $dbUser = $dbopts["user"];
    $dbPassword = $dbopts["pass"];
    $dbName = ltrim($dbopts["path"],'/');

    try {
    	$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
    } catch (PDOException $ex) {
    	echo "Error connecting to the db. Details: $ex";
    	header("callitphotography.php");
    	die();
    }

	if (!empty($_POST["firstName"])) {
		$fname = htmlspecialchars($_POST['firstName']);
		$query = "UPDATE customer SET firstname = :fname WHERE id = 1"
		$statement = $db->prepare($query);
    	$statement->bindValue(":fname", $fname, PDO::PARAM_STR);
    	$statement->execute();
	}

	if (!empty($_POST["lastName"])) {
		$lname = htmlspecialchars($_POST['lastName']);
		$query = "UPDATE customer SET lastname = :lname WHERE id = 1"
		$statement = $db->prepare($query);
    	$statement->bindValue(":lname", $lname, PDO::PARAM_STR);
    	$statement->execute();
	}
	if (!empty($_POST["email"])) {
		$email = htmlspecialchars($_POST['email']);
		$query = "UPDATE customer SET email = :email WHERE id = 1"
		$statement = $db->prepare($query);
    	$statement->bindValue(":email", $email, PDO::PARAM_STR);
    	$statement->execute();
	}
	if (!empty($_POST["phone"])) {
		$phone = htmlspecialchars($_POST['phone']);
		$query = "UPDATE customer SET phone = :phone WHERE id = 1"
		$statement = $db->prepare($query);
    	$statement->bindValue(":phone", $phone, PDO::PARAM_STR);
    	$statement->execute();
	}
	if (!empty($_POST["address"])) {
		$address = htmlspecialchars($_POST['address']);
		$query = "UPDATE customer SET address = :address WHERE id = 1"
		$statement = $db->prepare($query);
    	$statement->bindValue(":address", $address, PDO::PARAM_STR);
    	$statement->execute();
	}

	header("contact.php");
	die();
?>