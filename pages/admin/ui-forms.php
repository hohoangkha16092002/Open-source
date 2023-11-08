<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta
      name="description"
      content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5"
    />
    <meta name="author" content="AdminKit" />
    <meta
      name="keywords"
      content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web"
    />

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />

    <link rel="canonical" href="https://demo-basic.adminkit.io/ui-forms.html" />

    <title>THÊM SẢN PHẢM</title>

    <link href="css/app.css" rel="stylesheet" />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap"
      rel="stylesheet"
    />
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

        <main class="content">
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
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Mã mặt hàng"
                    />
                  </div>
                  <div class="card-body">
                    <label class="form-label">Tên mặt hàng</label>
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Tên mặt hàng"
                    />
                  </div>
                  <div class="card-body">
                    <label class="form-label">Loại mặt hàng</label>
                    <select class="form-select">
                      <option selected>Loại mặt hàng</option>
                      <option>One</option>
                      <option>Two</option>
                      <option>Three</option>
                    </select>
                  </div>
                  <div class="card-body">
                    <label class="form-label">Hãng sản xuất</label>
                    <select class="form-select">
                      <option selected>Hãng sản xuất mặt hàng</option>
                      <option>One</option>
                      <option>Two</option>
                      <option>Three</option>
                    </select>
                  </div>
                  <div class="card-body">
                    <label class="form-label">Số lượng</label>
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Số lượng"
                    />
                  </div>
                </div>

                <div class="card">
                  <div class="card-body">
                    <label class="form-label">Mô tả</label>

                    <textarea
                      class="form-control"
                      rows="2"
                      placeholder="Mô tả"
                    ></textarea>
                  </div>
                </div>

                <div class="card">
                  <div class="card-body">
                    <label class="form-label">Ảnh sản phẩm</label>
                    <input
                      type="file"
                      class="form-control"
                      placeholder="Ảnh mặt hàng"
                    />
                  </div>
                </div>
              </div>

              <div class="col-12 col-lg-6">
                <div class="card">
                  <div class="card-body">
                    <label class="form-label">Khuyết mãi</label>
                    <select class="form-select">
                      <option selected>Khuyết mãi</option>
                      <option>One</option>
                      <option>Two</option>
                      <option>Three</option>
                    </select>
                  </div>
                  <div class="card-body">
                    <label class="form-label">CPU</label>
                    <input type="text" class="form-control" placeholder="CPU" />
                  </div>
                  <div class="card-body">
                    <label class="form-label">RAM</label>
                    <input type="text" class="form-control" placeholder="RAM" />
                  </div>
                  <div class="card-body">
                    <label class="form-label">Ổ đĩa</label>
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Ổ đĩa"
                    />
                  </div>
                  <div class="card-body">
                    <label class="form-label">Hệ điều hành</label>
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Hệ Điều Hành"
                    />
                  </div>
                  <div class="card-body">
                    <label class="form-label">Màn hình</label>
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Màn hình"
                    />
                  </div>
                  <div class="card-body">
                    <label class="form-label">VGA</label>
                    <input type="text" class="form-control" placeholder="VGA" />
                  </div>
                  <div class="card-body">
                    <label class="form-label">PIN</label>
                    <input type="text" class="form-control" placeholder="PIN" />
                  </div>
                  <div class="card-body">
                    <label class="form-label">Khối lượng</label>
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Khối lượng"
                    />
                  </div>
                  <div class="card-body">
                    <label class="form-label">Phụ kiện</label>
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Phụ Kiện"
                    />
                  </div>
                </div>

                <div class="card">
                  <div class="card-body">
                    <input
                      type="submit"
                      name="submit"
                      class="btn btn-success"
                      value="THÊM"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </main>

        <footer class="footer">
          <div class="container-fluid">
            <div class="row text-muted">
              <div class="col-6 text-start">
                <p class="mb-0">
                  <a
                    class="text-muted"
                    href="https://adminkit.io/"
                    target="_blank"
                    ><strong>PHONGVUADMIN</strong></a
                  >
                  &copy;
                </p>
              </div>
              <div class="col-6 text-end">
                <ul class="list-inline">
                  <li class="list-inline-item">
                    <a
                      class="text-muted"
                      href="https://adminkit.io/"
                      target="_blank"
                      >Support</a
                    >
                  </li>
                  <li class="list-inline-item">
                    <a
                      class="text-muted"
                      href="https://adminkit.io/"
                      target="_blank"
                      >Help Center</a
                    >
                  </li>
                  <li class="list-inline-item">
                    <a
                      class="text-muted"
                      href="https://adminkit.io/"
                      target="_blank"
                      >Privacy</a
                    >
                  </li>
                  <li class="list-inline-item">
                    <a
                      class="text-muted"
                      href="https://adminkit.io/"
                      target="_blank"
                      >Terms</a
                    >
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
