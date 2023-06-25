<?php

    // database details
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "shahebisoft";

    // creating a connection
    $conn = mysqli_connect($host, $username, $password, $dbname);

    if($conn){
        echo "Connected";
    }else{
        echo "Not Connected";
    }


?>