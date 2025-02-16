<?php
require_once("dbConnection.php");

if (isset($_POST['update'])) {
    $Id = mysqli_real_escape_string($con, $_POST['Id']);
    $Name = mysqli_real_escape_string($con, $_POST['Name']);
    $Price = mysqli_real_escape_string($con, $_POST['Price']);
    $persons = mysqli_real_escape_string($con, $_POST['noOfPersons']);
    $imgURL = mysqli_real_escape_string($con, $_POST['imgURL']);

if (empty($Name) || empty($Price) || empty($persons) || empty($imgURL))  {

if (empty($price)) {
echo "<font color='red'>Price field is empty.</font><br/>";
}

if (empty($year)) {
echo "<font color='red'>Year field is empty.</font><br/>";
}

if (empty($imgURL)) {
echo "<font color='red'>Image field is empty.</font><br/>";
}

} else {
$result = mysqli_query($con, "UPDATE cruises SET `Name` = '$Name', `Price` = '$Price', `noOFPersons` ='$persons',`imgURL` = '$imgURL'  WHERE `Id` = '$Id'");

if ($result) {
echo "<p><font color='green'>Data updated successfully!</font></p>";
echo "<a href='cruises.php'>View Result</a>";
} else {
echo "<font color='red'>Error in updating data.</font>";
}
}
}

?>