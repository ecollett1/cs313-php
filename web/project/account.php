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
	elseif ($username != "admin") {
		header("Location: callitphotography.php");
		die();
	}
	elseif ($password != "theraininspain") {
		header("Location: callitphotography.php");
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
	    	<input type="text" name="firstName" value=""> First Name</input>
	    	<br>
	    	<input type="text" name="lastName" value=""> Last Name</input>
	    	<br>
	    	<input type="text" name="phone" value="phone"> Phone
	    	<br>
	    	<input type="email" name="email"> Email
	    	<br>
	    	<input type="text" name="address"> Address
	    	<br>
	    	<input type="submit" name="submit" value="Submit">
	    </form>
    </main>
  </body>
</html>
