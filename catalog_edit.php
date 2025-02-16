<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Catalog Data</title>
    <link rel="stylesheet" type="text/css" href="css/edit.css">
</head>
<body>
    <?php
    // Include the database connection file
    require_once("dbConnection.php");

    // Get id from URL parameter
    $id = $_GET['carID'];

    // Select data associated with this particular id
    $result = mysqli_query($con, "SELECT * FROM catalog WHERE carID = $id");

    // Fetch the next row of a result set as an associative array
    $resultData = mysqli_fetch_assoc($result);

    $model = $resultData['model'];
    $price = $resultData['price'];
    $year = $resultData['year'];
    $imgURL = $resultData['imgURL'];
    ?>

    <div class="container">
        <h1>Edit Catalog Data</h1>
        <a href="catalog.php" class="home-btn">Go Back</a>
        
        <form name="edit" method="post" action="catalog_update.php">
            <table class="edit-table">
                <tr> 
                    <td>Car Model</td>
                    <td><input type="text" name="model" value="<?php echo $model; ?>"></td>
                </tr>
                <tr> 
                    <td>Price</td>
                    <td><input type="text" name="price" value="<?php echo $price; ?>"></td>
                </tr>
                <tr> 
                    <td>Year</td>
                    <td><input type="text" name="year" value="<?php echo $year; ?>"></td>
                </tr>
                <tr> 
                    <td>Image</td>
                    <td><input type="text" name="imgURL" value="<?php echo $imgURL; ?>"></td>
                </tr> 
                     
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><input type="hidden" name="carID" value="<?php echo $id; ?>"></td>
                    <td><input type="submit" name="update" value="Update" class="submit-btn"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
