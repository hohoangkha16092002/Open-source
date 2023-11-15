<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5" />
  <meta name="author" content="AdminKit" />
  <meta name="keywords"
    content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web" />

  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link rel="shortcut icon" href="img/icons/icon-48x48.png" />

  <link rel="canonical" href="https://demo-basic.adminkit.io/ui-buttons.html" />

  <title>THÊM ẢNH SẢN PHẨM | AdminKit Demo</title>

  <link href="css/app.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet" />
</head>

<body>
  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "open-source";
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  if (mysqli_connect_errno()) {
    die("" . mysqli_connect_error());
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["add_product_image"])) {
    $product_name_image = $_POST["product_name_image"];
    $product_data_image = $_POST["product_data_image"];


    $sql_max_IDAnhMH = "SELECT MAX(CAST(SUBSTRING(IDAnhMH,  5) AS SIGNED)) AS max_IDAnhMH FROM anhmh WHERE IDAnhMH LIKE 'HASP%';";
    $result_max_IDAnhMH = $conn->query($sql_max_IDAnhMH);
    $row = $result_max_IDAnhMH->fetch_assoc();
    $max_IDAnhMH = $row["max_IDAnhMH"]; //Tìm mã ảnh mặt hàng lớn nhất
    $next_IDAnhMH = "HASP" . str_pad($max_IDAnhMH + 1, 3, '0', STR_PAD_LEFT);


    $sql_max_MaMH_anhmh = "SELECT MAX(CAST(SUBSTRING(MaMH,  3) AS SIGNED)) AS max_MaMH_anhmh FROM anhmh WHERE MaMH LIKE 'LT%';";
    $result_max_MaMH_anhmh = $conn->query($sql_max_MaMH_anhmh);
    $row1 = $result_max_MaMH_anhmh->fetch_assoc();
    $max_maMH_anhmh = $row1["max_MaMH_anhmh"]; //Tìm mã mặt hàng lớn nhất
    $next_maMH_anhmh = "LT" . str_pad($max_maMH_anhmh + 1, 3, '0', STR_PAD_LEFT);

    $sql_add_product_data_image = "INSERT INTO `anhmh` (`IDAnhMH`, `MaMH`, `TenAnh`, `DLAnh`)
    VALUES ('$next_IDAnhMH', '$next_maMH_anhmh', '$product_name_image', '$product_data_image')";

    if (mysqli_query($conn, $sql_add_product_data_image)) {
      echo "<script>
              setTimeout(function(){
                  alert('Thêm ảnh thành công');
                  window.location.href = 'pages-blank.php';
              }, 0);
          </script>";
    } else {
      echo "Error: " . $sql_add_product_data_image . mysqli_error($conn);
    }
  }
  ?>
  <div class="wrapper">
    <nav id="sidebar" class="sidebar js-sidebar">
      <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="index.php">
          <span class="align-middle">PHONGVU</span>
        </a>

        <ul class="sidebar-nav">
          <li class="sidebar-header">Pages</li>

          <li class="sidebar-item">
            <a class="sidebar-link" href="index.php">
              <i class="align-middle" data-feather="sliders"></i>
              <span class="align-middle">HOME</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a class="sidebar-link" href="pages-profile.php">
              <i class="align-middle" data-feather="user"></i>
              <span class="align-middle">Profile</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a class="sidebar-link" href="pages-sign-in.php">
              <i class="align-middle" data-feather="log-in"></i>
              <span class="align-middle">Sign In</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a class="sidebar-link" href="pages-sign-up.php">
              <i class="align-middle" data-feather="user-plus"></i>
              <span class="align-middle">Sign Up</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="pages-blank.php">
              <i class="align-middle" data-feather="book"></i>
              <span class="align-middle">DANH SÁCH SẢN PHẨM</span>
            </a>
          </li>
          <li class="sidebar-header">Công cụ</li>

          <li class="sidebar-item active">
            <a class="sidebar-link" href="ui-buttons.php">
              <i class="align-middle" data-feather="plus"></i>
              <span class="align-middle">THÊM ẢNH SẢN PHẨM</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a class="sidebar-link" href="ui-forms.php">
              <i class="align-middle" data-feather="plus"></i>
              <span class="align-middle">THÊM SẢN PHẨM</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a class="sidebar-link" href="ui-cards.php">
              <i class="align-middle" data-feather="grid"></i>
              <span class="align-middle">Cards</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a class="sidebar-link" href="ui-typography.php">
              <i class="align-middle" data-feather="align-left"></i>
              <span class="align-middle">Typography</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a class="sidebar-link" href="icons-feather.php">
              <i class="align-middle" data-feather="coffee"></i>
              <span class="align-middle">Icons</span>
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="main">
      <nav class="navbar navbar-expand navbar-light navbar-bg">
        <a class="sidebar-toggle js-sidebar-toggle">
          <i class="hamburger align-self-center"></i>
        </a>
      </nav>

      <form class="content" method="post">
        <div class="container-fluid p-0">
          <div class="mb-3">
            <h1 class="h3 d-inline align-middle">THÊM ẢNH SẢN PHẨM</h1>
          </div>
          <div class="row">
            <div class="col-12 col-lg-6">
              <div class="card">
                <div class="card-header">
                  <h5 class="card-title mb-0">Thêm ảnh sản phẩm</h5>
                </div>
                <div class="card-body">
                  <label class="form-label">Tên ảnh</label>
                  <input type="text" name="product_name_image" class="form-control" placeholder="Tên mặt hàng" required
                    value="<?php
                    if (isset($product_name_image))
                      echo $product_name_image;
                    ?>" />
                </div>
                <div class="card-body">
                  <label class="form-label">Dữ liệu ảnh</label>
                  <input type="text" name="product_data_image" class="form-control" placeholder="Dữ liệu ảnh" required
                    value="<?php
                    if (isset($product_data_image))
                      echo $product_data_image;
                    ?>" />
                </div>
              </div>
            </div>

            <div class="col-12 col-lg-6">
              <div class="card">
                <div class="card-body">
                  <input type="submit" name="add_product_image" class="btn btn-success" value="THÊM ẢNH SẢN PHẨM" />
                </div>
              </div>
            </div>
          </div>
      </form>

      <footer class="footer">
        <div class="container-fluid">
          <div class="row text-muted">
            <div class="col-6 text-start">
              <p class="mb-0">
                <a class="text-muted" href="https://adminkit.io/" target="_blank"><strong>PHONGVUADMIN</strong></a>
                &copy;
              </p>
            </div>
            <div class="col-6 text-end">
              <ul class="list-inline">
                <li class="list-inline-item">
                  <a class="text-muted" href="https://adminkit.io/" target="_blank">Support</a>
                </li>
                <li class="list-inline-item">
                  <a class="text-muted" href="https://adminkit.io/" target="_blank">Help Center</a>
                </li>
                <li class="list-inline-item">
                  <a class="text-muted" href="https://adminkit.io/" target="_blank">Privacy</a>
                </li>
                <li class="list-inline-item">
                  <a class="text-muted" href="https://adminkit.io/" target="_blank">Terms</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>

  <script src="js/app.js"></script>
</body>

</html>