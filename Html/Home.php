<html>
    <head>       
       <meta charset="utf-8">
	   <meta name="description" content="Movie Ticket">
	   <meta name="keywords" content="Home,Movies,Venues,Contact Us,About Us,Register,Login,Coming Soon">
	   <title>Movie Ticket</title>
       <link rel = "stylesheet" href="../Css/Home.css">
       <script type = "text/javascript" src="../Js/jQuery.js"> </script>
       <script type = "text/javascript" src="../Js/home.js"> </script>
       <script type = "text/javascript" src="../Js/HOMEjQuery.js"> </script>
       <script type = "text/javascript" src="../Js/footerValidation.js"> </script>
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
    
        <div class="slideShow">
            <img name="slide">
        </div>
        
        <div class="BoxO">
            <h1>BOX OFFICE</h1>
        </div>
            
        <div class="row">
            <div class="column">
                <img src="getimage.php" width="100%" height="100%" alt="How to train your dragon">
                <figcaption class= "title">
                    <p> 
                        <?php
                            
                                $conn = @mysqli_connect('localhost','root','');
                                if(!$conn)
                                {
                                    die("database connection failed" . mysqli_connect_error());   
                                }
                                
                                $mydb = mysqli_select_db($conn,'cinema');

                                if(!$mydb)
                                    {
                                        die("Cannot select database" . mysqli_error());
                                    }
                        
                                $query = "Select Description FROM movies";
                                $result =mysqli_query($conn,$query) or die (mysqli_error($conn));
                                
                                while ($row = mysqli_fetch_row($result))
                                {
                                    foreach ($row as $key => $value)
                                    print ($value);
                                    break;
                                }
                        ?>
                    </p>
                    <button onclick="window.location.href = '../Html/Booking.php'">Book</button>
                </figcaption>
            </div> 

            <div class="column">
                <img src="getimage2.php" alt="Happy death day 2U">
                <figcaption class= "title">
                    <p>
                        <?php
                            $conn = @mysqli_connect('localhost','root','');
                            if(!$conn)
                                {
                                    die("database connection failed" . mysqli_connect_error());   
                                }
                                
                            $mydb = mysqli_select_db($conn,'cinema');

                            if(!$mydb)
                                {
                                    die("Cannot select database" . mysqli_error());
                                }
                        
                            $query = "Select Description FROM movies WHERE movieID = 577";
                            $result =mysqli_query($conn,$query) or die (mysqli_error($conn));
                                
                            while ($row = mysqli_fetch_row($result))
                                {
                                    foreach ($row as $key => $value)
                                    print ($value);
                                    break;
                                }   
                        ?>
                    </p>
                    <button onclick="window.location.href = '../Html/Booking.php'">Book</button>
                </figcaption> 
            </div>
                
            <div class="column">
                <img src="../images/posters/3.jpg" alt="The lego movie 2">
                <figcaption class= "title">
                    <p>It's been five years since everything was awesome and the citizens are facing a huge new threat: Lego Duplo invaders from outer space, wrecking everything faster            than they can rebuild.    
                        <br><br><br>Director:<br>Mike Mitchell
                        <br><br>Writers:<br>Phil Lord (screenplay by)<br>Christopher Miller (screenplay by) 
                        <br><br><br>Stars:<br>Chris Pratt, Elizabeth Banks, Will Arnett 
                    </p>
                    <button onclick="window.location.href = '../Html/Booking.php'">Book</button>
                </figcaption> 
            </div>
            
            <div class="column">
                <img src="../images/posters/4.jpg" alt="Fighting with my family">
                <figcaption class= "title">
                    <p> A former wrestler and his family make a living performing at small venues around the country while his kids dream of joining World Wrestling Entertainment.
                        <br><br><br><br>Director:<br>Stephen Merchant
                        <br><br><br>Writer:<br>Stephen Merchant
                        <br><br><br>Stars:<br>Dwayne Johnson, Lena Headey, Vince Vaughn
                    </p>
                    <button onclick="window.location.href = '../Html/Booking.php'">Book</button>
                </figcaption> 
            </div>
        </div>
        
        <div class="row">
            <div class="column">
                <img src="../images/posters/9.jpg" alt="Alaadin">
                <figcaption class= "title">
                    <p>When a street urchin finds a lamp with a genie inside, he uses the lamp to turn himself into a prince in order to win the heart of a beautiful princess. But an evil      vizier is after the lamp too.
                        <br><br><br>Director:<br>Guy Ritchie
                        <br><br>Writers:<br>John August (screenplay by)<br>Guy Ritchie (screenplay by)
                        <br><br><br>Stars:<br>Will Smith, Naomi Scott, Alan Tudyk
                    </p>
                    <button onclick="window.location.href = '../Html/Booking.php'">Book</button>
                </figcaption> 
            </div>
            
            <div class="column">
                <img src="../images/posters/6.jpg" alt="What men want">
                <figcaption class= "title">
                    <p>
                        A woman is boxed out by the male sports agents in her profession, but gains an unexpected edge over them when she develops the ability to hear men's thoughts.
                        <br><br><br>Director:<br>Adam Shankman
                        <br><br>Writers:<br>Tina Gordon (screenplay by)<br>Peter Huyck (screenplay by)
                        <br><br><br>Stars:<br>Taraji P. Henson, Kristen Ledlow, Josh Brener
                    </p>
                    <button onclick="window.location.href = '../Html/Booking.php'">Book</button>
                </figcaption> 
            </div>
            
            <div class="column">
                <img src="../images/posters/20.jpg" alt="The lion king">
                <figcaption class= "title">
                    <p>
                       all-new “The Lion King” journeys to the African savanna where a future king is born. Simba idolizes his father, King Mufasa, and takes to heart his own royal destiny. But not everyone in the kingdom celebrates the new cub's arrival
                       <br><br><br>Director:<br>Jon Favreau
                       <br><br>Writers:<br>Jeff Nathanson (screenplay)<br>Brenda Chapman (story)
                       <br><br>Stars:<br>Chiwetel Ejiofor, Seth Rogen, Donald Glover
                    </p>
                    <button onclick="window.location.href = '../Html/Booking.php'">Book</button>
                </figcaption> 
            </div>
            
            <div class="column">
                <img src="../images/posters/26.jpg" alt="Captin marvel">
                <figcaption class= "title">
                    <p>
                        Carol Danvers becomes one of the universe's most powerful heroes when Earth is caught in the middle of a galactic war between two alien races.
                        <br><br><br>Directors:<br>Anna Boden, Ryan Fleck
                        <br><br>Writers:<br>Anna Boden (screenplay by)<br>Ryan Fleck (screenplay by)
                        <br><br><br>Stars:<br>Brie Larson, Samuel L. Jackson<br>Ben Mendelsohn
                    </p>
                    <button onclick="window.location.href = '../Html/Booking.php'">Book</button>
                </figcaption> 
            </div>
        </div>
        
        <div class="row">
            <div class="column">
                <img src="../images/posters/17.jpg" alt="Pokémon Detective Pikachu">
                <figcaption class= "title">
                    <p>
                        In a world where people collect Pokémon to do battle, a boy comes across an intelligent talking Pikachu who seeks to be a detective.
                        <br><br><br>Director:<br>Rob Letterman
                        <br><br>Writers:<br>Dan Hernandez (screenplay by)<br>Benji Samit (screenplay by)
                        <br><br><br>Stars:<br>Ryan Reynolds, Suki Waterhouse,<br>Kathryn Newton
                    </p>
                    <button onclick="window.location.href = '../Html/Booking.php'">Book</button>
                </figcaption> 
            </div>
            
            <div class="column">
                <img src="../images/posters/28.jpg" alt="Apollo 11">
                <figcaption class= "title">
                    <p>
                        A look at the Apollo 11 mission to land on the moon led by commander Neil Armstrong and pilots Buzz Aldrin & Michael Collins.
                        <br><br><br><br>Director:<br>Todd Douglas Miller
                        <br><br><br>Stars:<br>Buzz Aldrin, Joan Ann Archer,<br>Janet Armstrong
                        <br><br><br><br>"BASED ON A TRUE STORY"
                    </p>
                    <button onclick="window.location.href = '../Html/Booking.php'">Book</button>
                </figcaption> 
            </div>
            
            <div class="column">
                <img src="../images/posters/11.jpg" alt="The curse of la lallorona">
                <figcaption class= "title">
                    <p>
                        Ignoring the eerie warning of a troubled mother suspected of child endangerment, a social worker and her own small kids are soon drawn into a frightening supernatural realm.
                        <br><br><br>Director:<br>Michael Chaves
                        <br><br><br>Writers:<br>Mikki Daughtry, Tobias Iaconis
                        <br><br>Stars:<br>Linda Cardellini, Raymond Cruz,<br>Marisol Ramirez
                    </p>
                    <button onclick="window.location.href = '../Html/Booking.php'">Book</button>
                </figcaption> 
            </div>
            
            <div class="column">
                <img src="../images/posters/13.jpg" alt="Penguins">
                <figcaption class= "title">
                    <p>
                        The story of Steve, an Adélie penguin, on a quest to find a life partner and start a family. When Steve meets with Wuzzo the emperor penguin they become friends. But nothing comes easy in the icy Antarctic.
                        <br><br><br><br>Directors:<br>Alastair Fothergill, Jeff Wilson
                        <br><br><br><br>Writer:<br>David Fowler
                    </p>
                    <button onclick="window.location.href = '../Html/Booking.php'">Book</button>
                </figcaption> 
            </div>
        </div>
        
        <div class="Box1">
            <h1>Venues</h1>
        </div>
        
        <div class="rowVen">
            <div class="colVen">
                <h2>Point 90</h2>
                <img src="../images/cinema/1252c649a7bd41989756baee54bad0e2.jpg" alt="Point 90 cinema">
                <figcaption class= "colTitle">
                    <p>
                        Point90 Cinemas is the first major cinema multiplex in the Fifth Settlement, New Cairo, located right in front of the American University in Cairo, inside the Point90 mall.
                        <br><br>Our aim is to offer you the ultimate cinema experience, with 11 premium screen halls equipped with the latest movie projection and sound technology. 
                        <br><br>In Point 90 Cinemas, you will be able to catch the latest and hottest movies throughout the year!
                        <br><br>Address:<br>Point90 Mall in front of AUC gate 5<br>New Cairo
                    </p>
                    <button onclick="window.location.href = '../Html/Booking.php'">Book</button>
                </figcaption>
            </div> 

            <div class="colVen">
                <h2>Galaxy cinema</h2>
                <img src="../images/cinema/28086266-modern-cinema-interior-with-seats-and-screen-horizontal.jpg" alt="Galaxy cinema">
                <figcaption class= "colTitle">
                    <p>
                        Shopping and watching movies comes hand in hand. Cairo Festival City Mall’s cinema guarantees the best movie experience for everyone with 4 VIP showrooms and 15 regular showrooms, it takes up to 144 spectators in VIP seats and 2932 in regular ones. CFCM’s cinema is amongst the firsts to display the latest movies in the box office that hit the Egyptian screens.
                        <br><br>The finest cinema in town, Galaxy Cinema, is now open in Cairo Festival City Mall for the best movie experience!    
                        <br><br>Address:<br>Cairo Festival City Mall on ring road<br>New Cairo
                    </p>
                    <button onclick="window.location.href = '../Html/Booking.php'">Book</button>
                </figcaption> 
            </div>
            
            <div class="colVen">
                <h2>IMAX Egypt</h2>
                <img src="../images/cinema/Piccadilly_Cinema_interior,_Perth.jpg" alt="IMAX cinema">
                <figcaption class= "colTitle">
                    <p>
                        IMAX is a motion picture film format and a set of proprietary cinema projection standards created by the Canadian company IMAX Corporation.
                        IMAX has the capacity to record and display images of far greater size and resolution than conventional film systems.
                        Since 2002, some feature films have been converted (or upgraded) into IMAX format for display in IMAX theatres and some have also been partially shot in IMAX.
                        <br><br><br><br>Address:<br> Americana Plaza - October city
                    </p>
                    <button onclick="window.location.href = '../Html/Booking.php'">Book</button>
                </figcaption> 
            </div>
        </div>
        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
        <div class="footer">
            <h4> STAY CONNECTED </h4>
            <br>
            <p>
                Join over 10,200 people who recieve our latest promotions
            </p>
            <form name="signUp"  onsubmit="validate()" method="post" action="newsLetter.php">
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