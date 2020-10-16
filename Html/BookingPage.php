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

    $name =  $_POST["Username"];
    $noofseats = $_POST["Numseats"];

    $query = "INSERT INTO booking 
    VALUES (DEFAULT,'".$name."','".$noofseats."')";

    if(mysqli_query($conn,$query))
        {
            echo "<script>
            alert('Booking added');
            window.history.back();
            </script>";

        }
    else
        {
      //  echo "<script>
        //    alert('Booking cannot be added');
          //  window.history.back();
            //</script>";
        }
    mysqli_close($conn);
?>