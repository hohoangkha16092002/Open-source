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

    $sql = "SELECT `Hinh`, `Ten_sua`, `Trong_luong`, `Don_gia` FROM `sua`";
    $result = mysqli_query($conn, $sql);

    echo "<table align='center' border='1' display='flex'>";
    echo "<tr><td colspan='5'<b style='text-align: center; color: orange; font-weight: bold; font-size: 30px'>THÔNG TIN CÁC SẢN PHẨM</b></td></tr>";
    
    if (mysqli_num_rows($result) <> 0) {
        $n = 0;
        while ($rows = mysqli_fetch_row($result)) {
            $formattedPrice = number_format($rows[3], 0, '.', '.');
            echo "<td align='center' >
                  <div class='item'>
                    <div class='chitiet'>
                    <b>$rows[1]</b> <br>
                    $rows[2] gr - $formattedPrice VNĐ<br>
                    </div>
                    <div class='hinh'><img width='150px' height='150px' src='./img/Hinh_sua/$rows[0]' alt='$rows[1]'></div>
                  </div>
                </td>";
            $n++;
            if ($n % 5 == 0)
                echo "<tr></tr>";
        } //while
    }
    echo "</table>";
    ?>
</body>

</html>