<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Thêm Sữa Mới</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>

<?php
require('config.php');
$conn = mysqli_connect($servername, $username, $password, $dbname);
mysqli_set_charset($conn, 'utf8');

$query_hangsua = "SELECT Ma_hang_sua, Ten_hang_sua FROM hang_sua";
$result_hangsua = mysqli_query($conn, $query_hangsua);

$query_loaisua = "SELECT Ma_loai_sua, Ten_loai FROM loai_sua";
$result_loai_sua = mysqli_query($conn, $query_loaisua);
?>

<?php include("header.php") ?>

<body>
  <div class="container" style="min-width: 100%;">
    <?php include("navbar.php") ?>
    <?php
    session_start();
    $msg = isset($_GET['msg']) ? $_GET['msg'] : '';
    ?>
    <div class="container">
      <h1>Thêm sữa mới</h1>
      <form action="process_add-milk.php" method="post" enctype="multipart/form-data">
        <div class="form-group my-2">
          <label for="ma_sua">Mã Sữa:</label>
          <input type="text" class="form-control" id="ma_sua" name="ma_sua" required>
        </div>

        <div class="form-group my-2">
          <label for="ten_sua">Tên Sữa:</label>
          <input type="text" class="form-control" id="ten_sua" name="ten_sua" required>
        </div>

        <div class="form-group my-2">
          <label for="ma_hang_sua">Hãng Sữa:</label>
          <select class="form-control" id="ma_hang_sua" name="ma_hang_sua" required>
            <?php
            while ($row = mysqli_fetch_assoc($result_hangsua)) {
              echo "<option value='" . $row['Ma_hang_sua'] . "'>" . $row['Ten_hang_sua'] . "</option>";
            }
            ?>
          </select>
        </div>

        <div class="form-group my-2">
          <label for="ma_loai_sua">Loại Sữa:</label>
          <select class="form-control" id="ma_loai_sua" name="ma_loai_sua" required>
            <?php
            while ($row = mysqli_fetch_assoc($result_loai_sua)) {
              echo "<option value='" . $row['Ma_loai_sua'] . "'>" . $row['Ten_loai'] . "</option>";
            }
            ?>
          </select>
        </div>

        <div class="form-group my-2">
          <label for="trong_luong">Trọng Lượng (gram):</label>
          <input type="number" class="form-control" id="trong_luong" name="trong_luong" required>
        </div>

        <div class="form-group my-2">
          <label for="don_gia">Đơn giá (VNĐ):</label>
          <input type="text" class="form-control" id="don_gia" name="don_gia" required>
        </div>

        <div class="form-group my-2">
          <label for="tp_dinh_duong">Thành phần dinh dưỡng:</label>
          <textarea id="tp_dinh_duong" name="tp_dinh_duong" rows="2" class="form-control"></textarea>
        </div>

        <div class="form-group my-2">
          <label for="loi_ich">Lợi ích:</label>
          <textarea id="loi_ich" name="loi_ich" rows="2" class="form-control"></textarea>
        </div>

        <div class="form-group my-2">
          <label for="hinh">Hình Ảnh:</label>
          <input type="file" class="form-control-file" id="hinh" name="hinh">
        </div>

        <button type="submit" class="btn btn-primary">Thêm</button>
        <div class="form-group">
          <?php if (isset($msg)) echo $msg ?>
        </div>
      </form>
    </div>

  </div>
</body>
<?php include("footer.php") ?>

</html>