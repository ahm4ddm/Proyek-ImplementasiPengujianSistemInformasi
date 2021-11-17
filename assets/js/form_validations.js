$(document).ready(function () {
    // login
    $("#log_form").validate({
        rules: {
            user_name: {
                required: true
            },
            password: {
                required: true
            }
        },
        messages: {
            user_name: {
                required: "Please input username!"
            },
            password: {
                required: "Please input password!"
            }
        }
    });

});
$(document).ready(function () {
    //register
    $("#reg_form").validate({
        rules: {
            "name_full": {
                required: true
            },
            "user_nameR": {
                required: true
            },
            "user_email": {
                required: true
            },
            "user_password1": {
                required: true,
                minlength: 8
            },
            "user_password2": {
                minlength: 8,
                equalTo: "#user_password1"
            }
        },
        messages: {
            "name_full": {
                required: "Please input full name!"
            },
            "user_nameR": {
                required: "Please input username!",
            },
            "user_email": {
                required: "Please input email"
            },
            "user_password1": {
                required: "Please input password!"
            },
            "user_password2": {
                required: "Please input password confirmation!",
                equalTo: "Password not match!"
            }
        }
    })
});
