<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
    tr:nth-child(even) {
            background-color: white;
    }

    table, th, td {
            border: 1px solid black;
    }

    
</style>
<?php
    include("config.php");

    ////Chuẩn bị câu truy vấn
    $query = 'SELECT * FROM hang_sua';
    $result = $conn -> query($query);


    //hiển thị mẫu tin bảng HÃNG SỮA
    $result  = mysqli_query($conn, $query);
    echo "<p align = 'center'> <font size = '5' color = 'blue'><b> THÔNG TIN HÃNG SỮA </b></font></p>";
    echo "<table align = 'center' wight = '700' cellpadding = '2'> ";
    echo '<tr>
                <th width = "100"> Mã hãng sữa</th>
                <th width = "100"> Tên hãng sữa</th>
                <th width = "300"> Địa chỉ</th>
                <th width = "100">Điện thoại </th>
                <th width = "100"> Email</th></tr>';

    if(mysqli_num_rows($result) <> 0){
         while  ($rows = mysqli_fetch_row($result)){
            echo "<tr>";
            echo "<td> $rows[0]</td>";
            echo "<td> $rows[1]</td>";
            echo "<td> $rows[2]</td>";
            echo "<td> $rows[3]</td>";
            echo "<td> $rows[4]</td>";
            echo "</tr>";
        }
    }
?>
</body>
</html>