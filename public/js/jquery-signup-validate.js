$(function () {

    $('#form_validation').validate({
        rules: {
            firstname       : "required",
            lastname        : "required",
        },
        messages: {
            lastname        : "Please enter your lastname",
        },
        highlight: function (input) {
            $(input).parents('.form-line').addClass('error');
        },
        unhighlight: function (input) {
            $(input).parents('.form-line').removeClass('error');
        },
        errorPlacement: function (error, element) {
            $(element).parents('.form-group').append(error);
        }
    });
});