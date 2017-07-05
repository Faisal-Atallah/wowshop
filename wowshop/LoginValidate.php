
<?php  //Start the Session
session_start();
include('configration/db_connect.php');



$email=$_POST['email'];

$password=$_POST['password'];



$sql="SELECT * FROM users WHERE email='$email' AND password='$password'";

$result=mysqli_query($conn,$sql);

 if
  (!$row=mysqli_fetch_assoc($result)){

    echo "Wrong";


 }

else

    {


        $_SESSION['username']=$row['fullname'];


        $_SESSION['logged_in'] = true;
        echo "HELLO";
        header('location:index.php');



 }


