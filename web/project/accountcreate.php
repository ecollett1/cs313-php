<?php
	$email = htmlspecialchars($_POST['email']);
	$password = htmlspecialchars($_POST['password']);
	$confpass = htmlspecialchars($_POST['confirmpassword']);
	$fname = htmlspecialchars($_POST['fname']);
	$lname = htmlspecialchars($_POST['lname']);
	$phone = htmlspecialchars($_POST['phonenum']);
	$address = htmlspecialchars($_POST['address']);

	if ($password == $confpass) {
		$password = password_hash($password, PASSWORD_DEFAULT);
	}
	else {
		header("Location: createaccount.php");
		die();
	}

	try {
        $dbURL = getenv('DATABASE_URL');
        $dbopts = parse_url($dbURL);

        $dbHost = $dbopts["host"];
        $dbPort = $dbopts["port"];
        $dbUser = $dbopts["user"];
        $dbPassword = $dbopts["pass"];
        $dbName = ltrim($dbopts["path"],'/');

        $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
          
        $query = "INSERT INTO customer(firstname, lastname, phone, email, address, password, admin) VALUES (:fname, :lname, :phone, :email, :address, :password, false)";
        $statement = $db->prepare($query);
        $statement->bindValue(':fname', $fname, PDO::PARAM_STR);
        $statement->bindValue(':lname', $lname, PDO::PARAM_STR);
        $statement->bindValue(':phone', $phone, PDO::PARAM_STR);
        $statement->bindValue(':email', $email, PDO::PARAM_STR);
        $statement->bindValue(':address', $address, PDO::PARAM_STR);
        $statement->bindValue(':password', $password, PDO::PARAM_STR);
        $statement->execute();

        if ($statement->rowCount()) {
          echo "Success!";
          header("Location: callitphotography.php");
          die();
         }
         else {
          echo "Failure...";
          header("Location: createaccount.php");
          die();
         }
    }
    catch (PDOException $ex) {
      echo 'Error: ' . $ex->getMessage();
      die();
    }


?>