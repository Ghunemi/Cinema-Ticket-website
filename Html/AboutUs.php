<html>
    <head>
       <meta charset="utf-8">
       <meta name="description" content="Movie Ticket">
       <meta name="keywords" content="Home,Movies,Venues,Contact Us,About Us,Register,Login,Coming Soon">
       <title>Cinema Ticket::About Us</title>
       <link rel="stylesheet" href="../Css/AboutUs.css">
       <script type = "text/javascript" src="../Js/jQuery.js"> </script>
       <script type="text/javascript" src="../Js/AboutUs.js"></script>
       <script type = "text/javascript" src="../Js/footerValidation.js"> </script>
       <link rel="shortcut icon" href="../images/icon.png" type="image/x-icon">
       <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
	   <link href="https://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet">
       <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
       <button id="topBtn"><i class="fas fa-arrow-up"></i></button>
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
<div class="team-section">
    <div id="text">
    
    </div>
    <script type="text/javascript">
    var i=0,text;
        text = " Want to know more about us ?"
        function typing() {
            if(i<text.length){
                document.getElementById("text").innerHTML += text.charAt(i);
                i++;
                setTimeout(typing,50);
            }
        }
        typing();
    </script>
    <div class="color">
    <span id="hex">#e74c3c</span>
        <button onclick="getNewColor()">Get New Color</button>
    </div>
    <script type="text/javascript">
    function getNewColor(){
        var symbols,color;
        symbols = "0123456789ABCDEF";
        
        color = "#";
        for(var i =0;i<6;i++){
            color = color + symbols[Math.floor(Math.random() * 16)];
        }
        document.body.style.background = color;
        document.getElementById("hex").innerHTML = color;
    }
    </script>
    <span class="border"></span>
    <div class="ps">ٍ
        <a href="#p1"><img src="../images/p1.png" alt=""></a>
        <a href="#p2"><img src="../images/p2.png" alt=""></a>
        <a href="#p3"><img src="../images/p3.png" alt=""></a>
        <a href="#p1"><img src="../images/p4.png" alt=""></a>
    </div>
    <div class="section" id= "p1">
        <span class="name">Cinema Ticket</span>
        <span class="border"></span>
        <p>
        Want to watch a movie without having to wait in a queue ? well, you've come to the right place, Cinema Ticket is an online cinema ticket booking that provides you the easiest, fastest and most important the saftest way to watch your favourite movies, hurry up and life the full experience!
        </p>
    </div>
        ٍٍ
        <div class="section" id= "p2">
        <span class="name">Location</span>
        <span class="border"></span>
        <p>
        We are located at every cinema in egypt, Check the nearest cinema near you and book now!
        </p>
    </div>
    <div class="section" id= "p3">
        <span class="name">Social</span>
        <span class="border"></span>
        <p>
        Follow us on facebook @ https://www.facebook.com/CinemaTicket 
        </p>
    </div>
        <div class="section" id= "p4">
        <span class="name">Security</span>
        <span class="border"></span>
        <p>
            With Cinema Ticket, We guarantee you full security with every information you share with us!
        </p>
    </div>
        <span class="border2"></span>
        <div class="section2">
        <p>
        Want to know more about us?
        </p>
        </div>
        <div class="section3">
        <p>
        What do we do ?
    We are a connection link between you and your favorite movies, we took ticket booking to a whole new<span id="dots">...</span><span id="more"> level, you can now book as many tickets as you like and choose any seat you wish to have, also we have a new feature coming soon that allows you to give a ticket to your beloved ones</span>
        </p>
            <button type="button" id="read" onclick="read()">Read more</button>
            <script type="text/javascript">
            var i=0;
                function read(){
                    if(!i){
                        document.getElementById("more").style.display ="inline";
                        document.getElementById("dots").style.display ="none";
                        document.getElementById("read").innerHTML="Read less";
                        i=1;
                    } else{
                         document.getElementById("more").style.display ="none";
                        document.getElementById("dots").style.display ="inline";
                        document.getElementById("read").innerHTML="Read more";
                        i=0;
                    }
                }
            </script>
        </div>
        </div>
        <div class="footer">
            <h4> STAY CONNECTED </h4>
            <br>
            <p>
                Join over 10,200 people who recieve our latest promotions
            </p>
            <form name="signUp"  onsubmit="validate()">
                <input type="email" name="email" placeholder="Email Address">
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