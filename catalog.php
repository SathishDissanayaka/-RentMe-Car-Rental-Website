<?php

// Include the database connection file
require_once("dbConnection.php");

// Include the header file
require_once("header.php"); 

// Include the footer file
include 'footer.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental Catalog</title>
    <link rel="stylesheet" type="text/css" href="css/catalog.css">
	
</head>
<body>



    <div class="container">

        <h1>Car Rental Catalog</h1>
       <a class='btn1' href="catalog_add.php">ADD NEW CAR</a>
		<?php
		

// SQL query to select all data from the Cars table
$sql = "SELECT * FROM catalog";

// Execute the query
$result = $con->query($sql);

// Check if there are any rows returned
if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
		
	echo "<div class=\"car\" id=\"".$row["carID"]."\">";
                    echo "<img src=\"". $row["imgURL"]."\" alt=\"Car 1\">";
                    echo "<h2>". $row["model"]."</h2>";
                    echo "<div> ";
                    echo "<table class=\"info\">";
                    echo "<tbody>";

                    echo "<tr>";
                    echo "<td>Price</td>";
                    echo "<td>" . $row["price"]. "</td>";
                    echo "</tr>";

                    echo "<tr>";
                    echo "<td>Year</td>";
                    echo "<td>" . $row["year"]. "</td>";
                    echo "</tr>";

                    echo "</tbody>";
                    echo "</table>";
                    echo "</div>";
                    // echo    "<p>Price: $50/day</p>" ;
                    echo     "<a class='btn2' href=\"reserve.php\">Book Now</a>";
					
                    echo "<form action=\"catalog_delete.php\" method=\"get\">";
                    echo    "<input type=\"hidden\" name=\"carID\" value=\"".$row['carID']."\">";
                    echo    "<button class='btn3' onclick=\"return confirm('Are you sure you want to delete this car?')\">Delete</button>";
                    echo "</form>";
					
                    echo "<form action=\"catalog_edit.php\" method=\"get\">";
					echo    "<input type=\"hidden\" name=\"carID\" value=\"".$row['carID']."\">";
                    echo    "<button class='btn4' >Edit</button>";
                    echo "</form>";
					
                    echo "</div>";
    }
} else {
    echo "0 results";
}

// Close connection
$con->close();
?>

        

</body>
</html>
