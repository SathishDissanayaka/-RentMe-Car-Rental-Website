<?php
// Include the database connection file
require_once("dbConnection.php");

if (isset($_POST['update'])) {
	// Escape special characters in a string for use in an SQL statement
	$id = mysqli_real_escape_string($con, $_POST['id']);
	$name = mysqli_real_escape_string($con, $_POST['name']);
	$mobile = mysqli_real_escape_string($con, $_POST['mobile']);
	$location = mysqli_real_escape_string($con, $_POST['location']);
	$date = mysqli_real_escape_string($con, $_POST['date']);
	$vehicle = mysqli_real_escape_string($con, $_POST['vehicle']);
	$days = mysqli_real_escape_string($con, $_POST['days']);
	$method = mysqli_real_escape_string($con, $_POST['method']);	
	
	// Check for empty fields
	if (empty($name) || empty($mobile) || empty($location) || empty($date) || empty($vehicle) || empty($days) || empty($method)) {
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
	} else {
		// Update the database table
		$result = mysqli_query($con, "UPDATE reservation SET `name` = '$name', `mobile` = '$mobile', `location` = '$location', `date` = '$date', `vehicle` = '$vehicle', `days` = '$days', `method` = '$method' WHERE `id` = $id");
		
		if ($result) {
			// Display success message
			echo "<p><font color='green'>Data updated successfully!</font></p>";
			echo "<a href='reserve.php'>View Result</a>";
		} else {
			// Display error message if update failed
			echo "<font color='red'>Error in updating data.</font>";
		}
	}
}
?>
