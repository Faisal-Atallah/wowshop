
<!--- import header --->
<?php include 'header.php';?>


<!-- wraper div---->
<div class="wrap">

<div class="container-fluid" id="login_container">

    <!-- login header--->

    <h3 class="text-left">Login</h3>



    <!--- login form ---->

<form id="login_form" method="post" action="LoginValidate.php">



    <div id="message" style="color: #A8A7A7">



    </div>

    <!--- email row ----->
    <div class="row">

        <div class="col-sm-6">

            <div class="input-group">

                <!--- email icon--->
             <span class="input-group-addon"><i class="fa fa-envelope-o fa-2x" aria-hidden="true"></i>

              </span>

                <!--- email input --->
                <input id="email" type="email" class="form-control" name="email" placeholder="email">



            </div>

        </div>


</div>


<!--- password row--->
<div class="row">

    <div class="col-sm-6">

        <div class="input-group">
              <!--- password icon---->
             <span class="input-group-addon"><i class="fa fa-key fa-2x" aria-hidden="true"></i>

              </span>

            <!-- input password--->
            <input id="password" type="password" class="form-control" name="password" placeholder="password">

        </div>

    </div>
</div>

    <!-- row button --->
    <div class="row">
<div class="col-sm-6">


    <!-- submit button --->
    <button id="loginButton" type="submit" class="btn btn-primary">Login </button>

</div>
    </div>



</form><!---end form-->

</div>


</div><!--- end div wrap-->










<?php include 'footer.php';?>
