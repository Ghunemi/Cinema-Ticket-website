<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="Movie Ticket">
    <meta name="keywords" content="Home,Movies,Venues,Contact Us,About Us,Register,Login,Coming Soon">
    <title>Movie Ticket::Contact Us</title>
    <link rel= "stylesheet" href="../Css/ContactUs.css">
    <script type = "text/javascript" src="../Js/jQuery.js"> </script>
    <link rel="shortcut icon" href="../images/icon.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel= "stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
    <div class="box1">
    <a onclick="changecolor('red')" id="red">#FB0404</a>
    <a onclick="changecolor('blue')" id="blue">#0453FB</a>
    <a onclick="changecolor('green')" id="green">#1EFB04</a>
    <a onclick="changecolor('yellow')" id="yellow">#FBFF00</a>
    <a onclick="changecolor('pink')" id="pink">#FB1082</a>
    <a onclick="changecolor('purple')" id="purple">#FB10C9</a>
    </div>
    
    <script type="text/javascript">
    function changecolor(id){
        document.body.style.background = document.getElementById(id).innerHTML;
    }
    </script>
    
    <div class="btn"><i class="fas fa-cog"></i></div>
        <div class="box">
            <h2>Enter a color</h2>
                
                    <div class="txtb">
                        <input type="text" placeholder="#000000" id="hex" />
                            <div class="prev"></div>
                                <button class="apply">Apply</button>
                </div>
            
        </div>
    <script type="text/javascript">
    $('.btn').click(function(){
        $(".box").toggleClass("box-show")
    });
        $('#hex').keyup(function(){
           $('.prev').css("background" ,$('#hex').val())
        });
        $('.apply').click(function(){
            $('body').css("background".$('#hex').val());
        });
    </script>
    <script type="text/javascript" src="../Js/ContactUs.js"></script>
    <button id="topBtn"><i class="fas fa-arrow-up"></i></button>
    <div id="text"></div>
    <script type="text/javascript">
    var i=0,text;
        text= " We are always ready to serve you "
        function typing(){
            if(i<text.length){
                document.getElementById("text").innerHTML += text.charAt(i);
                i++;
                setTimeout(typing,50);
            }
        }
        typing();
    </script>
    <div id="header"></div>
    
    <div class="form">
    <form>
        <input type="text" placeholder="Name" />
        <input type="text" placeholder="E-Mail" />
        <input type="text" id="msg"placeholder="Message" />
        </form>
        <button type="button">Let's Talk</button>
        <div class="section2">
        <p>Don't be a stranger</p>
        </div>
        <div class="section3">
        <p>just say hello</p>
        </div>
        <div class="section">
        <span class="border"></span>
        <p>
            We are here for you, feel free to get in touch with us, our team would like to hear from you, we also guarantee you<span id="dots">...</span><span id="more"> a very fast, responsive and expert team that's waiting for any clarifications you need at any time.</span>
        </p>
            <button1 type="button1" id="read" onclick="read()">Read More</button1>
            <script type="text/javascript">
            var i=0;
                function read(){
                    if(!i){
                        document.getElementById("more").style.display = "inline";
                        document.getElementById("dots").style.display = "none";
                        document.getElementById("read").innerHTML = "Read Less";
                        i=1;
                    }
                    else{
                        document.getElementById("more").style.display = "none";
                        document.getElementById("dots").style.display = "inline";
                        document.getElementById("read").innerHTML = "Read More";
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