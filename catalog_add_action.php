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
$model = mysqli_real_escape_string($con, $_POST['model']);
$price = mysqli_real_escape_string($con, $_POST['price']);
$year = mysqli_real_escape_string($con, $_POST['year']);
$imgURL = mysqli_real_escape_string($con, $_POST['imgURL']);

if (empty($model) || empty($price) || empty($year) || empty($imgURL))  {
if (empty($model)) {
echo "<font color='red'>Model field is empty.</font><br/>";
}

if (empty($price)) {
echo "<font color='red'>Price field is empty.</font><br/>";
}

if (empty($year)) {
echo "<font color='red'>Year field is empty.</font><br/>";
}

if (empty($imgURL)) {
echo "<font color='red'>Image field is empty.</font><br/>";
}

// Show link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
		
} else {
// Insert data into database
	$result = mysqli_query($con, "INSERT INTO catalog (`model`, `price`, `year`, `imgURL`) 
VALUES ('$model', '$price', '$year', '$imgURL')");

		
		if ($result) {
			// Display success message
			echo "<p><font color='green'>Data added successfully!</font></p>";
			echo "<a href='catalog.php'>View Result</a>";
		} else {
			// Display error message if insertion failed
			echo "<font color='red'>Error in adding data.</font>";
		}
	}
}
?>
</body>
</html>
