<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5" />
  <meta name="author" content="AdminKit" />
  <meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web" />

  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link rel="shortcut icon" href="img/icons/icon-48x48.png" />

  <link rel="canonical" href="https://demo-basic.adminkit.io/ui-forms.html" />

  <title>THÊM SẢN PHẢM</title>

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

  if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["add_product"])) {
    $product_name = $_POST["product_name"];
    $product_type = $_POST["product_type"];
    $product_brand = $_POST["product_brand"];
    $product_numbers = $_POST["product_numbers"];
    $product_cost = $_POST["product_cost"];
    $product_color = $_POST["product_color"];
    $product_description = $_POST["product_description"];
    $product_image = $_POST["product_image"];
    $product_sale = $_POST["product_sale"];
    $cpu = $_POST["cpu"];
    $ram = $_POST["ram"];
    $memories = $_POST["memories"];
    $operating_system = $_POST["operating_system"];
    $screen = $_POST["screen"];
    $vga = $_POST["vga"];
    $pin = $_POST["pin"];
    $mass = $_POST["mass"];
    $accessory = $_POST["accessory"];

    $sql_max_MaMH = "SELECT MAX(CAST(SUBSTRING(MaMH,  3) AS SIGNED)) AS max_MaMH FROM mathang WHERE MaMH LIKE 'LT%';";
    $result_max_MaMH = $conn->query($sql_max_MaMH);

    $row = $result_max_MaMH->fetch_assoc();
    $max_maMH = $row["max_MaMH"]; //Tìm mã mặt hàng lớn nhất
    $next_maMH = "LT" . str_pad($max_maMH + 1, 3, '0', STR_PAD_LEFT);
    
    $sql_add_product = "INSERT INTO `mathang` (`MaMH`, `TenMH`, `MaLMH`, `SoLuong`,`DonGia`,`MaHSX`, `IDAnhMH`, `Mau_SP`,`MoTaMH`, `MaKM`, `CPU`, `RAM`, `LuuTru`, `HDH`, `ManHinh`, `DoHoa`, `PIN`, `KhoiLuong`, `PhuKien`)
    VALUES ('$next_maMH', '$product_name', '$product_type', '$product_numbers', '$product_cost','$product_brand', '$product_image', '$product_color','$product_description', '$product_sale', '$cpu', '$ram', '$memories', '$operating_system','$screen', '$vga', '$pin', '$mass', '$accessory')";

    if (mysqli_query($conn, $sql_add_product)) {
      echo "";
    } else {
      echo "Error: " . $sql_add_product . mysqli_error($conn);
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

          <li class="sidebar-header">Tools & Components</li>

          <li class="sidebar-item">
            <a class="sidebar-link" href="ui-buttons.php">
              <i class="align-middle" data-feather="plus"></i>
              <span class="align-middle">THÊM ẢNH SẢN PHẨM</span>
            </a>
          </li>

          <li class="sidebar-item active">
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
            <h1 class="h3 d-inline align-middle">THÊM MẶT HÀNG</h1>
          </div>
          <div class="row">
            <div class="col-12 col-lg-6">
              <div class="card">
                <div class="card-header">
                  <h5 class="card-title mb-0">Thêm mặt hàng</h5>
                </div>
                <div class="card-body">
                  <label class="form-label">Tên mặt hàng</label>
                  <input type="text" name="product_name" class="form-control" placeholder="Tên mặt hàng" required value="<?php
                                                                                                                if (isset($product_name)) echo $product_name;
                                                                                                                ?>" />
                </div>
                <div class="card-body">
                  <label class="form-label">Loại mặt hàng</label>
                  <select class="form-select" name="product_type" required>
                    <?php
                    $sql_products_type = "SELECT * FROM dmloaimathang";
                    $result_products_type = mysqli_query($conn, $sql_products_type);

                    while ($row = mysqli_fetch_assoc($result_products_type)) {
                      echo '<option value="' . $row['MaLMH'] . '">'
                        . $row['TenLoai'] .
                        '</option>';
                    }
                    ?>
                  </select>

                </div>
                <div class="card-body">
                  <label class="form-label">Hãng sản xuất</label>
                  <select class="form-select" name="product_brand" required>
                    <?php
                    $sql_brand_type = "SELECT * FROM dmhangsanxuat";
                    $result_brand_type = mysqli_query($conn, $sql_brand_type);

                    while ($row = mysqli_fetch_assoc($result_brand_type)) {
                      echo '<option value="' . $row['MaHSX'] . '">'
                        . $row['TenHSX'] .
                        '</option>';
                    }
                    ?>
                  </select>
                </div>
                <div class="card-body">
                  <label class="form-label">Số lượng</label>
                  <input type="number" name="product_numbers" class="form-control" placeholder="Số lượng" required value="<?php if (isset($product_numbers))
                                                                                                                  echo $product_numbers;
                                                                                                                ?>" />
                </div>
                <div class="card-body">
                  <label class="form-label">Đơn giá</label>
                  <input type="number" name="product_cost" class="form-control" placeholder="Đơn giá" required value="<?php if (isset($product_cost))
                                                                                                                  echo $product_cost;
                                                                                                                ?>" />
                </div>
                <div class="card-body">
                  <label class="form-label">Màu sản phẩm</label>
                  <input type="text" name="product_color" class="form-control" placeholder="Màu sản phẩm" required value="<?php if (isset($product_color))
                                                                                                                    echo $product_color;
                                                                                                                  ?>" />
                </div>
              </div>

              <div class="card">
                <div class="card-body">
                  <label class="form-label">Mô tả</label>

                  <textarea class="form-control" name="product_description" rows="2" placeholder="Mô tả" required value="<?php if (isset($product_description))
                                                                                                                  echo $product_description;
                                                                                                                ?>"></textarea>
                </div>
              </div>

              <div class="card">
                <div class="card-body">
                  <label class="form-label">Ảnh sản phẩm</label>
                  <select class="form-select" name="product_image" required>
                    <?php
                    $sql_images_type = "SELECT * FROM anhmh";
                    $result_images_type = mysqli_query($conn, $sql_images_type);

                    while ($row = mysqli_fetch_assoc($result_images_type)) {
                      echo '<option value="' . $row['IDAnhMH'] . '">'
                        . $row['TenAnh'] .
                        '</option>';
                    }
                    ?>
                  </select>
                </div>
              </div>
            </div>

            <div class="col-12 col-lg-6">
              <div class="card">
                <div class="card-body">
                  <label class="form-label">Khuyến mãi</label>
                  <select class="form-select" name="product_sale">
                    <?php
                    $sql_sale_type = "SELECT * FROM khuyenmai";
                    $result_sale_type = mysqli_query($conn, $sql_sale_type);

                    while ($row = mysqli_fetch_assoc($result_sale_type)) {
                      echo '<option value="' . $row['MaKM'] . '">'
                        . $row['TenKM'] .
                        '</option>';
                    }
                    ?>
                  </select>
                </div>
                <div class="card-body">
                  <label class="form-label">CPU</label>
                  <input type="text" name="cpu" class="form-control" placeholder="CPU" value="<?php if (isset($cpu))
                                                                                                echo $cpu;
                                                                                              ?>" />
                </div>
                <div class="card-body">
                  <label class="form-label">RAM</label>
                  <input type="text" name="ram" class="form-control" placeholder="RAM" value="<?php if (isset($ram))
                                                                                                echo $ram;
                                                                                              ?>" />
                </div>
                <div class="card-body">
                  <label class="form-label">Ổ đĩa</label>
                  <input type="text" name="memories" class="form-control" placeholder="Ổ đĩa" value="<?php if (isset($memories))
                                                                                                        echo $memories;
                                                                                                      ?>" />
                </div>
                <div class="card-body">
                  <label class="form-label">Hệ điều hành</label>
                  <input type="text" name="operating_system" class="form-control" placeholder="Hệ điều hành" value="<?php if (isset($operating_system))
                                                                                                                      echo $operating_system;
                                                                                                                    ?>" />
                </div>
                <div class="card-body">
                  <label class="form-label">Màn hình</label>
                  <input type="text" name="screen" class="form-control" placeholder="Màn hình" value="<?php if (isset($screen))
                                                                                                        echo $screen;
                                                                                                      ?>" />
                </div>
                <div class="card-body">
                  <label class="form-label">VGA</label>
                  <input type="text" name="vga" class="form-control" placeholder="VGA" value="<?php if (isset($vga))
                                                                                                echo $vga;
                                                                                              ?>" />
                </div>
                <div class="card-body">
                  <label class="form-label">PIN</label>
                  <input type="text" name="pin" class="form-control" placeholder="PIN" value="<?php if (isset($pin))
                                                                                                echo $pin;
                                                                                              ?>" />
                </div>
                <div class="card-body">
                  <label class="form-label">Khối lượng</label>
                  <input type="text" name="mass" class="form-control" placeholder="Khối lượng" value="<?php if (isset($mass))
                                                                                                        echo $mass;
                                                                                                      ?>" />
                </div>
                <div class="card-body">
                  <label class="form-label">Phụ kiện</label>
                  <input type="text" name="accessory" class="form-control" placeholder="Phụ Kiện" value="<?php if (isset($accessory))
                                                                                                            echo $accessory;
                                                                                                          ?>" />
                </div>
              </div>

              <div class="card">
                <div class="card-body">
                  <input type="submit" name="add_product" class="btn btn-success" value="THÊM SẢN PHẨM" />
                </div>
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