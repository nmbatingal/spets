$(function () {

	$('.list-user').on('click', function(e) {
        e.preventDefault();

        $.get($(this).attr('href') , function( data ) {
            $('.u_username').text(data['username']);
            $('input.u_fname').val(data['firstname']);
            $('input.u_mname').val(data['middlename']);
            $('input.u_lname').val(data['lastname']);
            $('input.u_email').val(data['email']);
        });
    });
    
	$('#form-user').validate({
        rules: {
            u_fname    : "required",
            u_lname    : "required",
            u_email    : {
                required   : true,
                email      : true
            },
        },
        messages: {
            firstname   : "Please enter your firstname",
            lastname    : "Please enter your lastname",
            email       : "Please enter a valid email address",
        },
        onfocusout: function(element) {
            this.element(element);  
        },
        onkeyup: function(element) {
            $(element).valid();
        },
        highlight: function (element) {
            $(element).parents('.form-group').addClass('has-success').removeClass('has-error');
            $(element).parents('.form-group').addClass('has-error').removeClass('has-success');
        },
        unhighlight: function (element) {
            $(element).parents('.form-group').addClass('has-error').removeClass('has-success');
            $(element).parents('.form-group').addClass('has-success').removeClass('has-error');
        },
        errorElement: "p",
        errorPlacement: function (error, element) {
            error.addClass( "help-block" );

            $(element).parents('.col-sm-9').append(error);
        }
    });
});