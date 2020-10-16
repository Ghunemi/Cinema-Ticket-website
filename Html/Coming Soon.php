<html>
    <head>
       <meta charset="utf-8">
	   <meta name="description" content="Movie Ticket">
	   <meta name="keywords" content="Home,Movies,Venues,Contact Us,About Us,Register,Login,Coming Soon">
	   <title>Movie Ticket::Coming Soon</title>
       <link rel="stylesheet" href="../Css/Coming%20Soon.css">
       <link rel="shortcut icon" href="../images/icon.png" type="image/x-icon">
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
        <div class="container">
            <h1>Coming Soon</h1>
            <h2>Give a ticket to your beloved ones.</h2>
            <div class="count">
            <div class="countd">
                <span id="days">00</span>
                DAYS
                </div>
                
                <div class="countd">
                <span id="hours">00</span>
                HOURS
                </div>
                
                <div class="countd">
                <span id="minutes">00</span>
                MINUTES
                </div>
                
                <div class="countd">
                <span id="seconds">00</span>
                SECONDS
                </div>
            </div>
        </div>
        <script type="text/javascript">
        var count= new Date("april 24,2019 00:00:00").getTime();
            var x = setInterval(function(){
                var now = new Date().getTime();
                var d = count - now;
                
                var days = Math.floor(d/(1000*60*60*24));
                var hours = Math.floor((d%(1000*60*60*24))/(1000*60*60));
                var minutes = Math.floor((d%(1000*60*60*24))/(1000*60));
                var seconds = Math.floor((d%(1000*60))/1000);
                
                document.getElementById("days").innerHTML = days;
                document.getElementById("hours").innerHTML = hours;
                document.getElementById("minutes").innerHTML = minutes;
                document.getElementById("seconds").innerHTML = seconds;
            },1000);
        </script>
    </body>
</html>
