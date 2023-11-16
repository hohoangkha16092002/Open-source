<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>

    th{
        color: red;
    }
    tr:nth-child(even) {
            background-color: white;
    }

    table, th, td {
            border: 1px solid black;
    }

    /* Màu cho dòng chẵn */
    tr:nth-child(even) {
        background-color: bisque;
    }

    /* Màu cho dòng lẻ */
    tr:nth-child(odd) {
        background-color: #ffffff;
    }
</style>
<?php
    include("config.php");

    ////Chuẩn bị câu truy vấn
    $query = 'SELECT * FROM khach_hang';
    $result = $conn -> query($query);


    //hiển thị mẫu tin bảng KHÁCH HÀNG
    $result  = mysqli_query($conn, $query);
    echo "<p align = 'center'> <font size = '5'><b> THÔNG TIN KHÁCH HÀNG </b></font></p>";
    echo "<table align = 'center' wight = '700' cellpadding = '2'> ";
    echo '<tr>
                <th width = "100"> Mã khách hàng</th>
                <th width = "100"> Tên khách hàng</th>
                <th width = "50"> Giới tính</th>
                <th width = "300"> Địa chỉ</th>
                <th width = "100">Điện thoại</th></tr>';
                

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