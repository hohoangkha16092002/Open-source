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

  <link rel="canonical" href="https://demo-basic.adminkit.io/pages-blank.html" />

  <title>Blank Page | AdminKit Demo</title>

  <link href="css/app.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet" />
</head>

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
          <li class="sidebar-item active">
            <a class="sidebar-link" href="pages-blank.php">
              <i class="align-middle" data-feather="book"></i>
              <span class="align-middle">DANH SÁCH SẢN PHẨM</span>
            </a>
          </li>
          <li class="sidebar-header">Công cụ</li>

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
        <div class="col-12 col-lg-12 col-xxl-12 d-flex">
          <div class="card flex-fill">
            <div class="card-header">
              <h5 class="card-title mb-0">DANH SÁCH SẢN PHẨM</h5>
            </div>
            <table class="table table-hover my-0">
              <thead>
                <tr>
                  <th class="d-none d-md-table-cell">Mã</th>
                  <th class="d-none d-md-table-cell">Tên mặt hàng</th>
                  <th class="d-none d-xl-table-cell">Loại mặt hàng</th>
                  <th class="d-none d-xl-table-cell">Số lượng</th>
                  <th class="d-none d-md-table-cell">Đơn giá</th>
                  <th class="d-none d-md-table-cell">Hãng sản xuất</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>

                <?php
                include '../config.php';
                $sql = "SELECT TenMH, TenLoai, SoLuong, DonGia, TenHSX, MaMH from mathang
                join dmhangsanxuat on mathang.MaHSX = dmhangsanxuat.MaHSX
                join dmloaimathang on mathang.MaLMH = dmloaimathang.MaLMH";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) <> 0) {
                  while ($rows = mysqli_fetch_row($result)) {
                    echo '<tr>
                  <td class="d-none d-xl-table-cell">' . $rows[5] . '</td>
                  <td class="d-none d-xl-table-cell">' . $rows[0] . '</td>
                  <td class="d-none d-xl-table-cell">' . $rows[1] . '</td>
                  <td class="d-none d-xl-table-cell">' . $rows[2] . '</td>
                  <td class="d-none d-md-table-cell">' . number_format($rows[3], 0, '.', '.') . 'đ</td>
                  <td class="d-none d-md-table-cell">' . $rows[4] . '</td>
                  <td>
                  <a class="btn btn-primary" href="pages-blank-edit.php?MaMH=' . $rows[5] . '">Chỉnh sửa</a>
                    <a class="btn btn-primary" href="delete.php?MaMH=' . $rows[5] . '">Xóa</a>
                  </td>
                </tr>';
                  }
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </main>

      <footer class="footer">
        <div class="container-fluid">
          <div class="row text-muted">
            <div class="col-6 text-start">
              <p class="mb-0">
                <a class="text-muted" href="https://adminkit.io/" target="_blank"><strong>AdminKit</strong></a>
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