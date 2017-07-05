<?php

session_start();

 /*database connection file */

 require('configration/db_connect.php');

// If the values are posted, insert them into the database.



 if (isset($_POST['fname']) && isset($_POST['password'])){

    $fullname = $_POST['fname'];

    $email = $_POST['email'];

    $password = $_POST['password'];

    $date=$_POST['date'];

    $phone=$_POST['phone'];



 /* insert user data */

 $query = "INSERT INTO `users` (fullname, email, password,date,phone) VALUES ('$fullname', '$email', '$password','$date' ,'$phone')";

 $result = mysqli_query($conn, $query);

/* check  */

 if($result)

  {
   /* print accept if data is inserted*/
    echo "ACCEPT";

  }

 else {

    /* print RegistrationFailed if some error occur  */
    echo "RegistrationFailed";


     }

                                                       }






?>