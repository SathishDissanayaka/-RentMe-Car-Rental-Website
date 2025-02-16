<?php
// Include the database connection file
require_once("dbConnection.php");

// Get id parameter value from URL
$id = $_GET['id'];

// Delete row from the database table
$result = mysqli_query($con, "DELETE FROM reservation WHERE id = $id");

header("Location:reserve.php");

?>