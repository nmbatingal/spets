$(function () {

    $('#form_validation').validate({
        rules: {
            firstname       : "required",
            lastname        : "required",
        },
        messages: {
            lastname        : "Please enter your lastname",
        },
        /*onfocusout: function(element) {
            var $el = $(element);
            if (!$el.is('select') && element.value === '' && element.defaultValue === '') {
                // for untouched text fields, don't validate on blur
                return;
            }
            $el.valid();
        },*/
        highlight: function (input) {
            $(input).parents('.form-group').addClass('has-error');
        },
        unhighlight: function (input) {
            $(input).parents('.form-group').removeClass('has-error');
        },
        errorPlacement: function (error, element) {
            $(element).parents('.form-group').append(error);
        }
    });
});