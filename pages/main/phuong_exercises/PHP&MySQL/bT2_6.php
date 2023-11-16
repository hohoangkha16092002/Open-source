<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sữa</title>

</head>

<body>
  <?php
  include 'config.php';
  $sql =
    'SELECT Hinh,Ten_sua,Trong_luong,Don_gia,Hinh
    from sua' ;
  $result = mysqli_query($conn, $sql);
  echo "<table align='center' border='1' display='flex'>";
  echo "<tr><td colspan='5'<b style='text-align: center; color: #FF3366; font-weight: bold; font-size: 30px'>THÔNG TIN CÁC SẢN PHẨM</b></td></tr>";
  if (mysqli_num_rows($result) <> 0) {
    $n = 0;
    while ($rows = mysqli_fetch_row($result)) {
      $formattedPrice = number_format($rows[3], 0, '.', '.');
      echo "<td align='center' >
              <div class='item'>
                <div class='chitiet'>
                <b>$rows[1]</b>
                $rows[2] gr -$formattedPrice VNĐ<br>
                </div>
                <div class='hinh'><img width='150px' src='./Anhdata1/$rows[0]' alt='$rows[1]'></div>
              </div>
            </td>";
      $n++;
      if ($n % 5 == 0)
        echo "<tr></tr>";
    } //while
  }
  echo "</table>"; ?>

</body>

</html>