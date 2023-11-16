<?php
require('config.php');
$conn = mysqli_connect($servername, $username, $password, $dbname) or die('Không thể kết nối tới database' . mysqli_connect_error());
mysqli_set_charset($conn, 'utf8');

$query = $_GET['query'];
$hang_sua = $_GET['hang_sua'];
$loai_sua = $_GET['loai_sua'];

// Xây dựng truy vấn SQL dựa trên các tiêu chí tìm kiếm
$sql = "SELECT `sua`.`Hinh`, `sua`.`Ten_sua`, `sua`.`Trong_luong`, `sua`.`Don_gia`
        FROM sua
        WHERE (`sua`.`Ten_sua` LIKE '%$query'";

if ($hang_sua != "") {
  $sql .= " AND `sua`.`Ma_hang_sua` = '$hang_sua'";
}

if ($loai_sua != "") {
  $sql .= " AND `sua`.`Ma_loai_sua` = '$loai_sua'";
}

$sql .= ");";

$result = mysqli_query($conn, $sql);

if (!$result) {
  die('<br><b>Query failed: ' . mysqli_error($conn) . '</b>');
}

$numRows = mysqli_num_rows($result);

if ($numRows <> 0) {
  echo "<div style='overflow-x: auto;'>
         <table>
            <tr><th colspan='6'><p class='center'>KẾT QUẢ TÌM KIẾM</p></th></tr>
            <tr>  
                <th>Hình</th>
                <th>Tên Sữa</th>
                <th>Trọng Lượng</th>
                <th>Đơn giá</th>
            </tr>";
  while ($rows = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td style='text-align: center; width:10%; height:120px;'><img height='100%' src='./img/{$rows['Hinh']}' alt='Hình sữa'></td>";
    echo "<td>{$rows['Ten_sua']}</td>";
    echo "<td>{$rows['Trong_luong']} gram</td>";
    echo "<td>{$rows['Don_gia']} VNĐ</td>";
    echo "</tr>";
  }
  echo "</table> </div>";
}

mysqli_close($conn);
?>
