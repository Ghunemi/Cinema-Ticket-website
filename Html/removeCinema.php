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

    $cinemaID = $_POST["uname"];
    $query = "DELETE FROM cinema_d WHERE Cinema_ID = '".$cinemaID."'";

    if(mysqli_query($conn,$query))
        {
            echo "<script>
            alert('Movie is deleted');
            window.history.back();
            </script>";
        }
    else
        {
            echo "<script>
            alert('Movie cannot be deleted');
            window.history.back();
            </script>";
        }
    mysqli_close($conn);
?>