<?php
// Include the database connection file
require_once("dbConnection.php");

// Get id parameter value from URL
$id = $_GET['Id'];

// Delete row from the database table
$result = mysqli_query($con, "DELETE FROM cruises WHERE Id = $id");

header("Location:cruises.php");
?>