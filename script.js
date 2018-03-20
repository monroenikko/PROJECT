// JavaScript Document

$('document').ready(function() {

    $("#register-form").validate({
        rules: {
            user_name: {
                required: true,
                minlength: 3
            },
            password: {
                required: true,
                minlength: 8,
                maxlength: 15
            },
            cpassword: {
                required: true,
                equalTo: '#password'
            },
            user_email: {
                required: true,
                email: true
            },
        },
        messages: {
            user_name: "please enter user name",
            password: {
                required: "please provide a password",
                minlength: "password at least have 8 characters"
            },
            user_email: "please enter a valid email address",
            cpassword: {
                required: "please retype your password",
                equalTo: "password doesn't match !"
            }
        },
        submitHandler: submitForm
    });
    /* validation */

    /* form submit */
    function submitForm() {
        var data = $("#register-form").serialize();

        $.ajax({
            type: 'POST',
            url: 'register.php',
            data: data,
            beforeSend: function() {
                $("#error").fadeOut();
                $("#btn-submit").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
            },
            success: function(data) {
                if (data == 1) {

                    $("#error").fadeIn(1000, function() {


                        $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Sorry email already taken !</div>');

                        $("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account');

                    });

                } else if (data == "registered") {
                    // this.hide('index.html');
                    $("#btn-submit").html('<img src="btn-ajax-loader.gif" /> &nbsp; Signing Up ...');
                    setTimeout('$(".form-signin").fadeOut(500, function(){ $(".signin-form").load("success.php"); }); ', 5000);


                } else {

                    $("#error").fadeIn(1000, function() {

                        $("#error").html('<div class="alert alert-danger"><span class="glyphicon glyphicon-info-sign"></span> &nbsp; ' + data + ' !</div>');

                        $("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account');

                    });

                }
            }
        });
        return false;
    }
    /* form submit */
});

// login
$('document').ready(function() {
    /* validation */
    $("#login-form").validate({
        rules: {
            password: {
                required: true,
            },
            user_email: {
                required: true,
                email: true
            },
        },
        messages: {
            password: {
                required: "please enter your password"
            },
            user_email: "please enter your email address",
        },
        submitHandler: submitForm
    });
    /* validation */

    /* login submit */
    function submitForm() {
        var data = $("#login-form").serialize();

        $.ajax({
            type: 'POST',
            url: 'login_process.php',
            data: data,
            beforeSend: function() {
                $("#error").fadeOut();
                $("#btn-login").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
            },
            success: function(response) {
                if (response == "ok") {

                    $("#btn-login").html('<img src="btn-ajax-loader.gif" /> &nbsp; Logging In ...');
                    setTimeout(' window.location.href = "home.php"; ', 4000);
                } else {

                    $("#error").fadeIn(1000, function() {
                        $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; ' + response + ' !</div>');
                        $("#btn-login").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Log In');
                        window.alert("error login");
                    });
                }
            }
        });
        return false;
    }
    /* login submit */
});