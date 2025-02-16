
<?php
include("dbConnection.php");

// Include the header file
require_once("header.php");

// Include the footer file
include 'footer.php';?>
<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $Email = $_POST['email'];
    $msg = $_POST['message'];

    $insert ="INSERT INTO `inquiry`(`Full name`, `Email`, `Message`)  VALUES ('$name','$Email','$msg')";
    $newdata =mysqli_query($con,$insert);

    if(!$newdata){
        die('could not connect:');
    }   
    mysqli_close($con);
}




include("dbConnection.php");

if(isset($_POST['edit'])){
    $name = $_POST['name'];
    $Email = $_POST['email'];
    $msg = $_POST['message'];

    $edit ="UPDATE `inquiry` SET `Full name`='[$name]',`Email`='[$Email]',`Message`='[$msg]' where `Email` = '$Email'";
    $newdata =mysqli_query($con,$edit);

    if(!$newdata){
        die('could not connect:');
    }   
    mysqli_close($con);
}



include("dbConnection.php");


if(isset($_POST['delete'])){
    $name = $_POST['name'];
    $Email = $_POST['email'];
    $msg = $_POST['message'];

    $delete ="DELETE FROM `inquiry` WHERE `Email` = '$Email'";
    $newdata =mysqli_query($con,$delete);

    if(!$newdata){
        die('could not connect:');
    }   
    mysqli_close($con);
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Contact us page</title>

        <link rel="stylesheet" href="stylescontact.css">
    </head>

    <body>
     <div class="navi">


            <ul>
            
                <li><a  href="">Home</a></li>
                <li><a href="">Cars</a></li>
                <li><a href="">My Booking</a></li>        
    
            </ul> 
    
    
        </div> 
        <section class="contact">
            <div class="content">
                <h2>Contact Us</h2><br><br>
                <p>Welcome to RENT ME! We value your inquiries, feedback, and suggestions Whether you have questions about our services, need assistance with bookings, or want to share your experience, we're here to help.</p>
            </div>
            <div class="container">
                <div class="contactinfo">
                    <div class="box">
                        
                            <div class="text">
                                <h3>Address</h3>
                                <p>No 15,Kandy road,<br>Kaduwela</p>
                            </div><br><br>
                        
                        <div class="box">
                            
                                <div class="text">
                                    <h3>Email</h3>
                                    <p>inforentme@gmail.com</p>
                                </div>
                        </div>
                    </div>    
                    <div class="box">
                        
                            <div class="text">
                                <h3>Phone</h3>
                                <p>+94 718547834 <br> +94 112756435</p>
                            </div>
                    </div>
                </div>


                <div class="contactform">
                    <form action="#" method="POST">

                        <h2>Inquiry</h2><br>
                        <div class="inputbox">
                            <h4>Full Name</h4>
                            <input type="text"  id="fname" name="name" required>
                    
                            

                        </div>
                        <div class="inputbox">
                            <h4>Email</h4>
                            <input type="text" id="mail" name="email" required>
                            
                            

                        </div>
                        <div class="inputbox">
                            <h4>Type your message</h4>

                            <textarea id="msg" name="message" required></textarea>
                           
                            
                        </div><br><br>
                        <div class="inputbox">
                            <input type="submit" name="submit" value="submit" onclick="ValidateInquiry()">
                            

                        </div>
                        <div class="inputbox">
                            <input type="submit" name="edit" value="Edit inquiry">
                            

                        </div>
                        
                        <div class="inputbox">
                            <input type="submit" name="delete" value="Delete inquiry">
                            

                        </div>
                        
                        
                    </form>
                    
                </div>
            </div>
            
        </section>

        <script>
            function ValidateInquiry()
            {
                alert("Inquiry submitted succesfully");
            }








        </script>

    

</html>