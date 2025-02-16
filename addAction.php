<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Add Data</title>
</head>
<body>
<?php
// Include the database connection file
require_once("dbConnection.php");

if (isset($_POST['submit'])) {
	// Escape special characters in strings for use in SQL statement	
	$name = mysqli_real_escape_string($con, $_POST['name']);
	$mobile = mysqli_real_escape_string($con, $_POST['mobile']);
	$location = mysqli_real_escape_string($con, $_POST['location']);
	$date = mysqli_real_escape_string($con, $_POST['date']);
	$vehicle = mysqli_real_escape_string($con, $_POST['vehicle']);
	$days = mysqli_real_escape_string($con, $_POST['days']);
	$method = mysqli_real_escape_string($con, $_POST['method']);
		
	// Check for empty fields
	if (empty($name) || empty($mobile) || empty($location) || empty($date) || empty($vehicle) || empty($days) || empty($method)) {
		// Display error message for empty fields
		if (empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		if (empty($mobile)) {
			echo "<font color='red'>Mobile field is empty.</font><br/>";
		}
		if (empty($location)) {
			echo "<font color='red'>Location field is empty.</font><br/>";
		}
		if (empty($date)) {
	     	echo "<font color='red'>Date field is empty.</font><br/>";
		}
		if (empty($vehicle)) {
			echo "<font color='red'>Vehicle field is empty.</font><br/>";
		}
		if (empty($days)) {
			echo "<font color='red'>Days field is empty.</font><br/>";
		}
		if (empty($method)) {
			echo "<font color='red'>Method field is empty.</font><br/>";
		}
		// Show link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// If all the fields are filled (not empty) 

		// Insert data into database
		$result = mysqli_query($con, "INSERT INTO reservation (`name`, `mobile`, `location`, `date`, `vehicle`, `days`, `method`) 
										VALUES ('$name', '$mobile', '$location', '$date', '$vehicle', '$days', '$method')");
		
		if ($result) {
			// Display success message
			echo "<p><font color='green'>Data added successfully!</font></p>";
			echo "<a href='reserve.php'>View Result</a>";
		} else {
			// Display error message if insertion failed
			echo "<font color='red'>Error in adding data.</font>";
		}
	}
}
?>
</body>
</html>
