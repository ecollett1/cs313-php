<?php
	session_start();
	$username = htmlspecialchars($_POST['username']);
	$password = htmlspecialchars($_POST['password']);

	$_SESSION["email"] = $username;

	if (empty($username)) {
		header("Location: callitphotography.php");
		die();
	}
	elseif (empty($password)) {
		header("Location: callitphotography.php");
		die();
	}
	elseif ($username == "callitphotography@gmail.com" && $password != "theraininspain") {
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
    <link rel="icon" type="image/png" href="Call it.PNG" />

  </head>
  <body id="mainContainer" class="fade">
    <main>
		<?php
	        require("header.php");
	    ?>
	    <h2>Change Your Information</h2>
	    <form action="tablechange.php" method="post">
	    	<span class="center"><label for="fname">First Name:</label><br><input type="text" name="fname" id="fname" required></span>
			<br>
			<span class="center"><label for="lname">Last Name:</label><br><input type="text" name="lname" id="lname"></span>
			<br>
			<span class="center"><label for="phonenum">Phone Number:</label><br><input type="text" name="phonenum" id="phonenum" required></span>
			<br>
			<span class="center"><label for="address">Address:</label><br><input type="text" name="address" id="address"></span>
			<br>
			<span class="center"><input type="submit" name="submit" value="Submit"></span>
	    </form>
	    <?php
        	require("footer.php");
      	?>
    </main>
  </body>
</html>
