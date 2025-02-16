<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link rel="stylesheet" type="text/css" href="css/edit.css">
</head>
<body>
    <?php
    // Include the database connection file
    require_once("dbConnection.php");

    // Get id from URL parameter
    $id = $_GET['id'];

    // Select data associated with this particular id
    $result = mysqli_query($con, "SELECT * FROM reservation WHERE id = $id");

    // Fetch the next row of a result set as an associative array
    $resultData = mysqli_fetch_assoc($result);

    $name = $resultData['name'];
    $mobile = $resultData['mobile'];
    $location = $resultData['location'];
    $date = $resultData['date'];
    $vehicle = $resultData['vehicle'];
    $days = $resultData['days'];
    $method = $resultData['method'];
    ?>

    <div class="container">
        <h1>Edit Data</h1>
        <a href="reserve.php" class="home-btn">Go Back</a>
        
        <form name="edit" method="post" action="editAction.php">
            <table class="edit-table">
                <tr> 
                    <td>Name</td>
                    <td><input type="text" name="name" value="<?php echo $name; ?>"></td>
                </tr>
                <tr> 
                    <td>Mobile</td>
                    <td><input type="text" name="mobile" value="<?php echo $mobile; ?>"></td>
                </tr>
                <tr> 
                    <td>Location</td>
                    <td><input type="text" name="location" value="<?php echo $location; ?>"></td>
                </tr>
                <tr> 
                    <td>Date</td>
                    <td><input type="date" name="date" value="<?php echo $date; ?>"></td>
                </tr>
                <tr> 
                    <td>Vehicle</td>
                    <td>
                        <select name="vehicle">
                            <option value="car" <?php if ($vehicle == 'car') echo 'selected="selected"'; ?>>Car</option>
                            <option value="van" <?php if ($vehicle == 'van') echo 'selected="selected"'; ?>>Van</option>
                            <option value="SUV" <?php if ($vehicle == 'SUV') echo 'selected="selected"'; ?>>SUV</option>
                            <option value="E car" <?php if ($vehicle == 'e-car') echo 'selected="selected"'; ?>>E-car</option>
                        </select>
                    </td>
                </tr>
                <tr> 
                    <td>Days</td>
                    <td><input type="number" name="days" value="<?php echo $days; ?>"></td>
                </tr>
                <tr> 
                    <td>Method</td>
                    <td>
                        <select name="method">
                            <option value="cash" <?php if ($method == 'cash') echo 'selected="selected"'; ?>>Cash</option>
                            <option value="credit_card" <?php if ($method == 'credit_card') echo 'selected="selected"'; ?>>Credit Card</option>
                            <option value="debit_card" <?php if ($method == 'debit_card') echo 'selected="selected"'; ?>>Debit Card</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><input type="hidden" name="id" value="<?php echo $id; ?>"></td>
                    <td><input type="submit" name="update" value="Update" class="submit-btn"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
