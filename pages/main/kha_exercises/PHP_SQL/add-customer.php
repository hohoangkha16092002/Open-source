<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Thêm Khách Hàng Mới</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>

<?php include("header.php") ?>

<body>
  <div class="container" style="min-width: 100%;">
    <?php include("navbar.php") ?>

    <?php
    session_start();
    $msg = isset($_GET['msg']) ? $_GET['msg'] : '';
    ?>
    <div class="container">
      <h1>Thêm Khách Hàng Mới</h1>
      <form method="POST" action="process_add-customer.php">
        <div class="form-group">
          <label for="ma-khach-hang">Mã Khách Hàng:</label>
          <input type="text" id="ma-khach-hang" name="ma_khach_hang" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="ten-khach-hang">Tên Khách Hàng:</label>
          <input type="text" id="ten-khach-hang" name="ten_khach_hang" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="phai">Phái:</label>
          <select name="phai" id="phai" class="form-control">
            <option value="Nam">Nam</option>
            <option value="Nữ">Nữ</option>
          </select>
        </div>
        <div class="form-group">
          <label for="dia-chi">Địa Chỉ:</label>
          <input type="text" id="dia-chi" name="dia_chi" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="dien-thoai">Điện Thoại:</label>
          <input type="text" id="dien-thoai" name="dien_thoai" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Thêm Khách Hàng</button>
        <div class="form-group">
          <?php if (isset($msg)) echo $msg ?>
        </div>
      </form>
    </div>

  </div>
</body>
<?php include("footer.php") ?>

</html>