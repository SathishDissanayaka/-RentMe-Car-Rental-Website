<?php
// Include the database connection file
require_once("dbConnection.php");

// Get id parameter value from URL
$id = $_GET['carID'];

// Delete row from the database table
$result = mysqli_query($con, "DELETE FROM catalog WHERE carID = $id");

header("Location:catalog.php");
?>