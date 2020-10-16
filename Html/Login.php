<html>
    <head>       
       <meta charset="utf-8">
	   <meta name="description" content="Movie Ticket">
	   <meta name="keywords" content="Home,Movies,Venues,Contact Us,About Us,Register,Login,Coming Soon">
	   <title>Movie Ticket::Login</title>
       <link rel = "stylesheet" href="../Css/Login.css">
       <script type = "text/javascript" src="../Js/jQuery.js"> </script>
        <script type = "text/javascript" src="../Js/loginValidation.js"> </script>
        <script type = "text/javascript" src="../Js/loginjQuery.js"> </script>
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
        
        <div class="loginbox">
            <img src="../images/avatar.png" class="avatar">
            <h1>Login Here</h1>
            <form name="login" onsubmit="loginValidation()" action="login_page.php" method="post">
                <p>Username</p>
                <input type="text" name="user" placeholder="Enter Username">
                <p>Password</p>
                <input type="password" name="pass" placeholder="Enter Password">
                <input type="submit" name="" value="Login">
                <a href="#">Lost your password?</a><br>
                <a href="Register.php">Don't have an account?</a>
            </form>
        </div>
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