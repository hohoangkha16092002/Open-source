<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "open-source";
    $conn = mysqli_connect($servername, $username, $password);
    if (mysqli_connect_errno()) {
        die("". mysqli_connect_error());
    }
    else {
        echo "Thành công";
    }
?>