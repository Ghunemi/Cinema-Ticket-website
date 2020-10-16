<html>
    <head>       
       <meta charset="utf-8">
	   <meta name="description" content="Movie Ticket">
	   <meta name="keywords" content="Home,Movies,Venues,Contact Us,About Us,Register,Login,Coming Soon">
	   <title>Movie Ticket::Register</title>
       <link rel = "stylesheet" href="../Css/register.css">
           <script type = "text/javascript" src="../Js/jQuery.js"> </script>
       <script type = "text/javascript" src="../Js/registerSCRIPT.js"> </script>
       <script type = "text/javascript" src="../Js/registerJQUERY.js"> </script>
       <link rel="shortcut icon" href="../images/icon.png" type="../image/x-icon">
       <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
	   <link href="https://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet">
       <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    </head>
    
    <body>
        <div class="navbar">
            <div class="logo">Cinema Ticket</div>
            <a href="Home.php">Home</a>
            <a href="Movies.php">Movies</a>
        <div class="dropdown">
            <button class="dropbtn">Venues 
            <i class="fa fa-caret-down"></i>
            </button>
        <div class="dropdown-content">
            <a href="cfc.php">CairoFestival City Cinemas</a>
            <a href="p90.php">Point 90 Cinemas</a>
            <a href="citystars.php">CityStars Cinemas</a>
        </div>
        </div>
            <a href="ContactUs.php">Contact Us</a>
            <a href="AboutUs.php">About Us</a>
            <a href="Register.php">Register</a>
            <a href="Login.php">Login</a>
            <a href="Coming%20Soon.php">Coming Soon</a>
    </div>
        <form name="form" onsubmit=" b validation()" action="register_page.php" method="post">
                <h1>Register</h1>
                <h5>Create your account. it's free and only takes a minute.</h5>
            <table>
                <tr>
                    <td>
                        <input class="name" type="text" placeholder= "First Name" name="FirstName">
                        <br><br>
                    </td>
                    <td>
                        <input class="name" type="text" placeholder= "Last Name" name="LastName">
                        <br><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" placeholder= "User Name" name="UserName">
                        <br><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="password" placeholder= "Password" name="Password">
                        <br> <br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="radio" name="Gender"> Male
                        <input type="radio" name="Gender"> Female
                        <br> <br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" placeholder= "Email" name="Email">
                        <br><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="Phone" placeholder= "Phone Number" name="PhoneNumber">
                        <br><br>
                    </td>
                </tr>
                 <tr>
                   
                    <td>
                        <input type="password" placeholder="Credit Card      (optional)" name="CC">
                        <br><br><br><br><br><br>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input class="submitbutton" type="reset" value="Reset" name="reset">
                            <input class="submitbutton" type="submit" value="Register" name="submit"> 
                    </td>
                </tr>
            </table>
        </form>
        <div class="footer">
            <h4> STAY CONNECTED </h4>
            <br>
            <p>
                Join over 10,200 people who recieve our latest promotions
            </p>
            <form name="signUp"  onsubmit="validate()">
                <input type="text" name="email" placeholder="Email Address">
                <input class = "BUT" type="submit" value="Sign-Up" name="submit">
            </form>
            <div class="socialMedia">
                <ul>
                    <li>
                        <a href="https://www.facebook.com"> <img src="../images/icons/Facebook.svg"></a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com"> <img src="../images/icons/Google+.svg"></a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com"> <img src="../images/icons/Linkedin.svg"></a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com"> <img src="../images/icons/Twitter.svg"></a>
                    </li>
                </ul>
            </div>
            <p id="copy">
                Copyright &copy; 2019 Reserved to Cinema Ticket
            </p>
        </div>
    </body> 
</html>