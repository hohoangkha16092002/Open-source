<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Thông tin khách hàng</title>
  <style>
    table {
      text-align: center;
    }
    tr:nth-child(even) {
      background-color: #99FFFF;
    }
  </style>
</head>

<body>
  <?php
  // Ket noi CSDL
  //require("connect.php");
  include 'config.php';
  $sql = "SELECT `Ma_khach_hang`, `Ten_khach_hang`, `Phai`, `Dia_chi`, `Dien_thoai`, `Email` FROM `khach_hang`";
    $result = mysqli_query($conn, $sql);

    echo "<p align='center' ><b style = 'font-size: 28px'>THÔNG TIN KHÁCH HÀNG</b></p>";
    echo "<table align='center' border='1'>";
    echo '<tr>
        <th>Mã khách hàng</th>
        <th>Tên khách hàng</th>
        <th>Giới tính</th>
        <th>Địa chỉ</th>
        <th>Số điện thoại</th>
    </tr>';

if (mysqli_num_rows($result) <> 0) {
    while ($rows = mysqli_fetch_row($result)) {
      if ($rows[2] == 1) {
        $rows[2] = "nu";
      } else
        $rows[2] = "nam";
      echo "<tr>";
      echo "<td>$rows[0]</td>";
      echo "<td>$rows[1]</td>";
      echo "<td><img src='./gioitinh/$rows[2].jpg' alt='Nữ' width='30px' height='30px'></td>";
      echo "<td>$rows[3]</td>";
      echo "<td>0$rows[4]</td>";
      echo "</tr>";
    }
  }
  echo "</table>";
  ?>
</body>

</html>