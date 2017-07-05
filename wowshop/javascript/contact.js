
$(document).ready(function() {
    $('#contact-form').validate({
        rules: {
            name: {
                minlength: 2,
                required: true
            },
            email: {
                required: true,
                email: true
            },
            subject: {
                minlength: 3,
                required: true
            },
            message: {
                minlength: 2,
                required: true
            }
        },
        highlight: function(element) {
            $(element).closest('.form-group').removeClass('success').addClass('error');
        },
        success: function(element) {
            element.text('OK!').addClass('valid').closest('.form-group').removeClass('error').addClass('success');
        },
        submitHandler: function( form ) {
            $.ajax({
                url : 'SendEmail.php',
                data : $('#contact-form').serialize(),
                type: "POST",
                success : function(data){
                    $("#contact-form").hide('slow');
                    $('html, body').animate({
                        scrollTop: $(".cont").offset().top
                    }, 2000);
                    $('#results').html(data);
                    setTimeout(function () { location.reload(1); }, 1000);
                }
            })
            return false;
        }
    });
});