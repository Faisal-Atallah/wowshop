
$(document).ready(function() {
    $('#signup_form').validate({


        rules: {

            fname: {

                minlength: 3,


                required: true


            },

            email: {

                required: true,

                email: true


            },

            phone:{

                required:true,


                minlength:10



            },

            password:{
                required:true,
                minlength:8

            },

            confirm_password:{
                required:true,
                equalTo: "#password"
            }
            ,

            date:{
                required:true
            }

        },





        // validation rules for registration form
        errorClass: "error-class",
        validClass: "valid-class",
        errorElement: 'div',
        errorPlacement: function(error, element) {
            if(element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        },
        onError : function(){
            $('.input-group.error-class').find('.help-block.form-error').each(function() {
                $(this).closest('.form-group').addClass('error-class').append($(this));
            });
        },
        submitHandler: function( form ) {
            $.ajax({
                url : 'CreateUser.php',

                data : $('#signup_form').serialize(),

                type: "POST",

                success: function (data) {

                    if (data == 'ACCEPT') {


                        // $('#messagess').html('Now You Can Login');

                        $('#results').html('Now You Can Login');
                        setTimeout(function () {

                            window.location.href = "/wowshop/login.php";

                        }, 2000);

                    }

                    else if (data == 'RegistrationFailed') {


                        $('#results').html('RegistrationFailed')

                    }
                }


            });



            return false;


        }


    });



});
