<!doctype html>
<html>
<head>

</head>
<body>
	<form id="form1" action="results.php" method="POST">
		<input type="email" name="email">Email
		<br>
		<input type="text" name="name">Name
		<br>
		<input type="radio" name="major" value="CS">Computer Science
		<br>
		<input type="radio" name="major" value="WDD">Web Design and Development
		<br>
		<input type="radio" name="major" value="CIT">Computer Information Technology
		<br>
		<input type="radio" name="major" value="CE">Computer Engineering
		<br>
		<?php 
			require "checkbox.php";
		?>
		<br>
		<input type="submit" name="submit" value="Submit">
		<br>
		
	</form>

	<textarea cols="30" form="form1" row="10" name="textbox"></textarea>
</body>
</html>