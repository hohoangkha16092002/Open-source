<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        tr:nth-child(even){
            background-color: lightgreen;
        }
        
        th{
            color: orange;
        }
    </style>
</head>

<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "quanly_ban_sua";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
    }

    $sql = "SELECT `Ma_khach_hang`, `Ten_khach_hang`, `Phai`, `Dia_chi`, `Dien_thoai`, `Email` FROM `khach_hang`";
    $result = mysqli_query($conn, $sql);

    echo "<p align='center' ><b style = 'font-size: 28px'>THÔNG TIN KHÁCH HÀNG</b></p>";
    echo "<table align='center' border='1'>";
    echo "<tr>
        <th>Mã khách hàng</th>
        <th>Tên khách hàng</th>
        <th>Giới tính</th>
        <th>Địa chỉ</th>
        <th>Số điện thoại</th>
    </tr>";

    if (mysqli_num_rows($result) <> 0) {
        while ($rows = mysqli_fetch_row($result)) {
            if($rows[2] == 1){
                $rows[2] = "nu";
            }
            else $rows[2] = "nam";
            echo "<tr>
            <td>$rows[0]</td>
            <td>$rows[1]</td>
            <td style='text-align: center'><img src='./img/$rows[2].png' width='30px' height='30px'></td>
            <td>$rows[3]</td>
            <td>$rows[4]</td>
            </tr>";
        }
    }

    echo "</table>";

    ?>
</body>

</html>