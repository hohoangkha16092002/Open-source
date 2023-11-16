<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin hãng sữa</title>
</head>
<body>
    <?php 
        include('config.php');
        $sql = "SELECT * FROM hang_sua";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Bắt đầu thẻ <table>
            echo "<h3>Thông Tin Hãng Sửa</h3>";
            echo "<table border='1'>";
            echo "<tr><th>ID</th><th>Tên Hãng Sữa</th><th>Địa Chỉ</th><th>Điện Thoại</th><th>Email</th></tr>";
        
            // In dữ liệu trong vòng lặp
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["Ma_hang_sua"] . "</td>";
                echo "<td>" . $row["Ten_hang_sua"] . "</td>";
                echo "<td>" . $row["Dia_chi"] . "</td>";
                echo "<td>" . $row["Dien_thoai"] . "</td>";
                echo "<td>" . $row["Email"] . "</td>";
                echo "</tr>";
            }
        
            // Kết thúc thẻ <table>
            echo "</table>";
        } else {
            echo "Không tìm thấy dữ liệu trong bảng Hãng Sữa";
        }
    ?>
</body>
</html>