

<?php
session_start();
require_once ("../dbConnection.php");

$email = $_POST['email'];
$password = $_POST['password'];




$sql = "SELECT * FROM registered_users WHERE Email = '$email'";
$result = mysqli_query($con,$sql);
$num = mysqli_num_rows($result);

if($num > 0){
    $row = mysqli_fetch_assoc($result);
    if($row['Passwords'] == $password ){

        echo "login Successs";
        $_SESSION['isloggedin']=true;
        $_SESSION['user_id']=$row['User_id'];
        header("Location:../userprofile/userprofile.php");
        }


    }

else{
    echo "user doesnt Exsist";
}

if($email=='admin1@mail.com'&&$password=='12345'){
    header("location:../dulakshi/admindash.php");
}
if($email=='emily_c@cc.com'&&$password=='56789'){
    header("Location:../dulakshi/admindash.php");
}
if($email=='olivia_manager@cc.co'&&$password=='01234'){
    header("Location:../dulakshi/admindash.php");
}

?>