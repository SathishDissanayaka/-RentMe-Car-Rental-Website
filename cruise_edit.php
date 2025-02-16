<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Catalog Data</title>
    <link rel="stylesheet" type="text/css" href="edit.css">
</head>
<body>
    <?php
    // Include the database connection file
    require_once("dbConnection.php");

    // Get id from URL parameter
    $id = $_GET['Id'];

    // Select data associated with this particular id
    $result = mysqli_query($con, "SELECT * FROM cruises WHERE Id = $id");

    // Fetch the next row of a result set as an associative array
    $resultData = mysqli_fetch_assoc($result);

    $Name = $resultData['Name'];
    $Price = $resultData['Price'];
    $persons = $resultData['noOfPersons'];
    $imgURL = $resultData['imgURL'];
    ?>

    <div class="container">
        <h1>Edit Cruises Data</h1>
        <a href="cruises.php" class="home-btn">Go Back</a>
        
        <form name="edit" method="post" action="cruise_update.php">
            <table class="edit-table">
                <tr> 
                    <td>Name</td>
                    <td><input type="text" name="Name" value="<?php echo $Name; ?>"></td>
                </tr>
                <tr> 
                    <td>Price</td>
                    <td><input type="text" name="Price" value="<?php echo $Price; ?>"></td>
                </tr>
                <tr> 
                    <td>noOfPersons</td>
                    <td><input type="text" name="noOfPersons" value="<?php echo $persons; ?>"></td>
                </tr>
                <tr> 
                    <td>Image</td>
                    <td><input type="text" name="imgURL" value="<?php echo $imgURL; ?>"></td>
                </tr> 
                     
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><input type="hidden" name="Id" value="<?php echo $id; ?>"></td>
                    <td><input type="submit" name="update" value="Update" class="submit-btn"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
