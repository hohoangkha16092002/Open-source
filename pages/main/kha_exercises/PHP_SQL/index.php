<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trang Chủ</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-rq2dmcP83o01a66VQcc3C0SULFv5m9cgEaO2b0W0GssM1/J9om3ENuv5y4zufd0eb" crossorigin="anonymous"></script>

</head>

<body>
  <?php include("header.php") ?>

  <div class="container" style="min-width: 100%;">
    <?php include("navbar.php") ?>
    <div class="row" style="min-width: 100%;">
      <div class="div-left col-3 bg-light">
        <div class="hang-sua">
          <h3>Sản phẩm theo hãng sữa</h3>
          <ul>
            <li><a href="<?php echo $_SERVER['PHP_SELF'] . "?hang_sua=VNM"; ?>">Vinamilk</a></li>
            <li><a href="<?php echo $_SERVER['PHP_SELF'] . "?hang_sua=NTF"; ?>">Nutriboot</a></li>
            <li><a href="<?php echo $_SERVER['PHP_SELF'] . "?hang_sua=AB"; ?>">Abbott</a></li>
            <li><a href="<?php echo $_SERVER['PHP_SELF'] . "?hang_sua=DS"; ?>">Daisy</a></li>
            <li><a href="<?php echo $_SERVER['PHP_SELF'] . "?hang_sua=DL"; ?>">Dutch Lady</a></li>
            <li><a href="<?php echo $_SERVER['PHP_SELF'] . "?hang_sua=MJ"; ?>">Mead Johnson</a></li>
          </ul>
        </div>
        <div class="loai-sua">
          <h3>Sản phẩm sữa theo loại</h3>
          <ul>
            <li><a href="<?php echo $_SERVER['PHP_SELF'] . "?loai_sua=SD"; ?>">Sữa đặc</a></li>
            <li><a href="<?php echo $_SERVER['PHP_SELF'] . "?loai_sua=ST"; ?>">Sữa tươi</a></li>
            <li><a href="<?php echo $_SERVER['PHP_SELF'] . "?loai_sua=SC"; ?>">Sữa chua</a></li>
            <li><a href="<?php echo $_SERVER['PHP_SELF'] . "?loai_sua=SB"; ?>">Sữa bột</a></li>
          </ul>
        </div>
        <img src="img/logo.png" alt="" width="100%" height="">
      </div>
      <div class="div-center col-6">
        <?php
        require('config.php');
        $conn = mysqli_connect($servername, $username, $password, $dbname) or die('Không thể kết nối tới database' . mysqli_connect_error());
        mysqli_set_charset($conn, 'utf8');

        $rowsPerPage = 5;
        if (!isset($_GET['page']))
          $_GET['page'] = 1;
        $offset = ($_GET['page'] - 1) * $rowsPerPage;

        if (isset($_GET['hang_sua'])) {
          $hang_sua = $_GET['hang_sua'];
          $sql = "SELECT `sua`.`Hinh`, `sua`.`Ten_sua`, `sua`.`Trong_luong`, `sua`.`Don_gia` FROM sua WHERE Ma_hang_sua = '$hang_sua'";
        } elseif (isset($_GET['loai_sua'])) {
          $loai_sua = $_GET['loai_sua'];
          $sql = "SELECT `sua`.`Hinh`, `sua`.`Ten_sua`, `sua`.`Trong_luong`, `sua`.`Don_gia` FROM sua WHERE Ma_loai_sua = '$loai_sua'";
        } else {
          $sql = "SELECT `sua`.`Hinh`, `sua`.`Ten_sua`, `sua`.`Trong_luong`, `sua`.`Don_gia` FROM sua ";
        }
        $sql .= " LIMIT $offset, $rowsPerPage";
        $result = mysqli_query($conn, $sql);

        if (!$result) die('<br> <b>Query failed</b>');
        $numRows = mysqli_num_rows($result);
        $maxPage = floor($numRows / $rowsPerPage);


        if ($numRows <> 0) {
          echo "<div style='overflow-x: auto;'>
         <table >
            <tr ><th colspan='6' class='bg-primary'><h3 class='center'>DANH MỤC SẢN PHẨM</h3></th></tr>
            <tr>  
                <th class='center bg-primary'>Hình</th>
                <th class='center bg-primary'>Tên Sữa</th>
                <th class='center bg-primary'>Trọng Lượng</th>
                <th class='center bg-primary'>Đơn giá</th>
            </tr>";
          $temp = $_GET['page'] * $rowsPerPage; // danh so thu tu
          if ($temp <= $rowsPerPage) $num = 0;
          else $num = $temp - $rowsPerPage;
          while ($rows = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td style='text-align: center; width:10%; height:120px;'><img height='100%' src='./img/{$rows['Hinh']}' alt='{$rows['Hinh']}'></td>";
            echo "<td>{$rows['Ten_sua']}</td>";
            echo "<td>{$rows['Trong_luong']} gram</td>";
            echo "<td>{$rows['Don_gia']} VNĐ</td>";
            echo "</tr>";
          }
          echo "</table> </div>";
          $re = mysqli_query($conn, 'select * from sua');
          $numRows = mysqli_num_rows($re);
          $maxPage = floor($numRows / $rowsPerPage) + 1;
          echo "<div class='center'>";
          if ($_GET['page'] > 1) {
            echo "<a href='{$_SERVER['PHP_SELF']}?page=" . ($_GET['page'] - 1);
            if (isset($_GET['hang_sua'])) {
              echo "&hang_sua=" . $_GET['hang_sua'];
            }
            if (isset($_GET['loai_sua'])) {
              echo "&loai_sua=" . $_GET['loai_sua'];
            }
            echo "'>Back</a> ";
          }

          for ($i = 1; $i <= $maxPage; $i++) {
            echo "<a href='{$_SERVER['PHP_SELF']}?page=$i";
            if (isset($_GET['hang_sua'])) {
              echo "&hang_sua=" . $_GET['hang_sua'];
            }
            if (isset($_GET['loai_sua'])) {
              echo "&loai_sua=" . $_GET['loai_sua'];
            }
            echo "'>Trang $i</a> ";
          }

          if ($_GET['page'] < $maxPage) {
            echo "<a href='{$_SERVER['PHP_SELF']}?page=" . ($_GET['page'] + 1);
            if (isset($_GET['hang_sua'])) {
              echo "&hang_sua=" . $_GET['hang_sua'];
            }
            if (isset($_GET['loai_sua'])) {
              echo "&loai_sua=" . $_GET['loai_sua'];
            }
            echo "'>Next</a>";
          }
          echo "</div>";
        }

        mysqli_close($conn);
        ?>
      </div>
      <div class="div-right col-3">
        <img src="img/banner-1.jpg" alt="banner-1" width="100%" height="150px">
        <img src="img/banner-2.jpg" alt="banner-2" width="100%" height="150px">
        <img src="img/banner-3.jpg" alt="banner-3" width="100%" height="150px">
        <img src="img/banner-4.jpg" alt="banner-4" width="100%" height="150px">
        <img src="img/banner-5.jpg" alt="banner-5" width="100%" height="150px">
      </div>
    </div>
  </div>
</body>
<?php include("footer.php") ?>

</html>