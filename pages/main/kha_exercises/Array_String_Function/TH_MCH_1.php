<!DOCTYPE html>
<html>

<head>
  <title>Bài tập 1 - Mảng, Chuỗi, Hàm</title>
</head>

<body>
  <h2>Nhập số tự nhiên n:</h2>
  <form method="post">
    <input type="text" name="n" required>
    <input type="submit" name="submit" value="Thực hiện">
  </form>

  <?php
  if (isset($_POST['submit'])) {
    // Lấy giá trị của n từ form
    $n = $_POST['n'];

    // Kiểm tra n có phải số nguyên dương
    if (is_numeric($n) && $n > 0 && intval($n) == $n) {
      // Khởi tạo mảng
      $array = array();

      // Tạo mảng có n phần tử là số nguyên ngẫu nhiên
      for ($i = 0; $i < $n; $i++) {
        $array[$i] = rand(-1000,1000);
      }

      // In mảng ra màn hình
      echo "<h2>Mảng phát sinh ngẫu nhiên:</h2>";
      echo "<pre>";
      print_r($array);
      echo "</pre>";

      // Đếm số phần tử chẵn trong mảng
      $evenCount = 0;
      foreach ($array as $value) {
        if ($value % 2 == 0) {
          $evenCount++;
        }
      }
      echo "Số phần tử chẵn trong mảng: $evenCount<br>";

      // Đếm số phần tử nhỏ hơn 100 trong mảng
      $lessThan100Count = 0;
      foreach ($array as $value) {
        if ($value < 100) {
          $lessThan100Count++;
        }
      }
      echo "Số phần tử nhỏ hơn 100 trong mảng: $lessThan100Count<br>";

      // Tính tổng các phần tử âm trong mảng
      $negativeSum = 0;
      foreach ($array as $value) {
        if ($value < 0) {
          $negativeSum += $value;
        }
      }
      echo "Tổng các phần tử âm trong mảng: $negativeSum<br>";

      // In ra vị trí của các phần tử có giá trị bằng 0
      echo "Vị trí của các phần tử có giá trị bằng 0:<br>";
      foreach ($array as $key => $value) {
        if ($value == 0) {
          echo "Vị trí $key<br>";
        }
      }

      // Sắp xếp mảng theo thứ tự tăng dần
      sort($array);
      echo "<h2>Mảng sau khi sắp xếp:</h2>";
      echo "<pre>";
      print_r($array);
      echo "</pre>";
    } else {
      echo "Vui lòng nhập số tự nhiên nguyên dương.";
    }
  }
  ?>
</body>

</html>