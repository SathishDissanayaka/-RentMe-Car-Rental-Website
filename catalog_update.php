<?php
require_once("dbConnection.php");

if (isset($_POST['update'])) {
$carID = mysqli_real_escape_string($con, $_POST['carID']);
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

} else {
$result = mysqli_query($con, "UPDATE catalog SET `model` = '$model', `price` = '$price', `imgURL` = '$imgURL'  WHERE `carID` = $carID");

if ($result) {
echo "<p><font color='green'>Data updated successfully!</font></p>";
echo "<a href='catalog.php'>View Result</a>";
} else {
echo "<font color='red'>Error in updating data.</font>";
}
}
}

?>