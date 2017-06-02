<?php
	$fname = htmlspecialchars($_POST['firstName']);
	$lname = htmlspecialchars($_POST['lastName']);
	$email = htmlspecialchars($_POST['email']);
	$phone = htmlspecialchars($_POST['phone']);
	$address = htmlspecialchars($_POST['address']);

	try {
		$dbURL = getenv('DATABASE_URL');
		$dbopts = parse_url($dbURL);

		$dbHost = $dbopts["host"];
		$dbPort = $dbopts["port"];
		$dbUser = $dbopts["user"];
		$dbPassword = $dbopts["pass"];
		$dbName = ltrim($dbopts["path"],'/');

		
    	$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
    } catch (PDOException $ex) {
    	echo "Error connecting to the db. Details: $ex";
    	header("Location: callitphotography.php");
    	die();
    }

	if (!empty($fname)) {
		$query1 = "UPDATE customer SET firstname = :fname WHERE id = 1";
		$statement1 = $db->prepare($query1);
    	$statement1->bindValue(":fname", $fname, PDO::PARAM_STR);
    	$statement1->execute();
	}

	if (!empty($lname) {
		$query2 = "UPDATE customer SET lastname = :lname WHERE id = 1";
		$statement2 = $db->prepare($query2);
    	$statement2->bindValue(":lname", $lname, PDO::PARAM_STR);
    	$statement2->execute();
	}
	if (!empty($email) {
		$query3 = "UPDATE customer SET email = :email WHERE id = 1";
		$statement3 = $db->prepare($query3);
    	$statement3->bindValue(":email", $email, PDO::PARAM_STR);
    	$statement3->execute();
	}
	if (!empty($phone) {
		$query4 = "UPDATE customer SET phone = :phone WHERE id = 1";
		$statement4 = $db->prepare($query4);
    	$statement4->bindValue(":phone", $phone, PDO::PARAM_STR);
    	$statement4->execute();
	}
	if (!empty($address) {
		$query5 = "UPDATE customer SET address = :address WHERE id = 1";
		$statement5 = $db->prepare($query5);
    	$statement5->bindValue(":address", $address, PDO::PARAM_STR);
    	$statement5->execute();
	}

	header("contact.php");
	die();
?>