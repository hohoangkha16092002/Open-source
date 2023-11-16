<?php 
include('config.php');

$per_page = 5;

// Lấy trang hiện tại từ tham số URL
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}

// Tính vị trí bắt đầu của dữ liệu trên trang hiện tại
$start_from = ($page - 1) * $per_page;

// Truy vấn dữ liệu sữa với phân trang
$sql = "SELECT * FROM sua
join hang_sua on sua.Ma_hang_sua = hang_sua.Ma_hang_sua
join loai_sua on sua.Ma_loai_sua = loai_sua.Ma_loai_sua 
 LIMIT $start_from, $per_page";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        td {
            color: ;
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: coral;
        }

        tr:nth-child(odd) {
            background-color: #ffffff;
        }
        th{
            color: red;
        }
    </style>
</head>
<body>
    <?php
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>ID</th><th>Tên Sữa</th><th>Hãng Sữa</th><th>Loại Sữa</th><th>Trọng Lượng</th><th>Đơn Giá</th></tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["Ma_sua"] . "</td>";
            echo "<td>" . $row["Ten_sua"] . "</td>";
            echo "<td>" . $row["Ten_hang_sua"] . "</td>";
            echo "<td>" . $row["Ten_loai"] . "</td>";
            echo "<td>" . $row["Trong_luong"] . "</td>";
            echo "<td>" . $row["Don_gia"] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "Không tìm thấy dữ liệu sữa";
    }

    // Phân trang
    $sql = "SELECT * FROM sua";
    $result = $conn->query($sql);
    $total_records = $result->num_rows;
    $total_pages = ceil($total_records / $per_page);

    echo "<div class='pagination'>";
    for ($i = 1; $i <= $total_pages; $i++) {
        echo "<a href='?page=$i'>$i</a> ";
    }
    echo "</div>";
    
    ?>
</body>

</html>