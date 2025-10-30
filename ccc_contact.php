<!-- Chapter 2 Exercise
 	Coast City Contact Page -->
	
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contact Coast City</title>
</head>
<body style="background-color: lightskyblue;">
	<!-- Insert header here later -->
	<?php include "ccc_header.php" ?>

	<h2>Contact Us Today!</h2>
	<br/>
	<label>Please tell us your name:</label>
	<br/>
	<input type="text" name="cust_name">
	<br/>
	<label>What is your email?</label>
	<br/>
	<input type="email" name="cust_email">
	<br/>
	<input type="submit" value="Submit Now!">
	<br/>
	<br/>
	<a href="ccc_about.php">Learn More About Us</a>
	<br/>
	<a href="ccc_home.php">Back to Homepage</a>

	<!-- Add footer here later --> 
	<?php include "ccc_footer.php" ?>
	
</body>
</html>