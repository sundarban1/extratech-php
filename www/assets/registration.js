$(document).ready(function () {
    let reg_name = $('#name');
    let reg_user = $('#username');
    let reg_mobile = $('#mobile');
    let reg_email = $('#email');
    let reg_password = $('#password');

    $("#name").focusout(function(){
        //trim the name for unwanted white spaces
        reg_name.val(reg_name.val().trim());
        if(reg_name.val().length<3){
            window.alert("Please enter your full name -- At least 3 chars");
        }
    });

    $("#name").change(function(){
        let name = reg_name.val();
        let last_char = name.slice(-1);
        let Regex = '/^[^a-z A-Z]*$/';

        if(!Regex.test(last_char)){
            reg_name.val(name.substring(0, name.length - 2));
        }
    });

    $("#reg_user").focusout(function(){
        if(reg_user.val().length<3){
            window.alert("Please use different user name -- At least 5 chars");
        }
        //check AJAX validation here for unique user name [future task]
    });

    $("#reg_user").change(function(){
        let user = reg_user.val();
        let last_char = reg_user.slice(-1);
        let Regex = '/^[^a-zA-Z0-9]*$/';

        if(!Regex.test(last_char)){
            reg_name.val(user.substring(0, user.length - 2));
        }
    });

    $("#reg_mobile").focusout(function(){
        if(reg_user.val().length<10){
            window.alert("Please enter a valid mobile number");
        }
    });

    $("#reg_mobile").change(function(){
        let mobile = reg_mobile.val();
        let last_char = reg_mobile.slice(-1);
        let Regex = '/^[^0-9]*$/';

        if(!Regex.test(last_char)){
            reg_mobile.val(mobile.substring(0, mobile.length - 2));
        }
    });

    $("#reg_email").focusout(function(){
        let emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        
        if(reg_email.val().length<5 || emailReg.test($email)){
            window.alert("Please use valid email -- At least 5 chars");
        }
        //check AJAX validation here for unique email [future task]
    });

    $("#reg_email").change(function(){
        let email = reg_email.val();
        let last_char = reg_email.slice(-1);
        let Regex = '/^[^a-zA-Z0-9@.]*$/';

        if(!Regex.test(last_char)){
            reg_name.val(email.substring(0, email.length - 2));
        }
    });

    $("#reg_password").focusout(function(){
        let password = reg_password.length();
        if(password.val().length<8){
            window.alert("Please enter At least 8 chars long");
        }else{
            let flag_capital = false;
            let flag_small = false;
            let flag_digit = false;
            let flag_special = false;

            for(let i = 0; i<password.length; i++){
                if('A-Z'.test(password[i])){
                    flag_capital = true;
                }
                if('a-z'.test(password[i])){
                    flag_small = true;
                }
                if('0-9'.test(password[i])){
                    flag_digit = true;
                }
                if('~!@#$%^&*()_+-=/*.,<>;:[{]}|'.test(password[i])){
                    flag_special = true;
                }
            }

            if(flag_capital && flag_small && flag_digit && flag_special){
                //do nothing
            }else{
                window.alert("Password must have at least one caps. small, digit and special chars.");
            }
        }
    });

});