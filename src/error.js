
function RegErrorHandler(error){
    var usernamebox = document.getElementById("reg-username");
    var emailbox = document.getElementById("reg-email");
    var passbox = document.getElementById('reg-password');
    var passboxconfirm = document.getElementById('reg-password-confirm');

    if(error == 'Username is required' || error =='Username must be in between 7 and 21 characters ' 
    || error =="Username can't contain special symbols " || error == 'Username already exists' ){
        usernamebox.style.borderColor = 'red';
        usernamebox.placeholder = error;
    }
    if(error =='Email is required' || error == 'Invalid e-mail format '
    || error =='email already exists'){
        emailbox.style.borderColor = 'red';
        emailbox.placeholder = error;
    }
    if(error == 'Password is required' ||error =='Passwords do not match'
    ||error == "Password must be more than 6 characters"){
        passbox.style.borderColor = 'red';
        passboxconfirm.style.borderColor = 'red';

        passbox.placeholder = error;
        passboxconfirm.placeholder = error;
    }

}

function loginErrorHandler(error){
    var usernamebox = document.getElementById("login-username");
    var passwordbox = document.getElementById("login-password");
    
    if(error == "Username is required" || error == "Wrong username/password combination"){
        usernamebox.style.borderColor = 'red';
        usernamebox.placeholder = error;
    }

    if(error == "Password is required" || error == "Wrong username/password combination"){
        passwordbox.style.borderColor = 'red';
        passwordbox.placeholder = error;
    }

}