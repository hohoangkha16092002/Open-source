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

    <link rel="canonical" href="https://demo-basic.adminkit.io/ui-forms.html" />

    <title>XÓA SẢN PHẨM</title>

    <link href="css/app.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet" />
</head>
<?php
include '../config.php';
if (isset($_GET['MaMH'])) {
    $MaMH = $_GET['MaMH'];
    $sql = "SELECT * FROM mathang
    JOIN dmhangsanxuat ON mathang.MaHSX = dmhangsanxuat.MaHSX
    JOIN anhmh ON mathang.IDAnhMH = anhmh.IDAnhMH
    JOIN khuyenmai ON mathang.MaKM = khuyenmai.MaKM
    JOIN dmloaimathang ON mathang.MaLMH = dmloaimathang.MaLMH
    WHERE mathang.MaMH = '$MaMH'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) <> 0) {
        $product = mysqli_fetch_assoc($result);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
        $TenMH = $_POST['TenMH'];
        $LoaiMH = $_POST['LoaiMH'];
        $HSX = $_POST['TenHSX'];
        $SoLuong = $_POST['SoLuong'];
        $MoTa = trim($_POST['MoTaMH']);
        $AnhSP = $_POST['AnhMH'];
        $KhuyenMai = $_POST['TenKM'];
        $CPU = $_POST['CPU'];
        $RAM = $_POST['RAM'];
        $ODia = $_POST['LuuTru'];
        $HDH = $_POST['HDH'];
        $ManHinh = $_POST['ManHinh'];
        $VGA = $_POST['DoHoa'];
        $PIN = $_POST['PIN'];
        $KhoiLuong = $_POST['KhoiLuong'];
        $PhuKien = $_POST['PhuKien'];

        $sql_update = "DELETE FROM mathang WHERE `mathang`.`MaMH` = '$MaMH' ";
        $result_update = mysqli_query($conn, $sql_update);
        // var_dump($sql_update);exit;
        if ($result_update) {
            echo "<script>
                    setTimeout(function(){
                        alert('Xóa thành công');
                        window.location.href = 'pages-blank.php';
                    }, 0);
                </script>";
            // header('Location: ?MaMH=' . $MaMH . '');
        } else {
            echo 'Error';
        }
    }
}

?>

<body>
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

            <main class="content">
                <div class="container-fluid p-0">
                    <div class="mb-3">
                        <h1 class="h3 d-inline align-middle">BẠN CÓ MUỐN XÓA SẢN PHẨM <?php echo $product['TenMH']; ?> ? </h1>
                    </div>
                    <form method="post">
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <label class="form-label">Tên mặt hàng</label>
                                        <input type="text" class="form-control" name="TenMH" placeholder="Tên mặt hàng"
                                            value="<?php echo $product['TenMH']; ?>" readonly/>
                                    </div>
                                    <div class="card-body">
                                        <label class="form-label">Loại mặt hàng</label>
                                        <select class="form-select" name="LoaiMH" readonly>
                                            <option value="<?php echo $product['MaLMH']; ?>">
                                                <?php echo $product['TenLoai']; ?>
                                            </option>
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
                                        <select class="form-select" name="TenHSX" readonly>
                                            <option value="<?php echo $product['MaHSX']; ?>">
                                                <?php echo $product['TenHSX']; ?>
                                            </option>
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
                                        <input type="text" class="form-control" name="SoLuong" placeholder="Số lượng"
                                            value="<?php echo $product['SoLuong']; ?>" readonly/>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-body">
                                        <label class="form-label">Mô tả</label>
                                        <textarea class="form-control" rows="2" name="MoTaMH"
                                            placeholder="Mô tả" readonly><?php echo htmlspecialchars($product['MoTaMH']); ?></textarea>
                                    </div>

                                </div>


                                <div class="card">
                                    <div class="card-body">
                                        <label class="form-label">Ảnh sản phẩm</label>
                                        <select class="form-select" name="AnhMH">
                                            <option value="<?php echo $product['IDAnhMH']; ?>">
                                                <?php echo $product['TenAnh']; ?>
                                            </option>
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
                                        <label class="form-label">Khuyết mãi</label>
                                        <select class="form-select" name="TenKM">
                                            <option value="<?php echo $product['MaKM']; ?>">
                                                <?php echo $product['TenKM']; ?>
                                            </option>
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
                                        <input type="text" class="form-control" name="CPU" placeholder="CPU"
                                            value="<?php echo $product['CPU']; ?>" readonly/>
                                    </div>
                                    <div class="card-body">
                                        <label class="form-label">RAM</label>
                                        <input type="text" class="form-control " name="RAM" placeholder="RAM"
                                            value="<?php echo $product['RAM']; ?>" readonly/>
                                    </div>
                                    <div class="card-body">
                                        <label class="form-label">Ổ đĩa</label>
                                        <input type="text" class="form-control" name="LuuTru" placeholder="Ổ đĩa"
                                            value="<?php echo $product['LuuTru']; ?>"readonly />
                                    </div>
                                    <div class="card-body">
                                        <label class="form-label">Hệ điều hành</label>
                                        <input type="text" class="form-control" name="HDH" placeholder="Hệ Điều Hành"
                                            value="<?php echo $product['HDH']; ?>" readonly/>
                                    </div>
                                    <div class="card-body">
                                        <label class="form-label">Màn hình</label>
                                        <input type="text" class="form-control" name="ManHinh" placeholder="Màn hình"
                                            value="<?php echo $product['ManHinh']; ?>"  readonly/>
                                    </div>
                                    <div class="card-body">
                                        <label class="form-label">VGA</label>
                                        <input type="text" class="form-control" name="DoHoa" placeholder="VGA"
                                            value="<?php echo $product['DoHoa']; ?>" readonly />
                                    </div>
                                    <div class="card-body">
                                        <label class="form-label">PIN</label>
                                        <input type="text" class="form-control" name="PIN" placeholder="PIN"
                                            value="<?php echo $product['PIN']; ?>" readonly />
                                    </div>
                                    <div class="card-body">
                                        <label class="form-label">Khối lượng</label>
                                        <input type="text" class="form-control" name="KhoiLuong"
                                            placeholder="Khối lượng" value="<?php echo $product['KhoiLuong']; ?>" readonly />
                                    </div>
                                    <div class="card-body">
                                        <label class="form-label">Phụ kiện</label>
                                        <input type="text" class="form-control" name="PhuKien" placeholder="Phụ Kiện"
                                            value="<?php echo $product['PhuKien']; ?>" readonly />
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-body">
                                        <input type="submit" name="update" class="btn btn-danger" value="XÓA" />
                                        <a href="javascript:window.history.back(-1);" class="btn btn-primary">HỦY</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </main>

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-muted">
                        <div class="col-6 text-start">
                            <p class="mb-0">
                                <a class="text-muted" href="https://adminkit.io/"
                                    target="_blank"><strong>PHONGVUADMIN</strong></a>
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

    <script src="js/app.js">
        document.getElementById("mySelect").disabled = true; // Chỉ đọc

    </script>
</body>

</html>