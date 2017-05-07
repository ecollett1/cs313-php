<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="javascrpt.js"></script>
    <link rel="stylesheet" type="text/css" href="Styles.css">
	<title>Confirmation Page</title>
</head>
<body>
<h1>ElectriCITY</h1>
<h2>Confirmation:</h2>
<form action="browse.php" id="form5" method="post">
	<?php
		$tasernum = $_SESSION["tasernum"];
        $lightbulbnum = $_SESSION["lightbulbnum"];
        $toasternum = $_SESSION["toasternum"];
        $computernum = $_SESSION["computernum"];

        $total = ($tasernum * $_SESSION["taser"]) + ($lightbulbnum * $_SESSION["lightbulb"]) + ($toasternum * $_SESSION["toaster"]) + ($computernum * $_SESSION["computer"]);
        $total += ($total * .08);
    	
    	$firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $phone = $_POST["phoneNumber"];
        $address = $_POST["Address"];
        $apartment = $_POST["Apartment"];
        $city = $_POST["City"];
        $state = $_POST["State"];
        $zip = $_POST["zip"];
        
        echo "<strong>Name:</strong> " . $firstName . " " . $lastName . "<br>";
        echo "<strong>Phone Number:</strong> " . "(" . $phone[0],$phone[1],$phone[2] . ")" . $phone[3],$phone[4],$phone[5] . "-" . $phone[6],$phone[7],$phone[8],$phone[9] . "<br>";
        echo "<strong>Address:</strong><br> " . "<span>" . $address . " " . $apartment . "<br>" . $city . ", " . $state . " " . $zip . "</span><br>";

        echo $tasernum . " Tasers at $35.99 each<br>";
        echo $lightbulbnum . " Lightbulbs at $1.99 each<br>";
        echo $toasternum . " Toasters at $10.99 each<br>";
        echo $computernum . " Computers at $352.99 each<br>";

        echo "<strong>Total with 8% tax: </strong>$" . number_format($total, 2) . "<br><br>";
        session_unset();
        session_destroy();
	?>
	<input type="submit" name="submit6" value="Back to Browse" id="submit6">
</form>
</body>
</html>