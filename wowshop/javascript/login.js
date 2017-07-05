
$(document).ready(function() {
    $('#login_form').validate({

        rules: {


            email: {

                required: true,
                email: true

            },
            password:{
                required:true,
                minlength:8

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
                url : 'LoginValidate.php',

                data : $('#login_form').serialize(),

                type: "POST",

                success: function (data) {

                    if (data == 'HELLO') {


                        // $('#messagess').html('Now You Can Login');

                        $('#message').html('Now You Can Login');

                        setTimeout(function () {

                            window.location.href = "userArea.php";

                        }, 2000);

                    }

                    else if (data == 'Wrong') {

                        $('#message').html('Please check your email');

                    }


                }


            });



            return false;


        }


    });



});
