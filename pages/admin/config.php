<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "open-source";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if(!$conn){
        die("Connection failed:" . mysqli_connect_error());
    }
    else{
        echo "</br>";
    }
?>