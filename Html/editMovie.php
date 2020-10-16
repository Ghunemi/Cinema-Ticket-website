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

    $movieID = $_POST["uname"];
    $description = $_POST["psw"];
    $image = $_POST["myfile"];
    $movieName = $_POST["NAMEE"];
    $query = "UPDATE movies SET Movie_name = '".$movieName."', Description= '".$description."', image= '".$image."' WHERE movieID = '".$movieID."'";

    if(mysqli_query($conn,$query))
        {
            echo "<script>
            alert('Movie updated');
            window.history.back();
            </script>";

        }
    else
        {
         echo "<script>
            alert('Movie cannot be updated');
            window.history.back();
            </script>";


        }
    mysqli_close($conn);
?>