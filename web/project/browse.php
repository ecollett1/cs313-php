<?php 
	session_start();
	$_SESSION["taser"] = 35.99;
	$_SESSION["lightbulb"] = 1.99;
	$_SESSION["toaster"] = 10.99;
	$_SESSION["computer"] = 352.99;
?>

<!DOCTYPE html>
<html>
  <head>
    <script type="text/javascript" src="javascrpt.js"></script>
    <title>ElectriCITY</title>
    <link rel="stylesheet" type="text/css" href="Styles.css">
  </head>
  <body>
  	<h1>ElectriCITY</h1>

    <h2><strong>Items To Buy:</strong></h2>
    <p>Check the box of the item you wish to purchase, and then type in the quantity.  Once you've selected all the items you want simply click add to cart at the bottom.</p>
    <form action="cart.php" id="form1" method="post">
    <table bgcolor="#00FFF7" border="1">
      <th>
        <td>Item</td>
        <td>Price</td>
        <td>Quantity</td>
      </th>

      <!--Taser picture from: https://en.wikipedia.org/wiki/Taser -->
      <tr name="items">
        <td><input type="checkbox" name="first" id="item1" value="35.99" onchange="getTotal()"/></td>
        <td><img src="taser.jpg" border="1" height="100" width="100">Taser</td>
        <td>$35.99</td>
        <td> 
        <?php
        	$taserqty = 0;
        	if ($_SESSION["tasernum"] != 0) {
        		$taserqty = $_SESSION["tasernum"];
        	}
        	echo "<input type=\"text\" name=\"qty1\" id=\"inputBox\" pattern=\"[0-9]{1,2}\" onkeyup=\"getTotal()\" value=\"$taserqty\"/>";
        ?>

        </td>
      </tr>
      <!--Light bulb picture from: https://en.wikipedia.org/wiki/Incandescent_light_bulb -->
      <tr name="items">
        <td><input type="checkbox" name="second" id="items2" value="1.99" onchange="getTotal()"/></td>
        <td><img src="lightbulb.png" border="1" height="120" width="100">Lightbulb</td>
        <td>$1.99</td>
        <td>
        <?php
        	$lightbulbqty = 0;
        	if ($_SESSION["lightbulbnum"] != 0) {
        		$lightbulbqty = $_SESSION["lightbulbnum"];
        	}
        	echo "<input type=\"text\" name=\"qty2\" id=\"inputBox\" pattern=\"[0-9]{1,2}\" onkeyup=\"getTotal()\" value=\"$lightbulbqty\"/>";
        ?>
        </td>
      </tr>
      <!--Toaster picture from: http://www.target.com/c/toasters-kitchen-appliances-dining/-/N-5xtre -->
      <tr name="items">
        <td><input type="checkbox" name="third" id="item3" value="10.99" onchange="getTotal()"/></td>
        <td><img src="toaster.jpg" border="1" height="100" width="100">Toaster</td>
        <td>$10.99</td>
        <td>
		<?php
        	$toasterqty = 0;
        	if ($_SESSION["toasternum"] != 0) {
        		$toasterqty = $_SESSION["toasternum"];
        	}
        	echo "<input type=\"text\" name=\"qty3\" id=\"inputBox\" pattern=\"[0-9]{1,2}\" onkeyup=\"getTotal()\" value=\"$toasterqty\"/>";
        ?>
        </td>
      </tr>
      <!--Computer picture from: http://www.gadgetreview.com/reviews/desktop-computer-reviews -->
      <tr name="items">
        <td><input type="checkbox" name="fourth" id="item4" value="352.99" onchange="getTotal()"/></td>
        <td><img src="computer.jpg" border="1" height="100" width="120">Computer</td>
        <td>$352.99</td>
        <td>
        <?php
        	$computerqty = 0;
        	if ($_SESSION["computernum"] != 0) {
        		$computerqty = $_SESSION["computernum"];
        	}
        	echo "<input type=\"text\" name=\"qty4\" id=\"inputBox\" pattern=\"[0-9]{1,2}\" onkeyup=\"getTotal()\" value=\"$computerqty\"/>";
        ?>
        </td>
      </tr>
    </table>

    <input id="submit" type="submit" name="submit" value="Add To Cart">
    </form>
  </body>
</html>
