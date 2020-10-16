<html>
    <head>
       <meta charset="utf-8">
	   <meta name="description" content="Movie Ticket">
	   <meta name="keywords" content="Home,Movies,Venues,Contact Us,About Us,Register,Login,Coming Soon">
	   <title>Movie Ticket::CFC</title>
       <link rel="shortcut icon" href="../images/icon.png" type="../image/x-icon">
       <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
       <link href="https://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet">
       <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
       <link rel="stylesheet" href="../Css/Venues.css">
       <script type = "text/javascript" src="../Js/jQuery.js"> </script>
       <script type = "text/javascript" src="../Js/VenuesJQuery.js"> </script>
       <script type="text/javascript" src="../Js/cfc.js"></script>
       <script async defer src="https://maps.googleapis.com/maps/api/js?o0Yh0t1c4x4DqXBcyAZAWw&callback=image_map"></script>
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

        <br>
        <br>
        <br>
        
        <div class="Box9">
            <h1>Cairo Festival City Cinemas</h1>
        </div>
        
       
           
        
          
         
 <div class="slideShow">
            <img name="slide">
        </div>      
        
        
        
        <div class="row">
             <div class="Box8">
            <h1>Playing Now</h1>
        </div>
         
            <br>
            <br>
            <br>
            <br>
            <br>
                <div class="column">
                    
                    
                    <img src="../images/dark.jpg" alt="DARK PHEONIX">
                     <figcaption class= "title">
                   <input type=button onClick="location.href='https://www.youtube.com/watch?v=1-q8C_c-nlM'" value='Trailer'>
                    </figcaption>
                </div> 

                <div class="column">
                    <img src="../images/aqua2.jpg" alt="AQUA MAN">
                     <figcaption class= "title">
                    <input type=button onClick="location.href='https://www.youtube.com/watch?v=h-k0-Z9b4Cw'" value='Trailer'>
                    </figcaption>
                </div>
                <div class="column">
                    <img src="../images/cap1.jpg" alt="CAPTAIN MARVEL">
                     <figcaption class= "title">
                    <input type=button onClick="location.href='https://www.youtube.com/channel/UCvC4D8onUfXzvjTOM-dBfEA'" value='Trailer'>
                    </figcaption>
                </div>
            
                <div class="column">
                    <img src="../images/glass1.jpg" alt="GLASS">
                     <figcaption class= "title">
                    <input type=button onClick="location.href='https://www.youtube.com/watch?v=95ghQs5AmNk'" value='Trailer'>
                    </figcaption>
                </div>
        </div>
        
        
            <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        
        
          <div class="row">
             <div class="Box8">
                 
           <h1>Location</h1>
                 
            </div>
           
            <br>
            <br>
            <br>
            <br>
            <br>
        
          
              <div class="image_map">
      
                <div id="map"></div>
                  
              </div>
        </div>
        <div class ="description">
        
            <h2>
            Cairo Festival city Cinemas is the first major cinema multiplex in the Fifth Settlement, New Cairo, located on the Ring Road in Cairo, inside the Cairo Festival city mall.
            </h2>
            
            <br>
            <br>
            <h2>
            
            Our aim is to offer you the ultimate cinema experience, with 7 premium screen halls equipped with the latest movie projection and sound technology. 
            </h2>
            
            <br>
            <br>
        
            
            <h3>
             In Cairo Festival city Cinemas, you will be able to catch the latest and hottest movies throughout the year!
            </h3>
           
            <br>
            <br>
            
            <h3>
            Address: Cairo Festival city Mall in front of DownTown Mall - New Cairo
            </h3>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        
        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
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