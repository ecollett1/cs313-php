<?php
	$fname = htmlspecialchars($_POST['firstName']);
	$lname = htmlspecialchars($_POST['lastName']);
	$email = htmlspecialchars($_POST['email']);
	$phone = htmlspecialchars($_POST['phone']);
	$address = htmlspecialchars($_POST['address']);

	
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

	if (!empty($fname)) {
		$query1 = "UPDATE customer SET firstname = :fname WHERE id = 1";
		$statement = $db->prepare($query1);
    	$statement->bindValue(":fname", $fname, PDO::PARAM_STR);
    	$statement->execute();
	}

	if (!empty($lname) {
		$query2 = "UPDATE customer SET lastname = :lname WHERE id = 1";
		$statement = $db->prepare($query2);
    	$statement->bindValue(":lname", $lname, PDO::PARAM_STR);
    	$statement->execute();
	}
	if (!empty($email) {
		$query3 = "UPDATE customer SET email = :email WHERE id = 1";
		$statement = $db->prepare($query3);
    	$statement->bindValue(":email", $email, PDO::PARAM_STR);
    	$statement->execute();
	}
	if (!empty($phone) {
		$query4 = "UPDATE customer SET phone = :phone WHERE id = 1";
		$statement = $db->prepare($query4);
    	$statement->bindValue(":phone", $phone, PDO::PARAM_STR);
    	$statement->execute();
	}
	if (!empty($address) {
		$query5 = "UPDATE customer SET address = :address WHERE id = 1";
		$statement = $db->prepare($query5);
    	$statement->bindValue(":address", $address, PDO::PARAM_STR);
    	$statement->execute();
	}

	header("contact.php");
	die();
?>