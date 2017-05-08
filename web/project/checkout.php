<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="javascrpt.js"></script>
    <link rel="stylesheet" type="text/css" href="Styles.css">
	<title>Checkout Screen</title>
</head>
<body>
<h1>ElectriCITY</h1>
<h2>Personal Information:</h2>
	<form action="confirmation.php" id="form4" method="post">
      <input type="text" name="firstName" value="First Name"> First Name </input>
        <br>
      <input type="text" name="lastName" value="Last Name"> Last Name </input>
        <br>
      <input type="text" name="phoneNumber" value="0123456789" pattern="[0-9]{10}" > 10 Digit Phone Number xxxxxxxxxx</input>
        <br><br>
      <input type="text" name="Address" value="Address"> Street Address </input>
        <br>
      <input type="text" name="Apartment" value=""> Apartment (optional) </input>
        <br>
      <input type="text" name="City" value="City" > City </input>
        <br>
      <input type="text" name="State" value="ID" pattern="[A-Z]{2}"> 2 Letter State </input>
        <br>
      <input type="text" name="zip" value="01234" pattern="[0-9]{5,9}"> Zip Code </input>
      <br>
      <input type="submit" name="submit4" id="submit4" value="Confirm Purchase">
    </form>
    <form>
    	<br><br><br>
    	<input type="submit" name="submit5" id="submit5" value="Back to Browse">
    </form>
</body>
</html>