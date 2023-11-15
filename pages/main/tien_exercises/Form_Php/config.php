<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "form-login";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if(!$conn){
        die("Connection failed:" . mysqli_connect_error());
    }
    else{
        //echo "Thành công</br>";
    }
?>