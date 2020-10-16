function validate()
{
    var email = document.forms["signUp"]["email"].value;
    
    var atPosition = email.indexOf("@"); /*Used to determine the location of @ in Email validation */
    var dotPosition =  email.lastIndexOf("."); /*User to determine the location on . in Email validation */
    
     if (email == "" || atPosition < 1 || (dotPosition - atPosition < 2) )
        {
            alert("Enter a correct email address");
            document.form.email.focus();
            return false;
        }
    return false;
}