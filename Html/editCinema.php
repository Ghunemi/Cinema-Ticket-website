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
    $address = $_POST["psw"];
    $description = $_POST["disc"];
    $image = $_POST["myfile"];
    $cinemaName = $_POST["NAMEEE"];


    $query = "UPDATE cinema_d SET Cinema_name= '".$cinemaName."', Address= '".$address."', Description = '".$description."', Image = '".$image."' WHERE Cinema_ID = '".$cinemaID."'";

    if(mysqli_query($conn,$query))
        {
            echo "<script>
            alert('Cinema updated');
            window.history.back();
            </script>";

        }
    else
        {
         echo "<script>
            alert('Cinema cannot be updated');
            window.history.back();
            </script>";


        }
    mysqli_close($conn);
?>