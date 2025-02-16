<?php

// Include the database connection file
require_once("dbConnection.php");

// Include the header file
require_once("header.php"); 

// Include the footer file
require_once("footer.php");
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cruises</title>
    <link rel="stylesheet" type="text/css" href="css/catalog.css">
	<link rel="stylesheet" type="text/css" href="src/styles/header.css">
	
	

	
</head>
<body>



    <div class="container">

        <h1>Cruises</h1>
       <a class='btn1' href="cruise_add.php">ADD NEW PACKAGE</a>
		<?php
		
	

// SQL query to select all data from the Cars table
$sql = "SELECT * FROM cruises";

// Execute the query
$result = $con->query($sql);

// Check if there are any rows returned
if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
		
	echo "<div class=\"car\" id=\"".$row["Id"]."\">";
                    echo "<img src=\"". $row["imgURL"]."\" alt=\"Package\" class=\"images\">";
                    echo "<h2>". $row["Name"]."</h2>";
                    echo "<div> ";
                    echo "<table class=\"info\">";
                    echo "<tbody>";

                    echo "<tr>";
                    echo "<td>Price</td>";
                    echo "<td>" . $row["Price"]. "</td>";
                    echo "</tr>";

                    echo "<tr>";
                    echo "<td>Number of people per package</td>";
                    echo "<td>" . $row["noOfPersons"]. "</td>";
                    echo "</tr>";

                    echo "</tbody>";
                    echo "</table>";
                    echo "</div>";
					
                    echo "<form action=\"cruise_delete.php\" method=\"get\">";
                    echo    "<input type=\"hidden\" name=\"Id\" value=\"".$row['Id']."\">";
                    echo    "<button class='btn3' onclick=\"return confirm('Are you sure you want to delete this car?')\">DELETE</button>";
                    echo "</form>";
					
                    echo "<form action=\"cruise_edit.php\" method=\"get\">";
					echo    "<input type=\"hidden\" name=\"Id\" value=\"".$row['Id']."\">";
                    echo    "<button class='btn4' >EDIT</button>";
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
