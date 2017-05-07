<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="javascrpt.js"></script>
    <link rel="stylesheet" type="text/css" href="Styles.css">
	<title>Cart</title>
</head>
<body>
<h1>ElectriCITY</h1>
<h2>Items in Cart:</h2>
<form action="checkout.php" id="form2" method="post">
	<?php 
		$tasernum = $_POST["qty1"];
        $lightbulbnum = $_POST["qty2"];
        $toasternum = $_POST["qty3"];
        $computernum = $_POST["qty4"];

        $_SESSION["tasernum"] = $tasernum;
        $_SESSION["lightbulbnum"] = $lightbulbnum;
        $_SESSION["toasternum"] = $toasternum;
        $_SESSION["computernum"] = $computernum;

        $total = ($tasernum * $_SESSION["taser"]) + ($lightbulbnum * $_SESSION["lightbulb"]) + ($toasternum * $_SESSION["toaster"]) + ($computernum * $_SESSION["computer"]);
        $total += ($total * .08);

        echo $tasernum . " Tasers at $35.99 each<br>";
        echo $lightbulbnum . " Lightbulbs at $1.99 each<br>";
        echo $toasternum . " Toasters at $10.99 each<br>";
        echo $computernum . " Computers at $352.99 each<br>";

        echo "<strong>Total with 8% tax: </strong>$" . number_format($total, 2) . "<br><br>";
	?>
	<input type="submit" name="submit2" id="submit2" value="Checkout">
</form>
<form action="browse.php" id="form3" method="post">
	<br><br><br>
	<input type="submit" name="submit3" id="submit3" value="Back to Browse">
</form>
</body>
</html>