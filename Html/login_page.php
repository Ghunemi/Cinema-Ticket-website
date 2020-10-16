<?php
    /* Attempt to connect to MySQL database */
    $link = mysqli_connect('localhost', 'root','');

    if($link === false)
    {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    $mydb = mysqli_select_db($link,'cinema');

    if(!$mydb)
    {
        die("Cannot Select DB" . mysqli_error());
    }

    // Assigning POST values to variables.
    $username = $_POST["user"];
    $password = $_POST["pass"];

    // CHECK FOR THE RECORD FROM TABLE
    $query = "SELECT * FROM `customer` WHERE username='$username' and Password='$password'";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));
    $count = mysqli_num_rows($result);

    $admin = "SELECT * FROM `admin` WHERE username='$username' and password='$password'";
    $result2 = mysqli_query($link, $admin) or die(mysqli_error($link));
    $count2 = mysqli_num_rows($result2);

    if ($count == 1){

    //echo "Login Credentials verified";
    echo "<script type='text/javascript'>alert('Login Credentials verified')
    window.location.href='Home.php';
    </script>";

    }else if($count2 == 1){
   
         //echo "Login Credentials verified";
    echo "<script type='text/javascript'>alert('Login Credentials verified')
    window.location.href='Admin.php';
    </script>";
    }
else
{
    echo "<script type='text/javascript'>alert('Invalid Credentials verified')
    window.location.href='Login.php';
    </script>";
}
?>