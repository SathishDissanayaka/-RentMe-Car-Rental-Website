<?php

// Include the database connection file
require_once("dbConnection.php");

// Include the header file
require_once("header.php"); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="styleSheet222.css">
</head>
<body>


    <section class="welcome-section">
        <div class="welcome-content">
            <h1>Welcome to RentMe</h1>
            <h3>Rent a car of your choice with us!</h3>
            <a href="reserve.php" class="explore-button">Explore</a>
        </div>
    </section>

    <section id="about" class="about-section">
        <div class="about-content">
            <h2>About Us</h2>
            <p>
             Welcome to RentMe, the ultimate destination for all your car rental needs.
             At RentMe, we believe that the journey is just as important as the destination. 
             That’s why we’ve dedicated ourselves to providing a seamless car rental experience that allows you to explore, commute, and travel on your own terms.d     
            <b> Our mission </b> is simple: to offer you the freedom to drive the way you desire. 
             With a wide range of vehicles to choose from, we cater to all kinds of travelers, 
             whether you’re on a business trip, a family vacation, or just need a quick ride around town.
            
            </p>
        </div>
    </section>

</body>
</html> 
<?php

// Include the footer file
require_once("footer.php");
?>

</body>
</html>
