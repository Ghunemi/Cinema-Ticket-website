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

$email = $_POST["email"];

$query = "INSERT INTO newsletter
VALUES ('".$email."')";

if(mysqli_query($conn,$query))
    {
        echo "<script>
        alert('Signed up');
        window.history.back();
        
        </script>";
      
    
    }
else
    {
        echo "<script>
        alert('Cannot sign up');
        window.history.back();
        </script>";
        

    }
mysqli_close($conn);

?>