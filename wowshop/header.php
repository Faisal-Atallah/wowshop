<?php
session_start();
/* Main page with two forms: sign up and log in */
require 'configration/db_connect.php';

?>
 
<!DOCTYPE html>

<html lang="en">


<head>


    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


     <!-- font awesome link-->
    <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>

       <!-- google font link--> 
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    
    <!-- navbar stylesheet link-->
    <link rel="stylesheet" href="css/nav.css"/>
      
      <!-- image slider style sheet-->
    <link rel="stylesheet" href="css/slider.css"/>
     
     <!-- services section style sheet-->
    <link rel="stylesheet" href="css/services.css"/>

    <!-- sign up style sheet-->
    <link rel="stylesheet" href="css/signup.css"/>

    <!-- contact us style sheet-->
    <link rel="stylesheet" href="css/contact.css"/>

   <!-- image gallary style sheet-->
    <link rel="stylesheet" href="css/gallery.css"/>

    <!-- map style sheet-->
    <link rel="stylesheet" href="css/map.css"/>
   
     <!-- footer style sheet-->
    <link rel="stylesheet" href="css/footer.css"/>
     <!-- products page style sheet-->
    <link rel="stylesheet" href="css/products.css"/>



    <title>


        WowShop

    </title>


</head>




<body>

<nav class="navbar navbar-inverse">

    <div class="container-fluid">

        <div class="navbar-header">
            <!-- toggle button-->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">

                <span class="icon-bar"></span>

                <span class="icon-bar"></span>

                <span class="icon-bar"></span>

            </button>

              <!-- website name-->
            <a class="navbar-brand" href="index.php">WowShop</a>

        </div>

        <div class="collapse navbar-collapse" id="myNavbar">

            <ul class="nav navbar-nav">
                 
                 <!-- home page link-->
                <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>

             
                 <!-- about page link-->    
                <li><a href="about.php"><span class="glyphicon glyphicon-info-sign"></span> About</a></li>
                 <!-- contact page link-->
                <li><a href="contactus.php"><span class="glyphicon glyphicon-envelope"></span> Contact</a></li>

                <!--map page link-->
                <li><a href="map.php"><span class="glyphicon glyphicon-map-marker"></span> Map</a></li>


            </ul>



            <ul class="nav navbar-nav navbar-right">
                  <!-- display cart page link-->
                <li><a href="displayCart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>

                 <!-- check if session is set-->
                <?php if (isset($_SESSION['logged_in'])) { ?>
                      <!-- print use name-->
                    <li><a><?php echo $_SESSION['username'];?></a></li>

                <?php } else { ?>
                     <!-- else print sign up page link-->
                    <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>

                <?php } ?>


                <!--check if session is set-->
                <?php if (isset($_SESSION['logged_in'])) { ?>


                    <li class="dropdown">
                             <!--drop down menu -->
                        <a class="dropdown-toggle"data-toggle="dropdown" href=""><i class="fa fa-user fa-2x" aria-hidden="true"></i><span class="caret"></span></a>

                        <ul class="dropdown-menu">
                            <!-- uesr profile page link-->                        
                            <li><a href="userArea.php"> <i class="fa fa-user" aria-hidden="true"></i> Profile
                                </a> </li>

                            <li>

                             <!--logout link-->

                            <li><a href="logout.php"<i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>

                        </ul>
                    </li>

                <?php } else { ?>
                       
                       <!--login link-->
                     <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
 
                <?php } ?>


            </ul>

        </div>

    </div>

</nav>
