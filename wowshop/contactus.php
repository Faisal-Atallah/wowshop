
<!-- import header -->

<?php include 'header.php';?>

<div class="Cont">

    <div id="Contact" class="container-fluid">

        <div class="row" id="contactheader">
            <!--- contact header ---->
            <h3 class="col-sm-12 text-left">Contact Us</h3>

        </div>


        <div class="col-sm-8" id="sendemail">


            <!--- send email form---->

            <form action="SendEmail.php" id="contact-form"  method="post">


                <!--   name row---->
                <div class="row">
                     <!--- name column--->
                    <div class="col-sm-8">

                         <div class="form-group">
                            <!-- input name---->
                            <input type="text" class="form-control" name="name" placeholder="Name :" id="inpSendEml">

                        </div>

                    </div>

                </div>

                 <!---email row ---->
                <div class="row">
                <!---  email column ---->
                    <div class="col-sm-8">

                        <div class="form-group">

                            <!--- email input--->
                            <input type="email" class="form-control" name="email" placeholder="Email :" id="inpEml">

                        </div>

                        <div class="er"></div>

                    </div>

                </div>

                <!---subject row ---->
                <div class="row">
                   <!--- subject column---->
                    <div class="col-sm-8">

                        <div class="form-group">

                            <!--- subject input----->
                            <input type="text" class="form-control" name="subject" placeholder="Subject :" id="inpSubj">

                        </div>

                    </div>

                </div>

                <!--- message textarea row  ---->

                <div class="row">
                   <!---- message column---->
                    <div class="col-sm-8">

                        <div class="form-group">

                            <!---message textarea ---->
                            <textarea class="form-control" name="message" rows="5" placeholder="Message :" id="inpMsg"></textarea>


                        </div>

                    </div>

                </div>


                <!--- button row ----->

                <div class="row">
                   <!---- button column  ----->
                    <div class="col-sm-8">

                         <div class=" form-group">

                             <!--- submit button ---->

                            <button type="submit" class="col-sm-12" id="BtnSendEml">Send Email</button>


                        </div>

                    </div>

                </div>




            </form>

            <div id="results">

            </div>

        </div>
        <!--======================================================= Contact Detail =============================================================================-->


    </div>
</div>





<!-- import footer -->

<?php include 'footer.php';?>





