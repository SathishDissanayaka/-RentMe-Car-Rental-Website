<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add A Reservation</title>
    <link rel="stylesheet" type="text/css" href="css/add.css">
</head>
<body>
    <div class="container">
        <h2>Add A Reservation</h2>
        <a href="reserve.php" class="go-to-reservations">Go To Reservations Page</a>
        <form action="addAction.php" method="post" name="add">
            <table>
                <tr> 
                    <td>Name</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr> 
                    <td>Mobile</td>
                    <td><input type="text" name="mobile"></td>
                </tr>
                <tr> 
                    <td>Location</td>
                    <td><input type="text" name="location"></td>
                </tr>
                <tr> 
                    <td>Date</td>
                    <td><input type="date" name="date"></td>
                </tr>
                <tr> 
                    <td>Vehicle</td>
                    <td>
                        <select name="vehicle">
                            <option value="car">Car</option>
                            <option value="van">Van</option>
                            <option value="suv">SUV</option>
                            <option value="E car">E-Car</option>
                        </select>
                    </td>
                </tr>
                <tr> 
                    <td>Days</td>
                    <td><input type="number" name="days"></td>
                </tr>
                <tr> 
                    <td>Method</td>
                    <td>
                        <select name="method">
                            <option value="cash">Cash</option>
                            <option value="credit_card">Credit Card</option>
                            <option value="debit_card">Debit Card</option>
                        </select>
                    </td>
                </tr>
                <tr> 
                    <td></td>
                    <td><input type="submit" name="submit" value="Add" class="btn"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
