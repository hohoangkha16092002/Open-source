<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết</title>
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
    $Ma_sua = isset($_GET['maSua']) ? $_GET['maSua'] : '';

    $sql =
        "SELECT Ten_sua, hang_sua.Ten_hang_sua, Hinh, TP_Dinh_Duong, Loi_ich, Trong_luong, Don_gia 
  FROM sua 
  JOIN hang_sua ON sua.Ma_hang_sua = hang_sua.Ma_hang_sua 
  WHERE Ma_sua = '$Ma_sua'";
    $result = mysqli_query($conn, $sql);

    echo "<div>
        <table border = 1 align='center' style = 'width: 600px'>";
    $row = mysqli_fetch_array($result);
    $formattedPrice = number_format($row[6], 0, '.', '.');
    echo "<tr bgcolor='lightyellow'>
            <th style = 'color: orange' colspan='2'><h2>$row[0] - $row[1]</h2></th>
        </tr>
        <tr>
            <td style = 'width: 200px'><img src='./img/Hinh_sua/$row[2] ' width= 200px height= 270/></td>
            <td>
                <div>
                    <p><i><b>Thành phần dinh dưỡng:</b></i> <br>
                    $row[3]</p>
                    <p><i><b>Lợi ích:</b> </i><br>
                    $row[4]</p>
                    <p style = 'text-align: right'><i><b>Trọng lượng: </b></i>$row[5] gr  -  <i><b>Đơn giá: </b></i>$formattedPrice VNĐ</p>
                </div>
            </td>
        </tr>
        <tr>
            <td style='text-align: right'>
                <a href='javascript:window.history.back(-1);'>Quay về</a>
            </td>
            <td></td>
        </tr>
        </table>
    </div>";
    ?>

</body>

</html>