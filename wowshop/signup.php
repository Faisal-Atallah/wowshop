
<!-- import header -->

<?php include 'header.php';?>



<!--- sign up wrapper div --->

<div class="wrap">

    <!--sign up form container --->

 <div class="container" id="signup_container">

      <!--sign up header --->

     <h3 class="text-left"">Sign up </h3>

     <!---- sign up form  ------>

     <form action="CreateUser.php" method="post"  id="signup_form">

         <!--print result from ajax validation-->

         <div id="results">

         </div> <!-- end div result-->




      <!--- full name and email row --->
     <div class="row">
         <!---- full name column  ----->
         <div class="col-sm-6">

             <div class="form-group">

                 <div class="input-group">

                     <!-- full name icon --->

                     <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i>  </span>
                    <!-- input  -->

                     <input id="fname" type="text" class="form-control" name="fname" placeholder="Full name"/>

                 </div>

             </div>


         </div><!--end full name column -->


         <!--- email column --->

         <div class="col-sm-6">

                <div class="form-group">

             <div class="input-group">

             <!---email icon --->

             <span class="input-group-addon"><i class="fa fa-envelope-o" aria-hidden="true"></i>

              </span>

             <!-- email input  --->

             <input id="email" type="email" class="form-control" name="email" placeholder="Email"/>

         </div>

                </div>

         </div><!---end email column --->

     </div><!--end full name and email row -->


         <!--- password input  ---->

         <!--password and confirm password row --->

 <div class="row">
     <!-- password column--->
     <div class="col-sm-6">
         <div class="form-group">
         <div class="input-group">
            <!-- password icon--->
             <span class="input-group-addon"><i class="fa fa-key" aria-hidden="true"></i>

              </span>
                   <!-- input password--->
             <input id="password" type="password" class="form-control" name="password" placeholder="password" />

         </div>
         </div>

     </div><!-- end password column--->


     <!--- confirm password column ---->
     <div class="col-sm-6">
         <div class="form-group">
         <div class="input-group">
             <!-- password icon -->
             <span class="input-group-addon"><i class="fa fa-check-circle-o" aria-hidden="true"></i>
              </span>
             <!-- password input--->
             <input id="confirm_password" type="password" class="form-control" name="confirm_password" placeholder="Confirm password"/>
         </div>
         </div>
     </div> <!-- end password column-->


         </div> <!-- end password and confirm password row---->


         <!-- date and phone row--->
         <div class="row">
             <!--- date column --->
             <div class="col-sm-6">
                 <div class="form-group">
                 <div class="form-group ">
                          <div class="input-group">
                         <!--date icon --->
                          <span class="input-group-addon"><i class="fa fa-calendar-o"></i></span>
                         <!--date input -->
                         <input id="date" type="date" class="form-control" name="date"  />
                     </div>
                 </div>
                 </div>
             </div> <!--end date column -->






             <!-- input phone -->

             <div class="col-sm-6">


                 <div class="form-group">

                     <div class="input-group">

                         <!-- mobile icon --->

                         <span class="input-group-addon"><i class="fa fa-mobile "></i></span>

                         <!-- phone input -->
                         <input id="phone" type="text" class="form-control" name="phone" placeholder="Phone number"/>

                     </div><!--end input group div -->

                 </div>

             </div> <!---end phone input column --->

     </div><!--end date and phone row -->


         <!-- submit button --->

         <div class="row">

             <div class="col-sm-6">

                 <button id="loginButton" type="submit" class="btn btn-primary">Submit</button>

             </div><!--end button row div --->


     </form><!--close form -->




</div><!--end container div -->


</div><!-- end wrapper div -->


<!-- import footer -->

<?php include 'footer.php';?>





