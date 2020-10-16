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

    $movieName = $_POST["uname"];
    $description = $_POST["psw"];
    $image = $_POST["myfile"];

    $query = "INSERT INTO movies 
    VALUES ('".$movieName."','".$description."','".$image."',DEFAULT)";

    if(mysqli_query($conn,$query))
        {
            echo "<script>
            alert('Movie added');
            window.history.back();
            </script>";

        }
    else
        {
          echo "<script>
            alert('Movie cannot be added');
            window.history.back();
            </script>";

        }
    mysqli_close($conn);
?>