<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table {
      text-align: center;
    }

    tr:nth-child(even) {
      background-color: lightgreen;
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

    $sql = "SELECT `Ma_hang_sua`, `Ten_hang_sua`, `Dia_chi`, `Dien_thoai`, `Email` FROM `hang_sua`";
    $result = mysqli_query($conn, $sql);
    echo "<p align = 'center'><b 'color = green'>THÔNG TIN HÃNG SỮA</b></p>";
    echo "<table align = 'center' border='1'>";
    echo "<tr>
        <th width ='200px'>Mã HS</th>
        <th width ='200px'>Tên hãng sữa</th>
        <th width ='200px'>Địa chỉ</th>
        <th width ='200px'>Số điện thoại</th>
        <th width ='200px'>Email</th>
        </tr>";
    if (mysqli_num_rows($result) <> 0) {
        while ($rows = mysqli_fetch_row($result)) {
            echo "<tr>";
            echo "<td>$rows[0]</td>";
            echo "<td>$rows[1]</td>";
            echo "<td>$rows[2]</td>";
            echo "<td>$rows[3]</td>";
            echo "<td>$rows[4]</td>";
            echo "</tr>";
        }
    }
    echo "</table>"
        ?>
</body>

</html>