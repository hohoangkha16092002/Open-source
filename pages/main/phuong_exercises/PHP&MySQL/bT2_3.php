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
    p{
        font-family:Lucida Console;
    }
</style>
<?php
    include("config.php");

    // Chuẩn bị câu truy vấn
    $query = 'SELECT * FROM khach_hang';
    $result = $conn->query($query);

    // Hiển thị mẫu tin bảng KHÁCH HÀNG
    echo "<p align='center'><font size='5'><b>THÔNG TIN KHÁCH HÀNG</b></font></p>";
    echo "<table align='center' width='700' cellpadding='2'>";
    echo '<tr>
            <th width="100">Mã khách hàng</th>
            <th width="100">Tên khách hàng</th>
            <th width="50">Giới tính</th>
            <th width="300">Địa chỉ</th>
            <th width="100">Điện thoại</th>
            <th width="100">Email</th>
          </tr>';

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>".$row['Ma_khach_hang']."</td>";
            echo "<td>".$row['Ten_khach_hang']."</td>";
            echo "<td>";
            if($row['Phai'] == '0'){
                echo ' <img src="Anhdata/Nam.jpg" width="50" height="50">';
            } else {
                echo ' <img src="Anhdata/Nu.jpg" width="50" height="50">';
            }
            echo "</td>";
            echo "<td>".$row['Dia_chi']."</td>";
            echo "<td>".$row['Dien_thoai']."</td>";
            echo "<td>".$row['Email']."</td>";
            echo "</tr>";
        }
    }

    // Đóng kết nối CSDL
    mysqli_close($conn);
?>
</body>
</html>