<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin khách hàng</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            padding: 8px;
        }

        th {
            color: red;
            text-align: center;
        }

        tr:nth-child(even) {
            background-color: beige;
        }

        tr:nth-child(odd) {
            background-color: #ffffff;
        }

        .avatar {
            width: 100px;
            height: 100px;
        }
    </style>
</head>

<body>
    <?php
    include('config.php');
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
    }
    $sql = "SELECT * FROM khach_hang";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<h3 colspan='8' style='text-align: center; color: black; font-size: 30px'><b>THÔNG TIN KHACH HÀNG</b></h3>";
        echo "<table border='1'>";
        echo "<tr><th>Mã KH</th><th>Tên Khách Hàng</th><th>Giới tính</th><th>Địa Chỉ</th><th>Điện Thoại</th><th>Email</th><th>Chỉnh Sửa</th><th>Xóa</th></tr>";

        while ($row = $result->fetch_assoc()) {
            $gioiTinh = ($row["Phai"] == 1) ? "Nam" : "Nữ";
            $gender = ($row["Phai"] == 1) ? "Nữ" : "Nam";
            echo "<tr>";
            echo "<td>" . $row["Ma_khach_hang"] . "</td>";
            echo "<td>" . $row["Ten_khach_hang"] . "</td>";
            echo "<td>" . $gender .  "</td>";
            echo "<td>" . $row["Dia_chi"] . "</td>";
            echo "<td>" . $row["Dien_thoai"] . "</td>";
            echo "<td>" . $row["Email"] . "</td>";
            echo "<td><a href='exercise_2.12_edit.php?id=" . $row["Ma_khach_hang"] . "'>Chỉnh Sửa</a></td>"; 
            echo "<td><a href='exercise_2.12_delete.php?id=" . $row["Ma_khach_hang"] . "'>Xóa</a></td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "Không tìm thấy dữ liệu trong bảng Khách Hàng";
    }
    ?>

</body>

</html>