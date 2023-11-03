<?php
include("config.php");
$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Kết nối tới cơ sở dữ liệu thất bại: " . $conn->connect_error);
}

if (isset($_GET['maMH'])) {
  $maMH = $_GET['maMH'];

  $sql = "SELECT mathang.*, dmhangsanxuat.TenHSX, dmloaimathang.TenLoai, anhmh.DLAnh 
        FROM `mathang`
        JOIN dmhangsanxuat ON mathang.MaHSX = dmhangsanxuat.MaHSX
        JOIN dmloaimathang ON mathang.MaLMH = dmloaimathang.MaLMH
        JOIN anhmh ON mathang.MaMH = anhmh.MaMH
        WHERE mathang.MaMH = '$maMH'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title><?php echo $row['TenMH']; ?></title>
    </head>

    <body>
      <div class="css-rf24tk">
        <div class="css-0">
          <div class="css-tqzoy9"><a href="/" class="breadcrumb-item css-1s8chay">
              <div type="body" class="css-kwe6s1"><svg fill="none" viewBox="0 0 24 24" size="24" class="css-26qhcs" color="placeholder" height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M11.512 1.43055C11.7928 1.18982 12.2073 1.18982 12.4881 1.43055L21.4881 9.14455C21.7264 9.3488 21.8123 9.67984 21.7035 9.9742C21.5946 10.2686 21.3139 10.464 21 10.464H20.75V19.18C20.75 20.1852 19.9665 21 19 21H15V16.1776C15 15.6001 14.7542 15.0462 14.3166 14.6378C13.879 14.2294 13.2856 14 12.6667 14H11.3333C10.7144 14 10.121 14.2294 9.6834 14.6378C9.24583 15.0462 9 15.6001 9 16.1776V21H5C4.0335 21 3.25 20.1852 3.25 19.18V10.464H3.00004C2.68618 10.464 2.40551 10.2686 2.29662 9.9742C2.18773 9.67984 2.27365 9.3488 2.51195 9.14455L11.512 1.43055Z" fill="currentColor"></path>
                </svg></div>
            </a>
            <div class="css-889chh"><svg fill="none" viewBox="0 0 24 24" size="16" class="css-26qhcs" color="placeholder" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                <path d="M8.49976 19.0001L15.4998 12.0001L8.49976 5.00012" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg></div><a href="https://phongvu.vn/p/dien-gia-dung" class="breadcrumb-item css-1s8chay">
              <div type="body" class="css-kwe6s1"><?php echo $row['TenHSX']; ?></div>
            </a>
            <div class="css-889chh"><svg fill="none" viewBox="0 0 24 24" size="16" class="css-26qhcs" color="placeholder" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                <path d="M8.49976 19.0001L15.4998 12.0001L8.49976 5.00012" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg></div><a href="/c/do-gia-dung-thiet-bi-gia-dinh" class="breadcrumb-item css-1s8chay">
              <div type="body" class="css-kwe6s1"><?php echo $row['TenLoai']; ?></div>
            </a>
          </div>
          <div class="css-6l7rf5">
            <div class="css-1hwtax5">
              <div class="css-rfz8yf" style="padding: 24px; height: 100%;">
                <div class="css-4cffwv">
                  <div class="css-1i1dodm">
                    <div data-content-region-name="imgProductDetail" data-track-content="true" data-content-name="viewImage" data-content-target="productImage" data-content-payload="{&quot;sku&quot;:&quot;230803500&quot;,&quot;screenName&quot;:&quot;productDetail&quot;,&quot;index&quot;:0}">
                      <div class="productDetailPreview" style="cursor: pointer; position: relative; margin-bottom: 0.5rem;">
                        <div width="100%" class="css-j4683g"><img src="<?php echo $row['DLAnh']; ?>" loading="lazy" hover="" decoding="async" alt="Laptop Acer" fetchpriority="low" style="width: 100%; height: 100%; object-fit: contain; position: absolute; top: 0px; left: 0px;"></div>
                      </div>
                      <div class="css-12isv00">
                        <div class="css-1qorxog">
                          <div height="50px" width="50px" class="css-1dje825"><img src="<?php echo $row['DLAnh']; ?>" loading="lazy" decoding="async" alt="Laptop Acer" style="width: 100%; height: 50px; object-fit: contain;"></div>
                        </div>
                        <div class="css-4ok7dy">
                          <div height="50px" width="50px" class="css-1dje825"><img src="<?php echo $row['DLAnh']; ?>" loading="lazy" decoding="async" alt="Laptop Acer" style="width: 100%; height: 50px; object-fit: contain;"></div>
                        </div>
                      </div>
                    </div>
                    <div class="css-9eazwe">
                      <div width="100%" color="divider" class="css-1fm9yfq"></div>
                    </div>
                    <div class="css-1nv5d5l">
                      <ul>
                        <li>Thiết kế gọn nhẹ</li>
                        <li>4 chế độ nhiệt</li>
                        <li>2 chế độ gió</li>
                        <li>Sấy khô hiệu quả và nhanh chóng</li>
                        <li>Công nghệ ion bảo vệ da đầu khỏe mạnh</li>
                      </ul>
                    </div><a target="_blank" rel="noopener noreferrer" class="css-kfv2zc" color="link500">
                      <div type="body" class="button-text css-1c7714w" color="link500">Xem thông tin chi tiết</div>
                    </a>
                  </div>
                  <div class="css-6b3ezu">
                    <div>
                      <h1 class="css-4kh4rf"><?php echo $row['TenMH']; ?></h1>
                      <div>
                        <div type="caption" color="textSecondary" class="css-1f5a6jh" style="font-size: 14px; margin-top: -4px;">Thương hiệu: <a target="_self" class="css-cbrxda" href="/dreame-brand.dreame"><span class="css-n67qkj"><?php echo $row['TenHSX']; ?></span></a><span class="css-1qgvt7n"></span> || MaMH: <?php echo $row['MaMH']; ?><span class="css-1qgvt7n"></span></div>
                      </div>
                    </div>
                    <div class="css-qmrpdk"></div>
                    <div class="css-2zf5gn">
                      <div type="title" class="att-product-detail-latest-price css-roachw" color="primary500"><?php echo number_format($row['DonGia'], 0, '.', '.'); ?>₫</div>
                      <div class="css-3mjppt">
                        <div type="caption" class="att-product-detail-retail-price css-18z00w6" color="textSecondary">4.990.000₫</div>
                        <div type="caption" color="primary500" class="css-2rwx6s">-50.1%</div>
                      </div>
                    </div>
                    <div class="css-1veiyrs">
                      <div width="100%" color="divider" class="css-1fm9yfq"></div>
                    </div>
                    <div class="css-8sqizr">
                      <div class="css-ixp6xz">Chọn 1 trong những khuyến mãi sau</div>
                      <div data-content-region-name="optionalPromotion" data-track-content="true" data-content-name="Oct 2023 | Flash Sales Online - SDA 115" data-content-target="productDetail" data-content-payload="{&quot;sku&quot;:&quot;230803500&quot;,&quot;action&quot;:&quot;unselect&quot;,&quot;promotionID&quot;:500129,&quot;screenName&quot;:&quot;productDetail&quot;,&quot;index&quot;:0}" class="att-product-detail-selection-promotion-500129 css-1srqtgz" direction="row">
                        <div class="css-qx8kls"><img src="https://shopfront-cdn.tekoapis.com/cart/gift-filled.png" alt="icon" height="25" width="25"></div>
                        <div direction="column" height="100%" class="css-petlr1" style="flex: 1 1 0%;">
                          <div>
                            <div class="att-product-detail-selection-promotion-title-500129 css-1j2vnz6">Giảm 2.500.000₫ (áp dụng vào giá sản phẩm)</div>
                            <div class="att-product-detail-selection-promotion-description-500129 css-756cgs">Khuyến mãi áp dụng khi mua tối thiểu 1 sản phẩm</div>
                          </div>
                          <div width="100%" direction="row" class="css-x52bm1">
                            <div class="att-product-detail-selection-promotion-ended-at-500129 css-2cgl77">HSD: 24/10/2023</div>
                            <div class="css-1aa534q">Bỏ chọn</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- <div class="css-f7zc9t">
                      <div data-content-region-name="descriptionDetail" data-track-content="true" data-content-name="buyNow" data-content-target="cart" data-content-payload="{&quot;sku&quot;:&quot;230803500&quot;,&quot;screenName&quot;:&quot;productDetail&quot;}" class="css-yp9swi"><button height="2.5rem" color="white" class="att-detail-page-buy-now-button css-f7nwna" type="button">
                          <div type="subtitle" class="css-fdtrln">MUA NGAY</div><span style="margin-left: 0px;">
                            <div class="css-157jl91"></div>
                          </span>
                        </button></div>
                      <div data-content-region-name="descriptionDetail" data-track-content="true" data-content-name="addToCart" data-content-target="productDetail" data-content-payload="{&quot;sku&quot;:&quot;230803500&quot;,&quot;screenName&quot;:&quot;productDetail&quot;}" class="css-yp9swi"><button height="2.5rem" color="primary500" class="css-1nhnj3v" type="button">
                          <div type="subtitle" class="css-fdtrln">THÊM VÀO GIỎ HÀNG</div><span style="margin-left: 0px;">
                            <div class="css-157jl91"></div>
                          </span>
                        </button></div>
                    </div> -->
                    <div class="css-9eazwe">
                      <div width="100%" color="divider" class="css-1fm9yfq"></div>
                    </div>
                    <div class="BOXKHUYENMAILIENQUAN css-1rggx5t">
                      <div class="css-mz7xyg">Khuyến mãi liên quan</div>
                      <ul>
                        <li><span>Giảm thêm đến 300.000đ dành cho Học sinh - sinh viên</span><a href="https://phongvu.vn/p/chuong-trinh-khuyen-mai-phong-vu" target="blank" class="css-1ty6934">Xem chi tiết</a></li>
                        <li><span>Nhập mã <strong>QRPV9 </strong> khi thanh toán qua VNPAY-QR: <br> - Giảm <span style="color: rgb(237, 33, 1); font-weight: 500;">50.000đ </span> cho đơn từ 2,500,000đ <br> - Giảm <span style="color: rgb(237, 33, 1); font-weight: 500;">100.000đ </span> cho đơn từ 5,000,000đ <br> - Giảm <span style="color: rgb(237, 33, 1); font-weight: 500;">350.000đ </span> cho đơn từ 15,000,000đ</span><a href="https://phongvu.vn/cong-nghe/uu-dai-vnpay/" target="blank" class="css-1ty6934">Xem chi tiết</a></li>
                        <li><span>Nhập mã <strong> PVZLP200</strong> giảm thêm đến <span style="color: rgb(237, 33, 1); font-weight: 500;">200.000đ </span> khi thanh toán qua ZaloPay</span><a href="https://phongvu.vn/cong-nghe/uu-dai-thanh-toan-zalopay/" target="blank" class="css-1ty6934">Xem chi tiết</a></li>
                      </ul>
                    </div>
                    <div class="productAfterPromoBox"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="css-l5vln9">
              <div class="css-lwjlcs">
                <div class="css-1j6ajm9"><span class="css-1v2cybn" size="40"><img src="https://lh3.googleusercontent.com/qOnchEYD7No58bjEQs5pf_05IV-0DmoaCmEFXD007VHs5cn16LZ6PC98IlY3OiBL9UXsEwNzwiVHRrvSDMQ" width="40" height="40" alt="avtSrc" class="css-oxr6q3"></span>
                  <div><a target="_self" class="css-cbrxda" href="/cua-hang/1?pageTitle=C%C3%94NG%20TY%20C%E1%BB%94%20PH%E1%BA%A6N%20TH%C6%AF%C6%A0NG%20M%E1%BA%A0I%20D%E1%BB%8ACH%20V%E1%BB%A4%20PHONG%20V%C5%A8">
                      <div type="subtitle" class="css-4eq9p2">CÔNG TY CỔ PHẦN THƯƠNG MẠI DỊCH VỤ PHONG VŨ<svg fill="currentColor" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 477.867 477.867" size="14" class="css-1ptts6n" color="success500" height="14" width="14" xmlns="http://www.w3.org/2000/svg" style="margin-left: 8px; margin-bottom: 4px;">
                          <g>
                            <g>
                              <path d="M238.933,0C106.974,0,0,106.974,0,238.933s106.974,238.933,238.933,238.933s238.933-106.974,238.933-238.933
			C477.726,107.033,370.834,0.141,238.933,0z M370.466,165.666L199.799,336.333c-6.665,6.663-17.468,6.663-24.132,0l-68.267-68.267
			c-6.78-6.548-6.968-17.352-0.42-24.132c6.548-6.78,17.352-6.968,24.132-0.42c0.142,0.138,0.282,0.277,0.42,0.42l56.201,56.201
			l158.601-158.601c6.78-6.548,17.584-6.36,24.132,0.419C376.854,148.567,376.854,159.052,370.466,165.666z"></path>
                            </g>
                          </g>
                          <g></g>
                          <g></g>
                          <g></g>
                          <g></g>
                          <g></g>
                          <g></g>
                          <g></g>
                          <g></g>
                          <g></g>
                          <g></g>
                          <g></g>
                          <g></g>
                          <g></g>
                          <g></g>
                          <g></g>
                        </svg></div>
                    </a></div>
                </div>
                <div class="BOXCARDBODY-RIGHT css-1cpfnn9">
                  <div class="att-product-detail-sale-policies css-50tizz">
                    <div type="subtitle" class="css-zamej5">Chính sách bán hàng</div>
                    <div>
                      <div>
                        <div class="css-15eranj">
                          <div height="24" width="24" class="css-1a6hohg"><img src="https://lh3.googleusercontent.com/uvWBg1q90XtEWvHkWGDbDemjEaANJ_kX3NEfIywURPTMeaSZTORdttpehuFBNKpYiWQ3jHgito4ciCt9pEJIHH1V4IlPYoE=rw" loading="lazy" decoding="async" style="width: 100%; height: 24px;"></div>
                          <div class="att-policy-content-0 css-9yb8e7">
                            <p>Miễn phí giao hàng cho đơn hàng từ 5 triệu <a href="https://help.phongvu.vn/chinh-sach-ban-hang/giao-hang-va-lap-dat-tai-nha">Xem chi tiết</a></p>
                          </div>
                        </div>
                        <div class="css-15eranj">
                          <div height="24" width="24" class="css-1a6hohg"><img src="https://lh3.googleusercontent.com/LT3jrA76x0rGqq9TmqrwY09FgyZfy0sjMxbS4PLFwUekIrCA9GlLF6EkiFuKKL711tFBT7f2JaUgKT3--To8zOW4kHxPPHs4=rw" loading="lazy" decoding="async" style="width: 100%; height: 24px;"></div>
                          <div class="att-policy-content-1 css-9yb8e7">
                            <p>Cam kết hàng chính hãng 100%&nbsp;</p>
                          </div>
                        </div>
                        <div class="css-15eranj">
                          <div height="24" width="24" class="css-1a6hohg"><img src="https://lh3.googleusercontent.com/TECKlw8DFChVXu_FAYdNjbCuaDVhmOhbqsKLnayhIgx5Pvv0EX051qHWJR7vUgxiUXN5heAlx4bIDYsoES7X8pby5Pn9LXWN=rw" loading="lazy" decoding="async" style="width: 100%; height: 24px;"></div>
                          <div class="att-policy-content-2 css-9yb8e7">
                            <p>Đổi trả trong vòng 10 ngày&nbsp; <a href="https://help.phongvu.vn/chinh-sach-ban-hang/doi-tra-va-hoan-tien">Xem chi tiết</a></p>
                          </div>
                        </div>
                      </div>
                      <div direction="row" class="css-1ata8it"></div>
                    </div>
                  </div>
                  <div class="att-product-detail-other-services css-1e1b11p">
                    <div type="subtitle" class="css-zamej5">Dịch vụ khác</div>
                    <div>
                      <div>
                        <div class="css-15eranj">
                          <div height="24" width="24" class="css-1a6hohg"><img src="https://lh3.googleusercontent.com/cjYniX0PTM1twy6bUEw4nSG47EEsTcFf7O6NRgWfdrq7JpNTccsNkqxnBExVVTGeocVdkUVbupp17dLNFn-E2gG2V-_aejU=rw" loading="lazy" decoding="async" style="width: 100%; height: 24px;"></div>
                          <div class="att-policy-content-0 css-9yb8e7">
                            <p>Gói dịch vụ bảo hành/ Sửa chữa tận nơi <a href="https://help.phongvu.vn/dich-vu-khach-hang/dich-vu-sua-chua-va-bao-tri">Xem chi tiết</a></p>
                          </div>
                        </div>
                      </div>
                      <div direction="row" class="css-1ata8it"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="css-6l7rf5">
            <div class="css-1hwtax5"></div>
          </div>
          <div class="">
            <div class="teko-row css-29qdu">
              <div class="teko-col teko-col-8 css-a5pz1h">
                <div class="css-1wr68sm">
                  <div class="css-ftpi71">
                    <div type="title" color="textTitle" class="title css-1dlj6qw">Mô tả sản phẩm</div>
                  </div>
                  <div class="css-1nv5d5l">
                    <div class="css-6du8bq">Đang cập nhật</div>
                  </div>
                </div>
              </div>
              <div class="teko-col teko-col-4 css-17ajfcv" style="scroll-margin-top: 137px;">
                <div class="css-ftpi71">
                  <div type="title" color="textTitle" class="title css-1dlj6qw">Thông tin chi tiết</div>
                </div>
                <div class="css-tizzf5">
                  <div class="css-1i3ajxp">
                    <div type="body" class="css-1lchwqw" style="flex: 2 1 0%;">Thương hiệu</div>
                    <div type="body" class="css-1lchwqw" style="flex: 3 1 5%;"><?php echo $row['TenHSX']; ?></div>
                  </div>
                  <div class="css-1i3ajxp">
                    <div type="body" class="css-1lchwqw" style="flex: 2 1 0%;">Bảo hành</div>
                    <div type="body" class="css-1lchwqw" style="flex: 3 1 0%;">12 tháng</div>
                  </div>
                  <div type="body" color="textSecondary" class="css-1geo7k4">Thông tin chung</div>
                  <div class="css-1i3ajxp">
                    <div type="body" class="css-1lchwqw" style="flex: 2 1 0%;">Tên sản phẩm</div>
                    <div type="body" class="css-1lchwqw" style="flex: 3 1 0%;"><?php echo $row['TenMH']; ?></div>
                  </div>
                  <div class="css-1i3ajxp">
                    <div type="body" class="css-1lchwqw" style="flex: 2 1 0%;">Màu sắc</div>
                    <div type="body" class="css-1lchwqw" style="flex: 3 1 0%;">Rose Gold</div>
                  </div>
                  <div type="body" color="textSecondary" class="css-1geo7k4">Thông tin chi tiết</div>
                  <div class="css-1i3ajxp">
                    <div type="body" class="css-1lchwqw" style="flex: 2 1 0%;">Công suất</div>
                    <div type="body" class="css-1lchwqw" style="flex: 3 1 0%;">1600W</div>
                  </div>
                  <div class="css-1i3ajxp">
                    <div type="body" class="css-1lchwqw" style="flex: 2 1 0%;">Tính năng</div>
                    <div type="body" class="css-1lchwqw" style="flex: 3 1 0%;">- Luồng khí sấy tốc độ cao giúp tóc khô nhanh<br>- Công nghệ tăng cường ion hoàn toàn mới bảo vệ da đầu khỏe mạnh</div>
                  </div>
                  <div type="body" color="textSecondary" class="css-1geo7k4">Thông tin kích thước</div>
                  <div type="body" color="textSecondary" class="css-1geo7k4">Thông tin khác</div>
                </div>
              </div>
            </div>
          </div>
          <div class="">
            <div class="css-rfz8yf" style="margin-bottom: 24px;">
              <div class="css-ftpi71">
                <div type="title" color="textTitle" class="title css-1dlj6qw">Sản phẩm liên quan</div>
              </div>
              <div class="glide css-npa7ru glide--swipeable glide--ltr glide--slider" id="glideContainer1">
                <div class="glide__track" data-glide-el="track">
                  <div class="home-page--glide__slides" style="transition: transform 0ms cubic-bezier(0.165, 0.84, 0.44, 1) 0s; width: 1417.6px; transform: translate3d(0px, 0px, 0px);">
                    <?php
                    $sql_products = "SELECT * FROM `mathang` 
                                        join dmhangsanxuat on `mathang`.MaHSX = dmhangsanxuat.MaHSX 
                                        join anhmh on mathang.MaMH = anhmh.MaMH
                                        join khuyenmai on mathang.MaMH = khuyenmai.MaMH";
                    $result_products = mysqli_query($conn, $sql_products);
                    if (mysqli_num_rows($result_products) <> 0) {
                      while ($row_products = mysqli_fetch_assoc($result_products)) {
                        $product_name = $row_products["TenMH"];
                        $product_price = $row_products["DonGia"];
                        $product_brand = $row_products["TenHSX"];
                        $product_image = $row_products['DLAnh'];
                        $product_id = $row_products['MaMH'];
                        $product_sale = isset($row_products['MoTaKM']) ? $row_products['MoTaKM'] : 0;
                        $price_sale = $product_price - $product_price * $product_sale - 500000;
                        $sale_rate = $product_sale * 100;
                        $save_price = $product_price - $price_sale + 500000;
                        $price_sale_format = number_format($price_sale, 0, '.', '.');
                        $product_price_format = number_format($product_price, 0, '.', '.');
                        $save_price_format = number_format($save_price, 0, '.', '.');


                        echo "<div class='home-page--glide__slide glide__slide--active'
                                                        style='height: unset; width: 179.2px; margin-right: 5px; margin-left: 5px;'>
                                                        <div class='css-1ei4kcr'>
                                                            <div class='product-card css-1msrncq' data-content-region-name='hotDeal'
                                                                data-track-content='true' data-content-name='230803500'
                                                                data-content-target='productDetail'><a target='_self'
                                                                    class='css-pxdb0j'
                                                                    href='?page=detail&maMH=$product_id'>
                                                                    <div class='css-4rhdrh'>
                                                                        <div class='css-1v97aik'>
                                                                            <div class='css-798fc'>
                                                                                <div height='100%' width='100%' class='css-1uzm8bv'>
                                                                                    <img src='$product_image'
                                                                                        loading='lazy' hover='zoom' decoding='async'
                                                                                        alt='$product_name'
                                                                                        style='width: 100%; height: 100%; object-fit: contain; position: absolute; top: 0px; left: 0px;'>
                                                                                </div>
                                                                            </div>
                                                                            <div class='css-14q2k9d'>
                                                                                <div class='css-zb7zul'>
                                                                                    <div class='css-1bqeu8f'>TIẾT KIỆM</div>
                                                                                    <div class='css-1rdv2qd'>$save_price_format&nbsp;₫</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class='css-68cx5s'>
                                                                            <div type='body' color='textSecondary'
                                                                                class='product-brand-name css-90n0z6'
                                                                                style='text-transform: uppercase; display: inline;'>
                                                                                $product_brand</div>
                                                                        </div>
                                                                        <div class='css-1ybkowq'>
                                                                            <div type='caption'
                                                                                class='att-product-card-title css-1uunp2d'
                                                                                color='textPrimary'>
                                                                                <h3 title='Máy sấy tóc Dreame Hair Glory AHD6A-RS (Rose Gold)'
                                                                                    class='css-1xdyrhj'>$product_name</h3>
                                                                            </div>
                                                                        </div>
                                                                        <div class='css-kgkvir'>
                                                                            <div class='css-1co26wt'>
                                                                                <div type='subtitle'
                                                                                    class='att-product-detail-latest-price css-do31rh'
                                                                                    color='primary500'>$price_sale_format&nbsp;₫</div>
                                                                                <div class='css-3mjppt'>
                                                                                    <div type='caption'
                                                                                        class='att-product-detail-retail-price css-18z00w6'
                                                                                        color='textSecondary'>$product_price_format&nbsp;₫</div>
                                                                                    <div type='caption' color='primary500'
                                                                                        class='css-2rwx6s'>-$sale_rate%</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>";
                      }
                    }
                    ?>
                  </div>
                  <div data-glide-el="controls" class="home-page--glide__arrows">
                    <div class="glide__arrow--override glide__arrow--left glide__arrow--disabled" data-glide-dir="|<"></div>
                    <div class="glide__arrow--override glide__arrow--right" data-glide-dir="|>">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </body>

    </html>
<?php
  } else {
    echo "Không tìm thấy sản phẩm với MaMH: $maMH";
  }
} else {
  echo "MaMH không được cung cấp";
}
?>