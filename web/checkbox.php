<?php
	$cbinput1 = "<br><input name=\"continents[]\" type=\"checkbox\" value=\"";
	$cbinput2 = "\"/>";
	
	$continent = array("North America", "South America", "Europe", "Asia", "Australia", "Africa", "Antarctica");
	for ($i=0; $i < count($continent); $i++) { 
		echo $cbinput1, $continent[$i], $cbinput2, $continent[$i];
	}
?>