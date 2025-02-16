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
//$carID = mysqli_real_escape_string($mysqli, $_POST['carID']);
$pname = mysqli_real_escape_string($con, $_POST['pname']);
$price = mysqli_real_escape_string($con, $_POST['price']);
$persons = mysqli_real_escape_string($con, $_POST['persons']);
$imgURL = mysqli_real_escape_string($con, $_POST['imgURL']);

if (empty($pname) || empty($price) || empty($persons) || empty($imgURL))  {
if (empty($pname)) {
echo "<font color='red'>name field is empty.</font><br/>";
}

if (empty($price)) {
echo "<font color='red'>Price field is empty.</font><br/>";
}

if (empty($persons)) {
echo "<font color='red'>Year field is empty.</font><br/>";
}

if (empty($imgURL)) {
echo "<font color='red'>Image field is empty.</font><br/>";
}

// Show link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
		
} else {
// Insert data into database
	$result = mysqli_query($con, "INSERT INTO cruises (`Name`, `Price`, `noOfPersons`, `imgURL`) 
VALUES ('$pname', '$price', '$persons', '$imgURL')");

		
		if ($result) {
			// Display success message
			echo "<p><font color='green'>Data added successfully!</font></p>";
			echo "<a href='cruises.php'>View Result</a>";
		} else {
			// Display error message if insertion failed
			echo "<font color='red'>Error in adding data.</font>";
		}
	}
}
?>
</body>
</html>
