<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin khách hàng</title>
</head>
<body>
    <?php
    include('config.php');
    $sql = "SELECT * FROM khach_hang";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<h3>Thông Tin Khách Hàng</h3>";
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Tên Khách Hàng</th><th>Phái</th><th>Địa Chỉ</th><th>Điện Thoại</th><th>Email</th><th>Chỉnh Sửa</th><th>Xóa</th></tr>";

        while ($row = $result->fetch_assoc()) {
            $gioiTinh = ($row["Phai"] == 1) ? "Nam" : "Nữ";
            $avatar = ($row["Phai"] == 1) ? "upload/nam.jpg" : "upload/nu.jpg";
            echo "<tr>";
            echo "<td>" . $row["Ma_khach_hang"] . "</td>";
            echo "<td>" . $row["Ten_khach_hang"] . "</td>";
            echo "<td><img class='avatar' src='" . $avatar . "' alt='Avatar'></td>";
            echo "<td>" . $row["Dia_chi"] . "</td>";
            echo "<td>" . $row["Dien_thoai"] . "</td>";
            echo "<td>" . $row["Email"] . "</td>";
            echo "<td><a href='chinhsua.php?id=" . $row["Ma_khach_hang"] . "'>Chỉnh Sửa</a></td>"; // Thay 'chinh_sua.php' bằng trang chỉnh sửa thích hợp
            echo "<td><a href='xoa.php?id=" . $row["Ma_khach_hang"] . "'>Xóa</a></td>"; // Thay 'xoa.php' bằng trang xóa thích hợp
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "Không tìm thấy dữ liệu trong bảng Khách Hàng";
    }
    ?>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            color: red;
        }

        tr:nth-child(even) {
            background-color: coral;
        }

        tr:nth-child(odd) {
            background-color: #ffffff;
        }

        .avatar {
            width: 100px;
            height: 100px;
        }
    </style>
</body>
</html>
