<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

    $sql = "SELECT `Hinh`, `Ten_sua`, `Ten_hang_sua`, `Ten_loai`, `Trong_luong`, `Don_gia`
    FROM `sua`
    join `hang_sua` on `sua`.`Ma_hang_sua` = `hang_sua`.`Ma_hang_sua`
    join `loai_sua` on `sua`.`Ma_loai_sua` = `loai_sua`.`Ma_loai_sua`
    ";
    $result = mysqli_query($conn, $sql);

    echo "<table align='center' border='1'>";
    echo "<tr><td colspan='2'<b style='text-align: center; color: orange; font-weight: bold; font-size: 30px'>THÔNG TIN CÁC SẢN PHẨM</b></td></tr>";
    if (mysqli_num_rows($result) <> 0) {
        while ($rows = mysqli_fetch_row($result)) {
            echo "<tr>
            <td width='50%' height='200px' align='center'><img width='150px' src='./img/Hinh_sua/$rows[0]' alt=''></td>
            <td>
                <b>$rows[1]</b>
                <p>Nhà sản xuất: $rows[2]</p>
                <p>Loại sữa: $rows[3] - $rows[4] - $rows[5]VND</p>
            </td>
            </tr>";
        }
    }
    echo "</table>";
    ?>
</body>

</html>