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

    $cinemaName = $_POST["uname"];
    $address = $_POST["psw"];
    $description = $_POST["disc"];
    $image = $_POST["myfile"];

    $query = "INSERT INTO cinema_d 
    VALUES (DEFAULT,'".$cinemaName."','".$address."','".$description."','".$image."')";

    if(mysqli_query($conn,$query))
        {
            echo "<script>
            alert('Cinema added');
            window.history.back();
            </script>";

        }
    else
        {
        echo "<script>
            alert('Cinema cannot be added');
            window.history.back();
            </script>";
        }
    mysqli_close($conn);
?>