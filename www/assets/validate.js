$(document).ready(function () {

    $("#login").click(function () {
        var email = $('#email').val();
        var password = $('#password').val();

        if (!validateEmail(email)) {

            alert('Invalid email address');

        }

        if(password == ''){
            alert('Password cannot be empty');
        }

        return false;

    })

    function validateEmail($email) {
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        return emailReg.test($email);
    }

});