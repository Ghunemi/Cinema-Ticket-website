<html>
    <head>
       <meta charset="utf-8">
	   <meta name="description" content="Movie Ticket">
	   <meta name="keywords" content="Home,Movies,Venues,Contact Us,About Us,Register,Login,Coming Soon">
       <link rel = "stylesheet" href="../Css/MoviesAdmincss.css">
       <link rel="shortcut icon" href="../images/icon.png" type="image/x-icon">
       <script type = "text/javascript" src="../Js/jQuery.js"> </script>
       <script type = "text/javascript" src="../Js/MoviesAdminjs.js"> </script>
       <title>Movie Ticket::Admin</title>
       <link rel="shortcut icon" href="../images/icon.png" type="image/x-icon">
       <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
	   <link href="https://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet">
       <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    </head>
    
    <body>
      <div class="navbar">
            <div class="logo">Cinema Ticket</div>
            <a href="CinemasAdmin.php">Cinema</a>
            <a href="MoviesAdmin.php">Movies</a>
            <a href="Admin.php">ADMIN</a>
        </div>

        <h1 class="H1">Welcome To Movies Admin Page!</h1>
        <button onclick="document.getElementById('modal-wrapper').style.display='block'" style="width:13%; margin-top:10%; margin-left:15%; font-family: Anton;">
        Add Movie</button>

        <div id="modal-wrapper" class="background">

          <form class="modal-content animate" action="AddMovie.php" method="post">

            <div class="imgcontainer">
              <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp" style="font-family: Anton;">&times;</span>
              <img src="../images/Admin.png" alt="Avatar" class="avatar">
              <h1 style="text-align:center; font-family: Anton;">Add Movie</h1>
            </div>

            <div class="container">
              <input type="text" placeholder="Enter Movie Name" name="uname">
              <input type="text" placeholder="Enter Movie Description" name="psw">
                <div class="upload-btn-wrapper">
                    <button class="btn">Upload an Image</button>
                    <input type="file" name="myfile" />
                </div>
                <button type="submit" style="font-family: Anton;">Submit</button>
            </div>
          </form>
        </div>

        <button onclick="document.getElementById('modal-wrappers').style.display='block'" style="width:13%; margin-top:10%; margin-left:15%; font-family: Anton;">
            Update Movie</button>

        <div id="modal-wrappers" class="background">

          <form class="modal-content animate" action="editMovie.php" method="post">

            <div class="imgcontainer">
              <span onclick="document.getElementById('modal-wrappers').style.display='none'" class="close" title="Close PopUp" style="font-family: Anton;">&times;</span>
              <img src="../images/Admin.png" alt="Avatar" class="avatar">
              <h1 style="text-align:center; font-family: Anton;">Update Movie</h1>
            </div>

            <div class="container">
              <input type="text" placeholder="Enter Movie ID" name="uname">
              <input type="text" placeholder="Enter Movie Description" name="psw">
            <input type="text" placeholder="Enter Movie name" name="NAMEE">
              <div class="upload-btn-wrapper">
                  <button class="btn">Upload an Image</button>
                  <input type="file" name="myfile" />
              </div>
              <button type="submit" style="font-family: Anton;">Submit</button>
            </div>
          </form>
        </div>

        <button onclick="document.getElementById('modal-wrapperss').style.display='block'" style="width:13%; margin-top:20%; margin-left:15%; font-family: Anton;">
            Delete Movie</button>

        <div id="modal-wrapperss" class="background">

          <form class="modal-content animate" action="deleteMovie.php" method="post">

            <div class="imgcontainer">
              <span onclick="document.getElementById('modal-wrapperss').style.display='none'" class="close" title="Close PopUp" style="font-family: Anton;">&times;</span>
              <img src="../images/Admin.png" alt="Avatar" class="avatar">
              <h1 style="text-align:center; font-family: Anton;">Delete Movie</h1>
            </div>

            <div class="container">
              <input type="text" placeholder="Enter Movie ID" name="uname"> 
              <button type="submit" style="font-family: Anton;">Submit</button>
            </div>
          </form>
        </div>
    </body>
</html>