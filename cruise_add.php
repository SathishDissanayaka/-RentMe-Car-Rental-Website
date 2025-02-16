<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add A New Package</title>
    <link rel="stylesheet" type="text/css" href="add.css">
</head>
<body>
    <div class="container">
        <h2>Add A New Package</h2>
        <a href="cruises.php" class="go-to-reservations">See Cruises</a>
        <form action="cruise_addAction.php" method="post" name="add">
            <table>
                <tr> 
                    <td>Name</td>
                    <td><input type="text" name="pname"></td>
                </tr>
                <tr> 
                    <td>Price</td>
                    <td><input type="number" name="price"></td>
                </tr>
                <tr> 
                    <td>Number of persons</td>
                    <td><input type="number" name="persons"></td>
                    
                <tr> 
                    <!-- <td>imgURL</td>
                    <td><input type="text" name="imgURL"></td> -->
                    <td>Image URL</td>
                    <td><input type="text" name="imgURL"></td>
                </tr>
               
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
