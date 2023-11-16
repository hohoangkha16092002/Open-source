<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Sữa Bán Chạy</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>

<?php include("header.php") ?>

<body>
  <div class="container" style="min-width: 100%;">
    <?php include("navbar.php") ?>
    <div class="row">
      <div class="div-left col-3 bg-light">
        <h3>Danh mục sữa bán chạy</h3>
        <ul>
          <?php
          require('config.php');

          $conn = mysqli_connect($servername, $username, $password, $dbname);
          mysqli_set_charset($conn, 'utf8');

          if ($conn->connect_error) {
            die("Database connection failed: " . $conn->connect_error);
          }
          $query = "SELECT sua.Ten_sua, SUM(ct_hoadon.So_luong) as TotalSales
              FROM ct_hoadon
              JOIN sua ON ct_hoadon.Ma_sua = sua.Ma_sua
              GROUP BY sua.Ten_sua
              ORDER BY TotalSales DESC
              LIMIT 5";

          $result = mysqli_query($conn, $query);

          while ($row = mysqli_fetch_assoc($result)) {
            echo '<li><a href="bestsale-milk.php?category=' . urlencode($row['Ten_sua']) . '">' . $row['Ten_sua'] . '</a></li>';
          }
          ?>
        </ul>
        <img src="img/banner-2.jpg" alt="" width="100%" height="">
      </div>

      <div class="div-center col-9">
        <?php
        if (isset($_GET['category'])) {
          $selectedCategory = $_GET['category'];

          $query = "SELECT sua.*, hang_sua.Ten_hang_sua
          FROM sua
          JOIN hang_sua ON sua.Ma_hang_sua = hang_sua.Ma_hang_sua
          WHERE sua.Ten_sua = '" . mysqli_real_escape_string($conn, $selectedCategory) . "'";

          $result = mysqli_query($conn, $query);

          if (mysqli_num_rows($result) > 0) {
            $product = mysqli_fetch_assoc($result);
            echo '<h2>' . $product['Ten_sua'] . ' - ' . $product['Ten_hang_sua'] . '</h2>';
            echo "<div class='d-flex'>";
            echo "<img height='100%' src='./img/{$product['Hinh']}' alt='{$product['Ten_sua']}'>";
            echo "<div style='margin-left:2%'>";
            echo '<b><i>Thành phần dinh dưỡng:</i></b>';
            echo '<p>' . $product['TP_Dinh_Duong'] . '</p>';
            echo '<b><i>Lợi ích:</i></b>';
            echo '<p>' . $product['Loi_ich'] . '</p>';
            echo '<p><b><i>Trọng Lượng:</i></b> <span style="color: red;">' . $product['Trong_luong'] . ' gram</span> - <b><i>Đơn giá:</i></b><span style="color: red;"> ' . $product['Don_gia'] . ' VNĐ</span></p>';
            echo "</div>";
            echo "</div>";
          } else {
            echo '<p>Product not found.</p>';
          }
        } else {
          echo '<p>Chọn loại sữa bán chạy ở thanh bên trái để xem chi tiết.</p>';
        }
        ?>
      </div>

    </div>
  </div>
</body>
<?php include("footer.php") ?>

</html>