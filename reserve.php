<?php
// Include the database connection file
require_once("dbConnection.php");

// Include the header file
require_once("header.php");

// Include the footer file
include 'footer.php';

// Fetch data in descending order (latest entry first)
$result = mysqli_query($con, "SELECT * FROM reservation ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Reservations</title>
    <link rel="stylesheet" type="text/css" href="reserve.css">
</head>
<body>
    <dev class="container" >
    <h1 class="title">My Reservations</h1>
    <a href="add.php" class="add-btn">Add New Reservation</a>
    <table class="reservation-table">
        <tr>
            <th>Name</th>
            <th>Mobile</th>
            <th>Location</th>
            <th>Date</th>
            <th>Vehicle</th>
            <th>Days</th>
            <th>Method</th>
            <th>Action</th>
        </tr>
        <?php
        // Fetch the next row of a result set as an associative array
        while ($res = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$res['name']."</td>";
            echo "<td>".$res['mobile']."</td>";
            echo "<td>".$res['location']."</td>";
            echo "<td>".$res['date']."</td>";
            echo "<td>".$res['vehicle']."</td>";
            echo "<td>".$res['days']."</td>";
            echo "<td>".$res['method']."</td>";    
    echo "<td><a href=\"edit.php?id=$res[id]\" class='action-btn edit-btn'>Edit</a> | 
<a href=\"delete.php?id=$res[id]\" class='action-btn delete-btn' onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";

            echo "</tr>";
        }
        ?>
</table></dev>



</body>


</html>

    

    