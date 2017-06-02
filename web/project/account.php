<?php
	session_start();
	$username = htmlspecialchars($_POST['username']);
	$password = htmlspecialchars($_POST['password']);

	if (empty($username)) {
		header("Location: callitphotography.php");
		die();
	}
	elseif (empty($password)) {
		header("Location: callitphotography.php");
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
        $query = "SELECT * FROM customer WHERE email = :username";
        $statement = $db->prepare($query);
        $statement->bindValue(':username', $username, PDO::PARAM_STR);
        $statement->execute();

	}
    catch (PDOException $ex) {
        echo 'Error: ' . $ex->getMessage();
        die();
    }
          
?>

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Call It Photography</title>
    <link rel="stylesheet" type="text/css" href="style.css">

  </head>
  <body id="mainContainer" class="fade">
    <main>
		<?php
	        require("header.php");
	    ?>
	    <h2>Change Your Information</h2>
	    <form action="tablechange.php" method="post">
	    	<label for="fname">First Name:</label><input type="text" name="fname" id="fname" required>
			<br>
			<label for="lname">Last Name:</label><input type="text" name="lname" id="lname">
			<br>
			<label for="phonenum">Phone Number:</label><input type="text" name="phonenum" id="phonenum" required>
			<br>
			<label for="address">Address:</label><input type="text" name="address" id="address">
			<br>
			<input type="submit" name="submit" value="Submit">
	    </form>
    </main>
  </body>
</html>
