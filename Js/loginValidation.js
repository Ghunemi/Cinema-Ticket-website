function loginValidation(){
    
    var username = document.forms["login"]["user"].value;
    var password = document.forms["login"]["pass"].value;
    
    var re = /^[\w]+$/; /*   \w means [a-z A-Z 0-9 _ ] APLHANUMERIC characters */
    
    if (username == ""  || !re.test(username) || username.length < 5) 
        {
            alert("Username must be less than 5 characters, must not contain space and must be filled out");
            document.form.UserName.focus();
            return false;
        }
    
    if (password != "" )
        if(password.length < 7)
        {
            alert("Password must be at least 7 characters, password must be filled out");
            document.form.Password.focus();
            return false;
        }
    return true;
}