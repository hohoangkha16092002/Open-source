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

  // Check connection
  if (mysqli_connect_errno()) {
    die("Connection failed: " . mysqli_connect_error());
  }

  // Initialize variables
  $product_id = $product_name = $product_type = $product_numbers = $product_brand = "";
  $product_price = $product_description = $product_image = $product_sale = $color = "";
  $cpu = $ram = $memories = $operating_system = $screen = $vga = $pin = $mass = $accessory = "";

  // Check if the form is submitted
  if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["add_product"])) {
    // Retrieve form data
    $product_id = $_POST["product_id"];
    $product_name = $_POST["product_name"];
    $product_type = $_POST["product_type"];
    $product_brand = $_POST["product_brand"];
    $product_numbers = $_POST["product_numbers"];
    $product_price = $_POST["product_price"];
    $product_description = $_POST["product_description"];
    $product_image = $_FILES["product_image"]["name"];
    $product_sale = $_POST["product_sale"];
    $color = $_POST["color"];
    $cpu = $_POST["cpu"];
    $ram = $_POST["ram"];
    $memories = $_POST["memories"];
    $operating_system = $_POST["operating_system"];
    $screen = $_POST["screen"];
    $vga = $_POST["vga"];
    $pin = $_POST["pin"];
    $mass = $_POST["mass"];
    $accessory = $_POST["accessory"];
    var_dump($product_image);
    var_dump($product_brand);
    var_dump($product_type);
    var_dump($product_description);
    var_dump($product_sale);
    // Validate form data (add more validation as needed)

    // Check if product type, brand, and sale exist in their respective tables
    $check_product_type = "SELECT * FROM `dmloaimathang` WHERE MaLMH = '$product_type'";
    $result_product_type = mysqli_query($conn, $check_product_type);

    $check_product_brand = "SELECT * FROM `dmhangsanxuat` WHERE MaHSX = '$product_brand'";
    $result_product_brand = mysqli_query($conn, $check_product_brand);

    $check_product_sale = "SELECT * FROM `khuyenmai` WHERE MaKM = '$product_sale'";
    $result_product_sale = mysqli_query($conn, $check_product_sale);

    if (mysqli_num_rows($result_product_type) > 0 && mysqli_num_rows($result_product_brand) > 0 && mysqli_num_rows($result_product_sale) > 0) {
      // Insert into the database
      $sql_add_product = "INSERT INTO `mathang` (`MaMH`, `TenMH`, `MaLMH`, `SoLuong`, `DonGia`, `MaHSX`, `IDAnhMH`, `Mau_SP`, `MoTaMH`, `MaKM`, `CPU`, `RAM`, `LuuTru`, `HDH`, `ManHinh`, `DoHoa`, `PIN`, `KhoiLuong`, `PhuKien`)
                            VALUES ('$product_id', '$product_name', '$product_type', '$product_numbers', '$product_price', '$product_brand', '$product_image', '$color', '$product_description', '$product_sale', '$cpu', '$ram', '$memories', '$operating_system', '$screen', '$vga', '$pin', '$mass', '$accessory')";

      if (mysqli_query($conn, $sql_add_product)) {
        echo "Thêm thành công";
      } else {
        echo "Error: " . mysqli_error($conn);
      }
    } else {
      echo "Invalid product type, brand, or sale.";
    }
  }

  // Close the database connection
  mysqli_close($conn);
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
              <i class="align-middle" data-feather="square"></i>
              <span class="align-middle">Buttons</span>
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

      <form class="content" method="post" enctype="multipart/form-data">
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
                  <label class="form-label">Mã mặt hàng</label>
                  <input type="text" name="product_id" class="form-control" placeholder="Mã mặt hàng" value="<?php
                                                                                                              echo $product_id;
                                                                                                              ?>" />
                </div>
                <div class="card-body">
                  <label class="form-label">Tên mặt hàng</label>
                  <input type="text" name="product_name" class="form-control" placeholder="Tên mặt hàng" value="<?php
                                                                                                                echo $product_name;
                                                                                                                ?>" />
                </div>
                <div class="card-body">
                  <label class="form-label">Loại mặt hàng</label>
                  <select class="form-select" name="product_type">
                    <option selected>Loại mặt hàng</option>
                    <option value="BSLT" <?php echo ($product_type == 'BSLT') ? 'selected' : ''; ?>>Văn phòng</option>
                    <option value="GMLT" <?php echo ($product_type == 'GMLT') ? 'selected' : ''; ?>>Gaming</option>
                    <option value="TIOLT" <?php echo ($product_type == 'TIOLT') ? 'selected' : ''; ?>>Cảm ứng</option>
                  </select>
                </div>
                <div class="card-body">
                  <label class="form-label">Hãng sản xuất</label>
                  <select class="form-select" name="product_brand">
                    <option selected>Hãng sản xuất mặt hàng</option>
                    <option value="AC" <?php echo ($product_brand == 'AC') ? 'selected' : ''; ?>>Acer</option>
                    <option value="AP" <?php echo ($product_brand == 'AP') ? 'selected' : ''; ?>>Apple</option>
                    <option value="AS" <?php echo ($product_brand == 'AS') ? 'selected' : ''; ?>>Asus</option>
                    <option value="DE" <?php echo ($product_brand == 'DE') ? 'selected' : ''; ?>>Dell</option>
                    <option value="HP" <?php echo ($product_brand == 'HP') ? 'selected' : ''; ?>>HP</option>
                    <option value="LE" <?php echo ($product_brand == 'LE') ? 'selected' : ''; ?>>Lenovo</option>
                    <option value="LG" <?php echo ($product_brand == 'LG') ? 'selected' : ''; ?>>LG</option>
                    <option value="MI" <?php echo ($product_brand == 'MI') ? 'selected' : ''; ?>>Microsoft</option>
                    <option value="MS" <?php echo ($product_brand == 'MS') ? 'selected' : ''; ?>>MSI</option>
                  </select>
                </div>

                <div class="card-body">
                  <label class="form-label">Số lượng</label>
                  <input type="text" name="product_numbers" class="form-control" placeholder="Số lượng" value="<?php
                                                                                                                echo $product_numbers;
                                                                                                                ?>" />
                </div>
                <div class="card-body">
                  <label class="form-label">Đơn giá</label>
                  <input type="text" name="product_price" class="form-control" placeholder="Đơn giá" value="<?php
                                                                                                            echo $product_price;
                                                                                                            ?>" />
                </div>
              </div>

              <div class="card">
                <div class="card-body">
                  <label class="form-label">Mô tả</label>

                  <textarea class="form-control" name="product_description" rows="2" placeholder="Mô tả" value="<?php
                                                                                                                echo $product_description;
                                                                                                                ?>"></textarea>
                </div>
              </div>

              <div class="card">
                <div class="card-body">
                  <label class="form-label">ID ảnh MH</label>
                  <input type="text" name="product_image" class="form-control" placeholder="Ảnh MH" value="<?php
                                                                                                          echo $product_image;
                                                                                                          ?>" />
                </div>
              </div>
            </div>

            <div class="col-12 col-lg-6">
              <div class="card">
                <div class="card-body">
                  <label class="form-label">Khuyến mãi</label>
                  <select class="form-select" name="product_sale">
                    <option selected>Khuyến mãi</option>
                    <option value="KM001" <?php echo ($product_sale == 'KM001') ? 'selected' : ''; ?>>Khách hàng thân thiết</option>
                    <option value="KM002" <?php echo ($product_sale == 'KM002') ? 'selected' : ''; ?>>Giảm giá nhập học</option>
                    <option value="KM003" <?php echo ($product_sale == 'KM003') ? 'selected' : ''; ?>>Không giảm giá</option>
                    <option value="KM004" <?php echo ($product_sale == 'KM004') ? 'selected' : ''; ?>>Xả kho</option>
                  </select>
                </div>

                <div class="card-body">
                  <label class="form-label">Màu</label>
                  <input type="text" name="color" class="form-control" placeholder="Color" value="<?php
                                                                                                  echo $color;
                                                                                                  ?>" />
                </div>
                <div class="card-body">
                  <label class="form-label">CPU</label>
                  <input type="text" name="cpu" class="form-control" placeholder="CPU" value="<?php
                                                                                              echo $cpu;
                                                                                              ?>" />
                </div>
                <div class="card-body">
                  <label class="form-label">RAM</label>
                  <input type="text" name="ram" class="form-control" placeholder="RAM" value="<?php
                                                                                              echo $ram;
                                                                                              ?>" />
                </div>
                <div class="card-body">
                  <label class="form-label">Ổ đĩa</label>
                  <input type="text" name="memories" class="form-control" placeholder="Ổ đĩa" value="<?php
                                                                                                      echo $memories;
                                                                                                      ?>" />
                </div>
                <div class="card-body">
                  <label class="form-label">Hệ điều hành</label>
                  <input type="text" name="operating_system" class="form-control" placeholder="Hệ điều hành" value="<?php
                                                                                                                    echo $operating_system;
                                                                                                                    ?>" />
                </div>
                <div class="card-body">
                  <label class="form-label">Màn hình</label>
                  <input type="text" name="screen" class="form-control" placeholder="Màn hình" value="<?php
                                                                                                      echo $screen;
                                                                                                      ?>" />
                </div>
                <div class="card-body">
                  <label class="form-label">VGA</label>
                  <input type="text" name="vga" class="form-control" placeholder="VGA" value="<?php
                                                                                              echo $vga;
                                                                                              ?>" />
                </div>
                <div class="card-body">
                  <label class="form-label">PIN</label>
                  <input type="text" name="pin" class="form-control" placeholder="PIN" value="<?php
                                                                                              echo $pin;
                                                                                              ?>" />
                </div>
                <div class="card-body">
                  <label class="form-label">Khối lượng</label>
                  <input type="text" name="mass" class="form-control" placeholder="Khối lượng" value="<?php
                                                                                                      echo $mass;
                                                                                                      ?>" />
                </div>
                <div class="card-body">
                  <label class="form-label">Phụ kiện</label>
                  <input type="text" name="accessory" class="form-control" placeholder="Phụ Kiện" value="<?php
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