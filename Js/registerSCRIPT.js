function validation()
{
    var firstname = document.forms["form"]["FirstName"].value;
    var lastname = document.forms["form"]["LastName"].value;
    var username = document.forms["form"]["UserName"].value;
    var password = document.forms["form"]["Password"].value;
    var gender = document.forms["form"]["Gender"].value;
    var email = document.forms["form"]["Email"].value;
    var phone = document.forms["form"]["PhoneNumber"].value;
    var CC = document.forms["form"]["CC"].value;
    
    
    var re = /^[\w]+$/; /*   \w means [a-z A-Z 0-9 _ ] APLHANUMERIC characters */
    var atPosition = email.indexOf("@"); /*Used to determine the location of @ in Email validation */
    var dotPosition =  email.lastIndexOf("."); /*User to determine the location on . in Email validation */
    

    
    if (firstname == "" || !re.test(firstname) || firstname.length >= 25 ) 
        {
            alert("First name must be less than 25 characters, must not contain space and must be filled out");
            document.form.FirstName.focus();
            window.history.go();
            return false;
        }
    
    if (lastname =="" || !re.test(lastname) || lastname.length >= 25)
        {
            alert("Last name must be less than 25 characters, must not contain space and must be filled out");
            document.form.LastName.focus();
            window.history.go();
            return false;
        }
    
    if (username == ""  || !re.test(username) || username.length >= 15) 
        {
            alert("Username must be less than 15 characters, must not contain space and must be filled out");
            document.form.UserName.focus();
            window.history.go();
            return false;
        }
    
    if (password == "" || password.length <= 7)
        {
            alert("Password must be at least 7 characters, password must be filled out");
            document.form.Password.focus();
            window.history.go();
            return false;
        }
    
    if (gender == "") 
        {
            alert("Gender must be chosen");
            document.form.Gender.focus();
            window.history.go();
            return false;
        }
    
    if (email == "" || atPosition < 1 || (dotPosition - atPosition < 2) )
        {
            alert("Enter a correct email address");
            document.form.Email.focus();
            window.history.go();
            return false;
        }
    if (phone == "" || isNaN(phone) || phone.length != 11) 
        {
            alert("Phone number must be valid number");
            document.form.PhoneNumber.focus();
            window.history.go();
            return false;
        }
    
    if (CC != "")
        if(CC.length != 16 || isNaN(CC))
            {
                alert("Enter a valid credit card number");
                document.form.CC.focus();
                window.history.go();
                return false;
            }
        return true;
}