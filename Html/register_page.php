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

    $fname = $_POST["FirstName"];
    $lname = $_POST["LastName"];
    $username = $_POST["UserName"];
    $password = $_POST["Password"];
    $gender = $_POST["Gender"];
    $email = $_POST["Email"];
    $phone = $_POST["PhoneNumber"];
    $creditCard = $_POST["CC"];

    $query = "INSERT INTO customer
    VALUES ('".$fname."','".$lname."','".$username."','".$password."','".$gender."','".$email."','".$phone."','".$creditCard."')";

    if(mysqli_query($conn,$query))
        {
            echo "<script>
            alert('Account created');
            window.location.href='Home.php';
            </script>";

        }
    else
        {
            echo "<script>
            alert('Account cannot be created');
            window.location.href='Register.php';
            </script>";

        }
    mysqli_close($conn);
?>