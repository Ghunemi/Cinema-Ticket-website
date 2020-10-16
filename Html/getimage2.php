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
    
    $sql = "SELECT image FROM movies WHERE movieID =75";
    $result = mysqli_query($link, $sql);
    $row=mysqli_fetch_assoc($result);
    echo $row['image'];
?>