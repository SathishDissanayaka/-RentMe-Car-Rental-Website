<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add A New Car</title>
    <link rel="stylesheet" type="text/css" href="css/add.css">
</head>
<body>
    <div class="container">
        <h2>Add A New Car</h2>
        <a href="catalog.php" class="go-to-reservations">Go To Catalog Page</a>
        <form action="catalog_add_action.php" method="post" name="add">
            <table>
                <tr> 
                    <td>Model</td>
                    <td><input type="text" name="model"></td>
                </tr>
                <tr> 
                    <td>Price</td>
                    <td><input type="number" name="price"></td>
                </tr>
                <tr> 
                    <td>Year</td>
                    <td><input type="text" name="year"></td>
                </tr>
                <tr> 
                    <td>imgURL</td>
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
