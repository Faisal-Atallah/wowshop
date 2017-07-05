
<?php


         $name = $_POST['name'];

         $email = $_POST['email'];

         $from = $name . $email;

         $to = 'faisalatallah93@gmail.com';

         $subject = $_POST['subject'];

         $message = $_POST['message'];

         $retval = mail($to, $subject, $message, $from);


         if ($retval == true) {
             echo "<h1>Message sent successfully...</h1>";
         } else {
             echo "<h1>Message could not be sent...</h1>";
         }



