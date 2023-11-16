<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Tìm kiếm Sữa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <?php include("header.php") ?>
  <div class="container" style="min-width: 100%;">
    <?php include("navbar.php") ?>

    <div class="container">
      <h1>Tìm kiếm Sữa</h1>
      <form method="GET" action="find-milk.php">
        <div class="form-group">
          <label for="search-text">Tìm kiếm:</label>
          <input type="text" id="search-text" name="query" class="form-control" placeholder="Nhập từ khóa tìm kiếm" value="<?php if (isset($_GET['query'])) {
                                                                                                                              echo $_GET['query'];
                                                                                                                            } ?>">
        </div>
        <div class="form-group">
          <label for="select-hang-sua">Chọn hãng sữa:</label>
          <select name="hang_sua" id="select-hang-sua" class="form-control">
            <option value="">Tất cả</option>
            <option value="VNM" <?php if (isset($_GET['hang_sua']) && $_GET['hang_sua'] == 'VNM') {
                                  echo 'selected="selected"';
                                } ?>>Vinamilk</option>
            <option value="NTF" <?php if (isset($_GET['hang_sua']) && $_GET['hang_sua'] == 'NTF') {
                                  echo 'selected="selected"';
                                } ?>>Nutriboot</option>
            <option value="AB" <?php if (isset($_GET['hang_sua']) && $_GET['hang_sua'] == 'AB') {
                                  echo 'selected="selected"';
                                } ?>>Abbott</option>
            <option value="DS" <?php if (isset($_GET['hang_sua']) && $_GET['hang_sua'] == 'DS') {
                                  echo 'selected="selected"';
                                } ?>>Daisy</option>
            <option value="DL" <?php if (isset($_GET['hang_sua']) && $_GET['hang_sua'] == 'DL') {
                                  echo 'selected="selected"';
                                } ?>>Dutch Lady</option>
            <option value="MJ" <?php if (isset($_GET['hang_sua']) && $_GET['hang_sua'] == 'MJ') {
                                  echo 'selected="selected"';
                                } ?>>Mead Johnson</option>
          </select>
        </div>

        <div class="form-group">
          <label for="select-loai-sua">Chọn loại sữa:</label>
          <select name="loai_sua" id="select-loai-sua" class="form-control">
            <option value="">Tất cả</option>
            <option value="SD" <?php if (isset($_GET['loai_sua']) && $_GET['loai_sua'] == 'SD') {
                                  echo 'selected="selected"';
                                } ?>>Sữa đặc</option>
            <option value="ST" <?php if (isset($_GET['loai_sua']) && $_GET['loai_sua'] == 'ST') {
                                  echo 'selected="selected"';
                                } ?>>Sữa tươi</option>
            <option value="SC" <?php if (isset($_GET['loai_sua']) && $_GET['loai_sua'] == 'SC') {
                                  echo 'selected="selected"';
                                } ?>>Sữa chua</option>
            <option value="SB" <?php if (isset($_GET['loai_sua']) && $_GET['loai_sua'] == 'SB') {
                                  echo 'selected="selected"';
                                } ?>>Sữa bột</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Tìm kiếm</button>
      </form>

      <div class="container">
        <h2>Kết quả tìm kiếm:</h2>
        <div id="search-results">
          <?php
          if (isset($_GET['submit'])) {
            require('config.php');
            $conn = mysqli_connect($servername, $username, $password, $dbname) or die('Không thể kết nối tới database' . mysqli_connect_error());
            mysqli_set_charset($conn, 'utf8');

            $query = $_GET['query'];
            $hang_sua = $_GET['hang_sua'];
            $loai_sua = $_GET['loai_sua'];

            $sql = "SELECT `sua`.`Hinh`, `sua`.`Ten_sua`, `sua`.`Trong_luong`, `sua`.`Don_gia`
            FROM sua
            WHERE (`sua`.`Ten_sua` LIKE '%$query%'";

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
            } else {
              echo "<p>Không có sữa tương ứng.</p>";
            }

            mysqli_close($conn);
          }
          ?>

        </div>
      </div>
    </div>
  </div>

</body>
<?php include("footer.php") ?>

</html>