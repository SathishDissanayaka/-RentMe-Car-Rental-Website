<?php
require_once ('../dbConnection.php');

    $firstName=$_POST['fName'];
    $lastName=$_POST['lName'];
    $email=$_POST['email'];
    $contact=$_POST['contact_no'];
    $address=$_POST['address'];
    $dob=$_POST['dob'];
    $password=$_POST['password'];

     $checkEmail="SELECT * From registered_users where email='$email'";
     $result=mysqli_query($con,$checkEmail);
     $num_rows = mysqli_num_rows($result);

     if($num_rows > 0){
        echo "Email Address Already Exists !";
     }
     else{
        $insertQuery="INSERT INTO registered_users(First_name,Last_name,Email,Contact_no,Address,Date_of_birth,Passwords)
                       VALUES ('$firstName','$lastName','$email','$contact','$address','$dob','$password')";
        $result2 = mysqli_query($con,$insertQuery);

            if($result2){
                header("location:login.php");
            }
            else{
                echo "Error:".$con->error;
            }
     }



