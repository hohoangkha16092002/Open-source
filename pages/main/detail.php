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
                          <div height="50px" width="50px" class="css-1dje825"><img src="" loading="lazy" decoding="async" alt="Laptop Acer" style="width: 100%; height: 50px; object-fit: contain;"></div>
                        </div>
                        <div class="css-4ok7dy">
                          <div height="50px" width="50px" class="css-1dje825"><img src="" loading="lazy" decoding="async" alt="Laptop Acer" style="width: 100%; height: 50px; object-fit: contain;"></div>
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
              <div class="glide css-npa7ru glide--ltr glide--slider glide--swipeable">
                <div class="glide__track" data-glide-el="track">
                  <div class="glide__slides" style="transition: transform 0ms cubic-bezier(0.165, 0.84, 0.44, 1) 0s; width: 3692px; transform: translate3d(0px, 0px, 0px);">
                    <div class="glide__slide glide__slide--active" style="height: unset; margin-right: 5px; width: 174.6px;">
                      <div class="css-1ei4kcr">
                        <div class="product-card css-1msrncq" data-content-region-name="relatedProducts" data-track-content="true" data-content-name="200301204" data-content-target="productDetail"><a target="_self" class="css-pxdb0j" href="/may-say-toc-philips-hp8108-00--s200301204">
                            <div class="css-4rhdrh">
                              <div class="css-1v97aik">
                                <div class="css-798fc">
                                  <div height="100%" width="100%" class="css-1uzm8bv"><img src="https://lh3.googleusercontent.com/RF-HdaI1VSnfOcV8d_gIUbsW7sDpEqbmUZDiEKhkI6qyAlX8VDyzhjhph9yoOYVrZYe9xUU43j22tizV85A=w230-rw" loading="lazy" hover="zoom" decoding="async" alt="Máy sấy tóc Philips HP8108/00" style="width: 100%; height: 100%; object-fit: contain; position: absolute; top: 0px; left: 0px;"></div>
                                </div>
                                <div class="css-14q2k9d">
                                  <div class="css-zb7zul">
                                    <div class="css-1bqeu8f">TIẾT KIỆM</div>
                                    <div class="css-1rdv2qd">70.000&nbsp;₫</div>
                                  </div>
                                </div>
                              </div>
                              <div class="css-68cx5s">
                                <div type="body" color="textSecondary" class="product-brand-name css-90n0z6" style="text-transform: uppercase; display: inline;">PHILIPS</div>
                              </div>
                              <div class="css-1ybkowq">
                                <div type="caption" class="att-product-card-title css-1uunp2d" color="textPrimary">
                                  <h3 title="Máy sấy tóc Philips HP8108/00" class="css-1xdyrhj">Máy sấy tóc Philips HP8108/00</h3>
                                </div>
                              </div>
                              <div class="css-kgkvir">
                                <div class="css-1co26wt">
                                  <div type="subtitle" class="att-product-detail-latest-price css-do31rh" color="primary500">239.000&nbsp;₫</div>
                                  <div class="css-3mjppt">
                                    <div type="caption" class="att-product-detail-retail-price css-18z00w6" color="textSecondary">309.000&nbsp;₫</div>
                                    <div type="caption" color="primary500" class="css-2rwx6s">-22.65%</div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </a></div>
                      </div>
                    </div>
                    <div class="glide__slide" style="height: unset; margin-right: 5px; margin-left: 5px; width: 174.6px;">
                      <div class="css-1ei4kcr">
                        <div class="product-card css-1msrncq" data-content-region-name="relatedProducts" data-track-content="true" data-content-name="201200507" data-content-target="productDetail"><a target="_self" class="css-pxdb0j" href="/may-cao-rau-philips-pq206--s201200507">
                            <div class="css-4rhdrh">
                              <div class="css-1v97aik">
                                <div class="css-798fc">
                                  <div height="100%" width="100%" class="css-1uzm8bv"><img src="https://lh3.googleusercontent.com/pvGz682GKTPJAIn2PTAala_HebsggB_TAGJ_DkqKiXHmXtJVdBxkPKijcTnFtHa0AL6mreJ9tZWaNBKw_YU3=w230-rw" loading="lazy" hover="zoom" decoding="async" alt="Máy cạo râu Philips PQ206" style="width: 100%; height: 100%; object-fit: contain; position: absolute; top: 0px; left: 0px;"></div>
                                </div>
                                <div class="css-14q2k9d">
                                  <div class="css-zb7zul">
                                    <div class="css-1bqeu8f">TIẾT KIỆM</div>
                                    <div class="css-1rdv2qd">80.000&nbsp;₫</div>
                                  </div>
                                </div>
                              </div>
                              <div class="css-68cx5s">
                                <div type="body" color="textSecondary" class="product-brand-name css-90n0z6" style="text-transform: uppercase; display: inline;">PHILIPS</div>
                              </div>
                              <div class="css-1ybkowq">
                                <div type="caption" class="att-product-card-title css-1uunp2d" color="textPrimary">
                                  <h3 title="Máy cạo râu Philips PQ206" class="css-1xdyrhj">Máy cạo râu Philips PQ206</h3>
                                </div>
                              </div>
                              <div class="css-kgkvir">
                                <div class="css-1co26wt">
                                  <div type="subtitle" class="att-product-detail-latest-price css-do31rh" color="primary500">339.000&nbsp;₫</div>
                                  <div class="css-3mjppt">
                                    <div type="caption" class="att-product-detail-retail-price css-18z00w6" color="textSecondary">419.000&nbsp;₫</div>
                                    <div type="caption" color="primary500" class="css-2rwx6s">-19.09%</div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </a></div>
                      </div>
                    </div>
                    <div class="glide__slide" style="height: unset; margin-right: 5px; margin-left: 5px; width: 174.6px;">
                      <div class="css-1ei4kcr">
                        <div class="product-card css-1msrncq" data-content-region-name="relatedProducts" data-track-content="true" data-content-name="220303983" data-content-target="productDetail"><a target="_self" class="css-pxdb0j" href="/may-say-toc-philips-bhd300-10--s220303983">
                            <div class="css-4rhdrh">
                              <div class="css-1v97aik">
                                <div class="css-798fc">
                                  <div height="100%" width="100%" class="css-1uzm8bv"><img src="https://lh3.googleusercontent.com/lrWMnzhyxmQ0E5dGC4fJKIH8aL7GFxifjl3KgIPaW0ZtOiGgSzXu02HS-k32d7zqkfJMZ0qvgXxTjDNgiwFS1V63b_m72kC9=w230-rw" loading="lazy" hover="zoom" decoding="async" alt="Máy sấy tóc Philips BHD300/10" style="width: 100%; height: 100%; object-fit: contain; position: absolute; top: 0px; left: 0px;"></div>
                                </div>
                                <div class="css-14q2k9d">
                                  <div class="css-zb7zul">
                                    <div class="css-1bqeu8f">TIẾT KIỆM</div>
                                    <div class="css-1rdv2qd">100.000&nbsp;₫</div>
                                  </div>
                                </div>
                              </div>
                              <div class="css-68cx5s">
                                <div type="body" color="textSecondary" class="product-brand-name css-90n0z6" style="text-transform: uppercase; display: inline;">PHILIPS</div>
                              </div>
                              <div class="css-1ybkowq">
                                <div type="caption" class="att-product-card-title css-1uunp2d" color="textPrimary">
                                  <h3 title="Máy sấy tóc Philips BHD300/10" class="css-1xdyrhj">Máy sấy tóc Philips BHD300/10</h3>
                                </div>
                              </div>
                              <div class="css-kgkvir">
                                <div class="css-1co26wt">
                                  <div type="subtitle" class="att-product-detail-latest-price css-do31rh" color="primary500">649.000&nbsp;₫</div>
                                  <div class="css-3mjppt">
                                    <div type="caption" class="att-product-detail-retail-price css-18z00w6" color="textSecondary">749.000&nbsp;₫</div>
                                    <div type="caption" color="primary500" class="css-2rwx6s">-13.35%</div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </a></div>
                      </div>
                    </div>
                    <div class="glide__slide" style="height: unset; margin-right: 5px; margin-left: 5px; width: 174.6px;">
                      <div class="css-1ei4kcr">
                        <div class="product-card css-1msrncq" data-content-region-name="relatedProducts" data-track-content="true" data-content-name="220303984" data-content-target="productDetail"><a target="_self" class="css-pxdb0j" href="/may-say-toc-philips-bhd350-10--s220303984">
                            <div class="css-4rhdrh">
                              <div class="css-1v97aik">
                                <div class="css-798fc">
                                  <div height="100%" width="100%" class="css-1uzm8bv"><img src="https://lh3.googleusercontent.com/DGnZiELa3fNhQ6yYHri0k_drScc20JR52tg_B5EIq9yZwsam35TFy9pkoWQPv9kFUaphLg2t5Hoc7VzZ_KTIauP7FpjfVEs5=w230-rw" loading="lazy" hover="zoom" decoding="async" alt="Máy sấy tóc Philips BHD350/10" style="width: 100%; height: 100%; object-fit: contain; position: absolute; top: 0px; left: 0px;"></div>
                                </div>
                                <div class="css-14q2k9d">
                                  <div class="css-zb7zul">
                                    <div class="css-1bqeu8f">TIẾT KIỆM</div>
                                    <div class="css-1rdv2qd">221.000&nbsp;₫</div>
                                  </div>
                                </div>
                              </div>
                              <div class="css-68cx5s">
                                <div type="body" color="textSecondary" class="product-brand-name css-90n0z6" style="text-transform: uppercase; display: inline;">PHILIPS</div>
                              </div>
                              <div class="css-1ybkowq">
                                <div type="caption" class="att-product-card-title css-1uunp2d" color="textPrimary">
                                  <h3 title="Máy sấy tóc Philips BHD350/10" class="css-1xdyrhj">Máy sấy tóc Philips BHD350/10</h3>
                                </div>
                              </div>
                              <div class="css-kgkvir">
                                <div class="css-1co26wt">
                                  <div type="subtitle" class="att-product-detail-latest-price css-do31rh" color="primary500">669.000&nbsp;₫</div>
                                  <div class="css-3mjppt">
                                    <div type="caption" class="att-product-detail-retail-price css-18z00w6" color="textSecondary">890.000&nbsp;₫</div>
                                    <div type="caption" color="primary500" class="css-2rwx6s">-24.83%</div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </a></div>
                      </div>
                    </div>
                    <div class="glide__slide" style="height: unset; margin-right: 5px; margin-left: 5px; width: 174.6px;">
                      <div class="css-1ei4kcr">
                        <div class="product-card css-1msrncq" data-content-region-name="relatedProducts" data-track-content="true" data-content-name="220801557" data-content-target="productDetail"><a target="_self" class="css-pxdb0j" href="/may-rua-mat-va-massage-halio-facial-cleansing-&amp;-massaging-device-hot-pink--s220801557">
                            <div class="css-4rhdrh">
                              <div class="css-1v97aik">
                                <div class="css-798fc">
                                  <div height="100%" width="100%" class="css-1uzm8bv"><img src="https://lh3.googleusercontent.com/PAJSd2veNrhrvum9M3rjMGzvPToFMcOlZz17s4-gg4aLHUtEW1z4kglOP9eJgoBdvZcd5N2VLA9SJkxKH6p47D-aC5kddAAz=w230-rw" loading="lazy" hover="zoom" decoding="async" alt="Máy rửa mặt và massage Halio Facial Cleansing &amp; Massaging Device - Hot Pink" style="width: 100%; height: 100%; object-fit: contain; position: absolute; top: 0px; left: 0px;"></div>
                                </div>
                                <div class="css-14q2k9d">
                                  <div class="css-zb7zul">
                                    <div class="css-1bqeu8f">TIẾT KIỆM</div>
                                    <div class="css-1rdv2qd">130.000&nbsp;₫</div>
                                  </div>
                                </div>
                              </div>
                              <div class="css-68cx5s">
                                <div type="body" color="textSecondary" class="product-brand-name css-90n0z6" style="text-transform: uppercase; display: inline;">Halio</div>
                              </div>
                              <div class="css-1ybkowq">
                                <div type="caption" class="att-product-card-title css-1uunp2d" color="textPrimary">
                                  <h3 title="Máy rửa mặt và massage Halio Facial Cleansing &amp; Massaging Device - Hot Pink" class="css-1xdyrhj">Máy rửa mặt và massage Halio Facial Cleansing &amp; Massaging Device - Hot Pink</h3>
                                </div>
                              </div>
                              <div class="css-kgkvir">
                                <div class="css-1co26wt">
                                  <div type="subtitle" class="att-product-detail-latest-price css-do31rh" color="primary500">489.000&nbsp;₫</div>
                                  <div class="css-3mjppt">
                                    <div type="caption" class="att-product-detail-retail-price css-18z00w6" color="textSecondary">619.000&nbsp;₫</div>
                                    <div type="caption" color="primary500" class="css-2rwx6s">-21%</div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </a></div>
                      </div>
                    </div>
                    <div class="glide__slide" style="height: unset; margin-right: 5px; margin-left: 5px; width: 174.6px;">
                      <div class="css-1ei4kcr">
                        <div class="product-card css-1msrncq" data-content-region-name="relatedProducts" data-track-content="true" data-content-name="220801558" data-content-target="productDetail"><a target="_self" class="css-pxdb0j" href="/may-rua-mat-va-massage-halio-facial-cleansing-&amp;-massaging-device-grey-smoke--s220801558">
                            <div class="css-4rhdrh">
                              <div class="css-1v97aik">
                                <div class="css-798fc">
                                  <div height="100%" width="100%" class="css-1uzm8bv"><img src="https://lh3.googleusercontent.com/oTTS68s_eWI0EzO12S9RagmWnw3EPCy0BSHvKpbgXyAP6Mhgoya4UX3dyFE8GmEHU8Bkcj7BQFm-25_IEUw3gbWWozUPBTgP=w230-rw" loading="lazy" hover="zoom" decoding="async" alt="Máy rửa mặt và massage Halio Facial Cleansing &amp; Massaging Device - Grey Smoke" style="width: 100%; height: 100%; object-fit: contain; position: absolute; top: 0px; left: 0px;"></div>
                                </div>
                                <div class="css-14q2k9d">
                                  <div class="css-zb7zul">
                                    <div class="css-1bqeu8f">TIẾT KIỆM</div>
                                    <div class="css-1rdv2qd">130.000&nbsp;₫</div>
                                  </div>
                                </div>
                              </div>
                              <div class="css-68cx5s">
                                <div type="body" color="textSecondary" class="product-brand-name css-90n0z6" style="text-transform: uppercase; display: inline;">Halio</div>
                              </div>
                              <div class="css-1ybkowq">
                                <div type="caption" class="att-product-card-title css-1uunp2d" color="textPrimary">
                                  <h3 title="Máy rửa mặt và massage Halio Facial Cleansing &amp; Massaging Device - Grey Smoke" class="css-1xdyrhj">Máy rửa mặt và massage Halio Facial Cleansing &amp; Massaging Device - Grey Smoke</h3>
                                </div>
                              </div>
                              <div class="css-kgkvir">
                                <div class="css-1co26wt">
                                  <div type="subtitle" class="att-product-detail-latest-price css-do31rh" color="primary500">489.000&nbsp;₫</div>
                                  <div class="css-3mjppt">
                                    <div type="caption" class="att-product-detail-retail-price css-18z00w6" color="textSecondary">619.000&nbsp;₫</div>
                                    <div type="caption" color="primary500" class="css-2rwx6s">-21%</div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </a></div>
                      </div>
                    </div>
                    <div class="glide__slide" style="height: unset; margin-right: 5px; margin-left: 5px; width: 174.6px;">
                      <div class="css-1ei4kcr">
                        <div class="product-card css-1msrncq" data-content-region-name="relatedProducts" data-track-content="true" data-content-name="220801560" data-content-target="productDetail"><a target="_self" class="css-pxdb0j" href="/may-rua-mat-va-massage-halio-facial-cleansing-&amp;-massaging-device-mustard-vang--s220801560">
                            <div class="css-4rhdrh">
                              <div class="css-1v97aik">
                                <div class="css-798fc">
                                  <div height="100%" width="100%" class="css-1uzm8bv"><img src="https://lh3.googleusercontent.com/0cAwLxIfvV-BdR1ywdI9QhkfQMNrZGAvfVmFTMpl5c8bvEChnlMI9kQ_dSc3WwFzfSg71B-MvkeGfgV0lix264bsovxjLjCO=w230-rw" loading="lazy" hover="zoom" decoding="async" alt="Máy rửa mặt và massage Halio Facial Cleansing &amp; Massaging Device - Mustard (vàng)" style="width: 100%; height: 100%; object-fit: contain; position: absolute; top: 0px; left: 0px;"></div>
                                </div>
                                <div class="css-14q2k9d">
                                  <div class="css-zb7zul">
                                    <div class="css-1bqeu8f">TIẾT KIỆM</div>
                                    <div class="css-1rdv2qd">130.000&nbsp;₫</div>
                                  </div>
                                </div>
                              </div>
                              <div class="css-68cx5s">
                                <div type="body" color="textSecondary" class="product-brand-name css-90n0z6" style="text-transform: uppercase; display: inline;">Halio</div>
                              </div>
                              <div class="css-1ybkowq">
                                <div type="caption" class="att-product-card-title css-1uunp2d" color="textPrimary">
                                  <h3 title="Máy rửa mặt và massage Halio Facial Cleansing &amp; Massaging Device - Mustard (vàng)" class="css-1xdyrhj">Máy rửa mặt và massage Halio Facial Cleansing &amp; Massaging Device - Mustard (vàng)</h3>
                                </div>
                              </div>
                              <div class="css-kgkvir">
                                <div class="css-1co26wt">
                                  <div type="subtitle" class="att-product-detail-latest-price css-do31rh" color="primary500">489.000&nbsp;₫</div>
                                  <div class="css-3mjppt">
                                    <div type="caption" class="att-product-detail-retail-price css-18z00w6" color="textSecondary">619.000&nbsp;₫</div>
                                    <div type="caption" color="primary500" class="css-2rwx6s">-21%</div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </a></div>
                      </div>
                    </div>
                    <div class="glide__slide" style="height: unset; margin-right: 5px; margin-left: 5px; width: 174.6px;">
                      <div class="css-1ei4kcr">
                        <div class="product-card css-1msrncq" data-content-region-name="relatedProducts" data-track-content="true" data-content-name="220801561" data-content-target="productDetail"><a target="_self" class="css-pxdb0j" href="/may-rua-mat-va-massage-halio-facial-cleansing-&amp;-massaging-device-baby-pink--s220801561">
                            <div class="css-4rhdrh">
                              <div class="css-1v97aik">
                                <div class="css-798fc">
                                  <div height="100%" width="100%" class="css-1uzm8bv"><img src="https://lh3.googleusercontent.com/D3_l2kbX_eFpcLb6TGiX1mAUEAfXdMShFOhLZ1fi8m7OlXeoJ3GWaJEawvkPBtNXT8ZCbGLfraSUcTiRiZc5P_IK0gZz8X6p=w230-rw" loading="lazy" hover="zoom" decoding="async" alt="Máy rửa mặt và massage Halio Facial Cleansing &amp; Massaging Device - Baby Pink" style="width: 100%; height: 100%; object-fit: contain; position: absolute; top: 0px; left: 0px;"></div>
                                </div>
                                <div class="css-14q2k9d">
                                  <div class="css-zb7zul">
                                    <div class="css-1bqeu8f">TIẾT KIỆM</div>
                                    <div class="css-1rdv2qd">129.000&nbsp;₫</div>
                                  </div>
                                </div>
                              </div>
                              <div class="css-68cx5s">
                                <div type="body" color="textSecondary" class="product-brand-name css-90n0z6" style="text-transform: uppercase; display: inline;">Halio</div>
                              </div>
                              <div class="css-1ybkowq">
                                <div type="caption" class="att-product-card-title css-1uunp2d" color="textPrimary">
                                  <h3 title="Máy rửa mặt và massage Halio Facial Cleansing &amp; Massaging Device - Baby Pink" class="css-1xdyrhj">Máy rửa mặt và massage Halio Facial Cleansing &amp; Massaging Device - Baby Pink</h3>
                                </div>
                              </div>
                              <div class="css-kgkvir">
                                <div class="css-1co26wt">
                                  <div type="subtitle" class="att-product-detail-latest-price css-do31rh" color="primary500">490.000&nbsp;₫</div>
                                  <div class="css-3mjppt">
                                    <div type="caption" class="att-product-detail-retail-price css-18z00w6" color="textSecondary">619.000&nbsp;₫</div>
                                    <div type="caption" color="primary500" class="css-2rwx6s">-20.84%</div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </a></div>
                      </div>
                    </div>
                    <div class="glide__slide" style="height: unset; margin-right: 5px; margin-left: 5px; width: 174.6px;">
                      <div class="css-1ei4kcr">
                        <div class="product-card css-1msrncq" data-content-region-name="relatedProducts" data-track-content="true" data-content-name="220801562" data-content-target="productDetail"><a target="_self" class="css-pxdb0j" href="/may-rua-mat-halio-sensitive-facial-cleansing-&amp;-massaging-device-baby-pink--s220801562">
                            <div class="css-4rhdrh">
                              <div class="css-1v97aik">
                                <div class="css-798fc">
                                  <div height="100%" width="100%" class="css-1uzm8bv"><img src="https://lh3.googleusercontent.com/lMpmTWM_EiCoR7-ukJgyPhR6hTPnDj4oMYQqMRAg2-fkCAg_F0PO4QUKIUvj4y2dGtuvv1FYFJRP7OnkIvb4vDJl6JNQrAeS=w230-rw" loading="lazy" hover="zoom" decoding="async" alt="Máy rửa mặt Halio Sensitive Facial Cleansing &amp; Massaging Device Baby Pink" style="width: 100%; height: 100%; object-fit: contain; position: absolute; top: 0px; left: 0px;"></div>
                                </div>
                                <div class="css-14q2k9d">
                                  <div class="css-zb7zul">
                                    <div class="css-1bqeu8f">TIẾT KIỆM</div>
                                    <div class="css-1rdv2qd">210.000&nbsp;₫</div>
                                  </div>
                                </div>
                              </div>
                              <div class="css-68cx5s">
                                <div type="body" color="textSecondary" class="product-brand-name css-90n0z6" style="text-transform: uppercase; display: inline;">Halio</div>
                              </div>
                              <div class="css-1ybkowq">
                                <div type="caption" class="att-product-card-title css-1uunp2d" color="textPrimary">
                                  <h3 title="Máy rửa mặt Halio Sensitive Facial Cleansing &amp; Massaging Device Baby Pink" class="css-1xdyrhj">Máy rửa mặt Halio Sensitive Facial Cleansing &amp; Massaging Device Baby Pink</h3>
                                </div>
                              </div>
                              <div class="css-kgkvir">
                                <div class="css-1co26wt">
                                  <div type="subtitle" class="att-product-detail-latest-price css-do31rh" color="primary500">619.000&nbsp;₫</div>
                                  <div class="css-3mjppt">
                                    <div type="caption" class="att-product-detail-retail-price css-18z00w6" color="textSecondary">829.000&nbsp;₫</div>
                                    <div type="caption" color="primary500" class="css-2rwx6s">-25.33%</div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </a></div>
                      </div>
                    </div>
                    <div class="glide__slide" style="height: unset; margin-right: 5px; margin-left: 5px; width: 174.6px;">
                      <div class="css-1ei4kcr">
                        <div class="product-card css-1msrncq" data-content-region-name="relatedProducts" data-track-content="true" data-content-name="220801563" data-content-target="productDetail"><a target="_self" class="css-pxdb0j" href="/may-rua-mat-halio-sensitive-facial-cleansing-&amp;-massaging-device-sweet-mint-xanh--s220801563">
                            <div class="css-4rhdrh">
                              <div class="css-1v97aik">
                                <div class="css-798fc">
                                  <div height="100%" width="100%" class="css-1uzm8bv"><img src="https://lh3.googleusercontent.com/FqbzsVbKYpqhrgoUFJr1JjPQzTEaUrfXfngQV1mAZHN7-VjWnf373OtDMahpGpJ40u9xMWfoXEKLHjzAdkwYC6DH2X-1W3j7Eg=w230-rw" loading="lazy" hover="zoom" decoding="async" alt="Máy rửa mặt Halio Sensitive Facial Cleansing &amp; Massaging Device Sweet Mint (xanh)" style="width: 100%; height: 100%; object-fit: contain; position: absolute; top: 0px; left: 0px;"></div>
                                </div>
                                <div class="css-14q2k9d">
                                  <div class="css-zb7zul">
                                    <div class="css-1bqeu8f">TIẾT KIỆM</div>
                                    <div class="css-1rdv2qd">210.000&nbsp;₫</div>
                                  </div>
                                </div>
                              </div>
                              <div class="css-68cx5s">
                                <div type="body" color="textSecondary" class="product-brand-name css-90n0z6" style="text-transform: uppercase; display: inline;">Halio</div>
                              </div>
                              <div class="css-1ybkowq">
                                <div type="caption" class="att-product-card-title css-1uunp2d" color="textPrimary">
                                  <h3 title="Máy rửa mặt Halio Sensitive Facial Cleansing &amp; Massaging Device Sweet Mint (xanh)" class="css-1xdyrhj">Máy rửa mặt Halio Sensitive Facial Cleansing &amp; Massaging Device Sweet Mint (xanh)</h3>
                                </div>
                              </div>
                              <div class="css-kgkvir">
                                <div class="css-1co26wt">
                                  <div type="subtitle" class="att-product-detail-latest-price css-do31rh" color="primary500">619.000&nbsp;₫</div>
                                  <div class="css-3mjppt">
                                    <div type="caption" class="att-product-detail-retail-price css-18z00w6" color="textSecondary">829.000&nbsp;₫</div>
                                    <div type="caption" color="primary500" class="css-2rwx6s">-25.33%</div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </a></div>
                      </div>
                    </div>
                    <div class="glide__slide" style="height: unset; margin-right: 5px; margin-left: 5px; width: 174.6px;">
                      <div class="css-1ei4kcr">
                        <div class="product-card css-1msrncq" data-content-region-name="relatedProducts" data-track-content="true" data-content-name="220801564" data-content-target="productDetail"><a target="_self" class="css-pxdb0j" href="/may-rua-mat-halio-sensitive-facial-cleansing-&amp;-massaging-device-purple-rain-limited-edition--s220801564">
                            <div class="css-4rhdrh">
                              <div class="css-1v97aik">
                                <div class="css-798fc">
                                  <div height="100%" width="100%" class="css-1uzm8bv"><img src="https://lh3.googleusercontent.com/xgfTw2RUAOuoGq0iSpz8mFxV7bTuV4Tf_Wn0tXbRvv9rDHE8vELswAmqbTInhT8QnGaJ89QAXvGQsvDmBhY943FMapPa300aqg=w230-rw" loading="lazy" hover="zoom" decoding="async" alt="Máy rửa mặt Halio Sensitive Facial Cleansing &amp; Massaging Device Purple Rain Limited Edition" style="width: 100%; height: 100%; object-fit: contain; position: absolute; top: 0px; left: 0px;"></div>
                                </div>
                                <div class="css-14q2k9d">
                                  <div class="css-zb7zul">
                                    <div class="css-1bqeu8f">TIẾT KIỆM</div>
                                    <div class="css-1rdv2qd">150.000&nbsp;₫</div>
                                  </div>
                                </div>
                              </div>
                              <div class="css-68cx5s">
                                <div type="body" color="textSecondary" class="product-brand-name css-90n0z6" style="text-transform: uppercase; display: inline;">Halio</div>
                              </div>
                              <div class="css-1ybkowq">
                                <div type="caption" class="att-product-card-title css-1uunp2d" color="textPrimary">
                                  <h3 title="Máy rửa mặt Halio Sensitive Facial Cleansing &amp; Massaging Device Purple Rain Limited Edition" class="css-1xdyrhj">Máy rửa mặt Halio Sensitive Facial Cleansing &amp; Massaging Device Purple Rain Limited Edition</h3>
                                </div>
                              </div>
                              <div class="css-kgkvir">
                                <div class="css-1co26wt">
                                  <div type="subtitle" class="att-product-detail-latest-price css-do31rh" color="primary500">679.000&nbsp;₫</div>
                                  <div class="css-3mjppt">
                                    <div type="caption" class="att-product-detail-retail-price css-18z00w6" color="textSecondary">829.000&nbsp;₫</div>
                                    <div type="caption" color="primary500" class="css-2rwx6s">-18.09%</div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </a></div>
                      </div>
                    </div>
                    <div class="glide__slide" style="height: unset; margin-right: 5px; margin-left: 5px; width: 174.6px;">
                      <div class="css-1ei4kcr">
                        <div class="product-card css-1msrncq" data-content-region-name="relatedProducts" data-track-content="true" data-content-name="220801565" data-content-target="productDetail"><a target="_self" class="css-pxdb0j" href="/may-tam-nuoc-cam-tay-halio-ultraclean-oral-irrigator-periwinkle--s220801565">
                            <div class="css-4rhdrh">
                              <div class="css-1v97aik">
                                <div class="css-798fc">
                                  <div height="100%" width="100%" class="css-1uzm8bv"><img src="https://lh3.googleusercontent.com/ULkal1Mp8EfbbuNKi-iosqq1go7BnfTI4bb4s6OwsrgCtB-STiG93NMQdponccPBDvJ_thNXpUj7a0fO8NVVE72Z06hKHWc=w230-rw" loading="lazy" hover="zoom" decoding="async" alt="Máy tăm nước cầm tay Halio UltraClean Oral Irrigator - Periwinkle" style="width: 100%; height: 100%; object-fit: contain; position: absolute; top: 0px; left: 0px;"></div>
                                </div>
                                <div class="css-14q2k9d">
                                  <div class="css-zb7zul">
                                    <div class="css-1bqeu8f">TIẾT KIỆM</div>
                                    <div class="css-1rdv2qd">200.000&nbsp;₫</div>
                                  </div>
                                </div>
                              </div>
                              <div class="css-68cx5s">
                                <div type="body" color="textSecondary" class="product-brand-name css-90n0z6" style="text-transform: uppercase; display: inline;">Halio</div>
                              </div>
                              <div class="css-1ybkowq">
                                <div type="caption" class="att-product-card-title css-1uunp2d" color="textPrimary">
                                  <h3 title="Máy tăm nước cầm tay Halio UltraClean Oral Irrigator - Periwinkle" class="css-1xdyrhj">Máy tăm nước cầm tay Halio UltraClean Oral Irrigator - Periwinkle</h3>
                                </div>
                              </div>
                              <div class="css-kgkvir">
                                <div class="css-1co26wt">
                                  <div type="subtitle" class="att-product-detail-latest-price css-do31rh" color="primary500">1.090.000&nbsp;₫</div>
                                  <div class="css-3mjppt">
                                    <div type="caption" class="att-product-detail-retail-price css-18z00w6" color="textSecondary">1.290.000&nbsp;₫</div>
                                    <div type="caption" color="primary500" class="css-2rwx6s">-15.5%</div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </a></div>
                      </div>
                    </div>
                    <div class="glide__slide" style="height: unset; margin-right: 5px; margin-left: 5px; width: 174.6px;">
                      <div class="css-1ei4kcr">
                        <div class="product-card css-1msrncq" data-content-region-name="relatedProducts" data-track-content="true" data-content-name="220801566" data-content-target="productDetail"><a target="_self" class="css-pxdb0j" href="/may-triet-long-lanh-ca-nhan-halio-ipl-cooling-hair-removal-device--s220801566">
                            <div class="css-4rhdrh">
                              <div class="css-1v97aik">
                                <div class="css-798fc">
                                  <div height="100%" width="100%" class="css-1uzm8bv"><img src="https://lh3.googleusercontent.com/pOj-qIpNot1wY3kfKfzX_wjrGImtHDG31ZFBZ0GZnsILHxMrMyydS4oxD1-B8bqs3xcGmOSg4rQNDxWGHvtFFWPtI1ytXGM=w230-rw" loading="lazy" hover="zoom" decoding="async" alt="Máy triệt lông lạnh cá nhân Halio IPL Cooling Hair Removal Device" style="width: 100%; height: 100%; object-fit: contain; position: absolute; top: 0px; left: 0px;"></div>
                                </div>
                                <div class="css-14q2k9d">
                                  <div class="css-zb7zul">
                                    <div class="css-1bqeu8f">TIẾT KIỆM</div>
                                    <div class="css-1rdv2qd">951.000&nbsp;₫</div>
                                  </div>
                                </div>
                              </div>
                              <div class="css-68cx5s">
                                <div type="body" color="textSecondary" class="product-brand-name css-90n0z6" style="text-transform: uppercase; display: inline;">Halio</div>
                              </div>
                              <div class="css-1ybkowq">
                                <div type="caption" class="att-product-card-title css-1uunp2d" color="textPrimary">
                                  <h3 title="Máy triệt lông lạnh cá nhân Halio IPL Cooling Hair Removal Device" class="css-1xdyrhj">Máy triệt lông lạnh cá nhân Halio IPL Cooling Hair Removal Device</h3>
                                </div>
                              </div>
                              <div class="css-kgkvir">
                                <div class="css-1co26wt">
                                  <div type="subtitle" class="att-product-detail-latest-price css-do31rh" color="primary500">3.049.000&nbsp;₫</div>
                                  <div class="css-3mjppt">
                                    <div type="caption" class="att-product-detail-retail-price css-18z00w6" color="textSecondary">4.000.000&nbsp;₫</div>
                                    <div type="caption" color="primary500" class="css-2rwx6s">-23.78%</div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </a></div>
                      </div>
                    </div>
                    <div class="glide__slide" style="height: unset; margin-right: 5px; margin-left: 5px; width: 174.6px;">
                      <div class="css-1ei4kcr">
                        <div class="product-card css-1msrncq" data-content-region-name="relatedProducts" data-track-content="true" data-content-name="220801567" data-content-target="productDetail"><a target="_self" class="css-pxdb0j" href="/may-triet-long-ca-nhan-halio-ipl-hair-removal-device--s220801567">
                            <div class="css-4rhdrh">
                              <div class="css-1v97aik">
                                <div class="css-798fc">
                                  <div height="100%" width="100%" class="css-1uzm8bv"><img src="https://lh3.googleusercontent.com/dS644moC7xX2uBLqKyzhX32aQQb5FgzVU0-VSBwSPOB7DN1_2MajPE0xh2tTj-bq6djBy43nW4AeCSGGgZD-5BDj4J4pDGc=w230-rw" loading="lazy" hover="zoom" decoding="async" alt="Máy triệt lông cá nhân Halio IPL Hair Removal Device" style="width: 100%; height: 100%; object-fit: contain; position: absolute; top: 0px; left: 0px;"></div>
                                </div>
                                <div class="css-14q2k9d">
                                  <div class="css-zb7zul">
                                    <div class="css-1bqeu8f">TIẾT KIỆM</div>
                                    <div class="css-1rdv2qd">400.000&nbsp;₫</div>
                                  </div>
                                </div>
                              </div>
                              <div class="css-68cx5s">
                                <div type="body" color="textSecondary" class="product-brand-name css-90n0z6" style="text-transform: uppercase; display: inline;">Halio</div>
                              </div>
                              <div class="css-1ybkowq">
                                <div type="caption" class="att-product-card-title css-1uunp2d" color="textPrimary">
                                  <h3 title="Máy triệt lông cá nhân Halio IPL Hair Removal Device" class="css-1xdyrhj">Máy triệt lông cá nhân Halio IPL Hair Removal Device</h3>
                                </div>
                              </div>
                              <div class="css-kgkvir">
                                <div class="css-1co26wt">
                                  <div type="subtitle" class="att-product-detail-latest-price css-do31rh" color="primary500">2.790.000&nbsp;₫</div>
                                  <div class="css-3mjppt">
                                    <div type="caption" class="att-product-detail-retail-price css-18z00w6" color="textSecondary">3.190.000&nbsp;₫</div>
                                    <div type="caption" color="primary500" class="css-2rwx6s">-12.54%</div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </a></div>
                      </div>
                    </div>
                    <div class="glide__slide" style="height: unset; margin-right: 5px; margin-left: 5px; width: 174.6px;">
                      <div class="css-1ei4kcr">
                        <div class="product-card css-1msrncq" data-content-region-name="relatedProducts" data-track-content="true" data-content-name="220801568" data-content-target="productDetail"><a target="_self" class="css-pxdb0j" href="/ban-chai-dien-halio-sonic-whitening-toothbrush-pro-rose-gold--s220801568">
                            <div class="css-4rhdrh">
                              <div class="css-1v97aik">
                                <div class="css-798fc">
                                  <div height="100%" width="100%" class="css-1uzm8bv"><img src="https://lh3.googleusercontent.com/ydqpbgWZTAwNE_KZ5pR4aCmTFCeVIs5_0tE_xoOw3IPNhzw6rAoyC0-jOCEBWiuMbVUdTRX9w0edRQyjM70ZP3Rc_rgA6wk=w230-rw" loading="lazy" hover="zoom" decoding="async" alt="Bàn chải điện Halio Sonic Whitening Toothbrush PRO Rose Gold" style="width: 100%; height: 100%; object-fit: contain; position: absolute; top: 0px; left: 0px;"></div>
                                </div>
                                <div class="css-14q2k9d">
                                  <div class="css-zb7zul">
                                    <div class="css-1bqeu8f">TIẾT KIỆM</div>
                                    <div class="css-1rdv2qd">200.000&nbsp;₫</div>
                                  </div>
                                </div>
                              </div>
                              <div class="css-68cx5s">
                                <div type="body" color="textSecondary" class="product-brand-name css-90n0z6" style="text-transform: uppercase; display: inline;">Halio</div>
                              </div>
                              <div class="css-1ybkowq">
                                <div type="caption" class="att-product-card-title css-1uunp2d" color="textPrimary">
                                  <h3 title="Bàn chải điện Halio Sonic Whitening Toothbrush PRO Rose Gold" class="css-1xdyrhj">Bàn chải điện Halio Sonic Whitening Toothbrush PRO Rose Gold</h3>
                                </div>
                              </div>
                              <div class="css-kgkvir">
                                <div class="css-1co26wt">
                                  <div type="subtitle" class="att-product-detail-latest-price css-do31rh" color="primary500">1.090.000&nbsp;₫</div>
                                  <div class="css-3mjppt">
                                    <div type="caption" class="att-product-detail-retail-price css-18z00w6" color="textSecondary">1.290.000&nbsp;₫</div>
                                    <div type="caption" color="primary500" class="css-2rwx6s">-15.5%</div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </a></div>
                      </div>
                    </div>
                    <div class="glide__slide" style="height: unset; margin-right: 5px; margin-left: 5px; width: 174.6px;">
                      <div class="css-1ei4kcr">
                        <div class="product-card css-1msrncq" data-content-region-name="relatedProducts" data-track-content="true" data-content-name="220801569" data-content-target="productDetail"><a target="_self" class="css-pxdb0j" href="/bo-may-tao-kieu-toc-philips-bhp398-00--s220801569">
                            <div class="css-4rhdrh">
                              <div class="css-1v97aik">
                                <div class="css-798fc">
                                  <div height="100%" width="100%" class="css-1uzm8bv"><img src="https://lh3.googleusercontent.com/IZtoRT5s4c-GgRtdoGYDZraE63vY1g7cD6YqgtKVcKP-MHl6YVz6KXiImfCHUfkrKABWhO0MjofwoNyD5SDBmWjHtFiZbz8=w230-rw" loading="lazy" hover="zoom" decoding="async" alt="Bộ Máy Tạo Kiểu Tóc PHILIPS BHP398/00" style="width: 100%; height: 100%; object-fit: contain; position: absolute; top: 0px; left: 0px;"></div>
                                </div>
                                <div class="css-14q2k9d">
                                  <div class="css-zb7zul">
                                    <div class="css-1bqeu8f">TIẾT KIỆM</div>
                                    <div class="css-1rdv2qd">291.000&nbsp;₫</div>
                                  </div>
                                </div>
                              </div>
                              <div class="css-68cx5s">
                                <div type="body" color="textSecondary" class="product-brand-name css-90n0z6" style="text-transform: uppercase; display: inline;">PHILIPS</div>
                              </div>
                              <div class="css-1ybkowq">
                                <div type="caption" class="att-product-card-title css-1uunp2d" color="textPrimary">
                                  <h3 title="Bộ Máy Tạo Kiểu Tóc PHILIPS BHP398/00" class="css-1xdyrhj">Bộ Máy Tạo Kiểu Tóc PHILIPS BHP398/00</h3>
                                </div>
                              </div>
                              <div class="css-kgkvir">
                                <div class="css-1co26wt">
                                  <div type="subtitle" class="att-product-detail-latest-price css-do31rh" color="primary500">999.000&nbsp;₫</div>
                                  <div class="css-3mjppt">
                                    <div type="caption" class="att-product-detail-retail-price css-18z00w6" color="textSecondary">1.290.000&nbsp;₫</div>
                                    <div type="caption" color="primary500" class="css-2rwx6s">-22.56%</div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </a></div>
                      </div>
                    </div>
                    <div class="glide__slide" style="height: unset; margin-right: 5px; margin-left: 5px; width: 174.6px;">
                      <div class="css-1ei4kcr">
                        <div class="product-card css-1msrncq" data-content-region-name="relatedProducts" data-track-content="true" data-content-name="221003402" data-content-target="productDetail"><a target="_self" class="css-pxdb0j" href="/ban-chai-dien-halio-sonic-whitening-toothbrush-pro-mau-xanh--s221003402">
                            <div class="css-4rhdrh">
                              <div class="css-1v97aik">
                                <div class="css-798fc">
                                  <div height="100%" width="100%" class="css-1uzm8bv"><img src="https://lh3.googleusercontent.com/P29DEWgDcCni_73IdkZdKfoRSPc6P-DJXb2OpCExRa5YvRJlukP8eyTXVbQpEppraBKThEFPRCTdkIEQ2Bw7QaNMbhu3yHvC=w230-rw" loading="lazy" hover="zoom" decoding="async" alt="Bàn chải điện Halio Sonic Whitening Toothbrush PRO - Màu xanh" style="width: 100%; height: 100%; object-fit: contain; position: absolute; top: 0px; left: 0px;"></div>
                                </div>
                              </div>
                              <div class="css-68cx5s">
                                <div type="body" color="textSecondary" class="product-brand-name css-90n0z6" style="text-transform: uppercase; display: inline;">Halio</div>
                              </div>
                              <div class="css-1ybkowq">
                                <div type="caption" class="att-product-card-title css-1uunp2d" color="textPrimary">
                                  <h3 title="Bàn chải điện Halio Sonic Whitening Toothbrush PRO - Màu xanh" class="css-1xdyrhj">Bàn chải điện Halio Sonic Whitening Toothbrush PRO - Màu xanh</h3>
                                </div>
                              </div>
                              <div class="css-kgkvir">
                                <div class="css-1co26wt">
                                  <div type="subtitle" class="att-product-detail-latest-price css-do31rh" color="primary500">1.290.000&nbsp;₫</div>
                                </div>
                              </div>
                            </div>
                          </a></div>
                      </div>
                    </div>
                    <div class="glide__slide" style="height: unset; margin-right: 5px; margin-left: 5px; width: 174.6px;">
                      <div class="css-1ei4kcr">
                        <div class="product-card css-1msrncq" data-content-region-name="relatedProducts" data-track-content="true" data-content-name="221003403" data-content-target="productDetail"><a target="_self" class="css-pxdb0j" href="/may-tam-nuoc-cam-tay-halio-ultraclean-oral-irrigator-sky-blue--s221003403">
                            <div class="css-4rhdrh">
                              <div class="css-1v97aik">
                                <div class="css-798fc">
                                  <div height="100%" width="100%" class="css-1uzm8bv"><img src="https://lh3.googleusercontent.com/dAYyFx1vFzVK6kKc_Fx7z3V30hMe9M0tmDLFK5j02d5seT42aAbg7S0YVffilgs_qzvS4tbCg9XzVCMwcwCJqg6Fj9wx0C2vrA=w230-rw" loading="lazy" hover="zoom" decoding="async" alt="Máy tăm nước cầm tay Halio UltraClean Oral Irrigator - Sky Blue" style="width: 100%; height: 100%; object-fit: contain; position: absolute; top: 0px; left: 0px;"></div>
                                </div>
                                <div class="css-14q2k9d">
                                  <div class="css-zb7zul">
                                    <div class="css-1bqeu8f">TIẾT KIỆM</div>
                                    <div class="css-1rdv2qd">241.000&nbsp;₫</div>
                                  </div>
                                </div>
                              </div>
                              <div class="css-68cx5s">
                                <div type="body" color="textSecondary" class="product-brand-name css-90n0z6" style="text-transform: uppercase; display: inline;">Halio</div>
                              </div>
                              <div class="css-1ybkowq">
                                <div type="caption" class="att-product-card-title css-1uunp2d" color="textPrimary">
                                  <h3 title="Máy tăm nước cầm tay Halio UltraClean Oral Irrigator - Sky Blue" class="css-1xdyrhj">Máy tăm nước cầm tay Halio UltraClean Oral Irrigator - Sky Blue</h3>
                                </div>
                              </div>
                              <div class="css-kgkvir">
                                <div class="css-1co26wt">
                                  <div type="subtitle" class="att-product-detail-latest-price css-do31rh" color="primary500">1.049.000&nbsp;₫</div>
                                  <div class="css-3mjppt">
                                    <div type="caption" class="att-product-detail-retail-price css-18z00w6" color="textSecondary">1.290.000&nbsp;₫</div>
                                    <div type="caption" color="primary500" class="css-2rwx6s">-18.68%</div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </a></div>
                      </div>
                    </div>
                    <div class="glide__slide" style="height: unset; margin-right: 5px; margin-left: 5px; width: 174.6px;">
                      <div class="css-1ei4kcr">
                        <div class="product-card css-1msrncq" data-content-region-name="relatedProducts" data-track-content="true" data-content-name="221003404" data-content-target="productDetail"><a target="_self" class="css-pxdb0j" href="/may-day-tinh-chat-duong-trang-nong-lanh-halio-ion-hot-cool-beauty-device-mau-trang--s221003404">
                            <div class="css-4rhdrh">
                              <div class="css-1v97aik">
                                <div class="css-798fc">
                                  <div height="100%" width="100%" class="css-1uzm8bv"><img src="https://lh3.googleusercontent.com/0Y77JXd96419D9nwLfxCW16_jDZgYY1XdABmu9omG6IHSutEEI3C3acx_MZdauDHrO1mhYRuyE84FHHIjqdSkp29_WGuwLU6=w230-rw" loading="lazy" hover="zoom" decoding="async" alt="Máy đẩy tinh chất dưỡng trắng nóng lạnh Halio Ion Hot &amp; Cool Beauty Device - Màu trắng" style="width: 100%; height: 100%; object-fit: contain; position: absolute; top: 0px; left: 0px;"></div>
                                </div>
                                <div class="css-14q2k9d">
                                  <div class="css-zb7zul">
                                    <div class="css-1bqeu8f">TIẾT KIỆM</div>
                                    <div class="css-1rdv2qd">600.000&nbsp;₫</div>
                                  </div>
                                </div>
                              </div>
                              <div class="css-68cx5s">
                                <div type="body" color="textSecondary" class="product-brand-name css-90n0z6" style="text-transform: uppercase; display: inline;">Halio</div>
                              </div>
                              <div class="css-1ybkowq">
                                <div type="caption" class="att-product-card-title css-1uunp2d" color="textPrimary">
                                  <h3 title="Máy đẩy tinh chất dưỡng trắng nóng lạnh Halio Ion Hot &amp; Cool Beauty Device - Màu trắng" class="css-1xdyrhj">Máy đẩy tinh chất dưỡng trắng nóng lạnh Halio Ion Hot &amp; Cool Beauty Device - Màu trắng</h3>
                                </div>
                              </div>
                              <div class="css-kgkvir">
                                <div class="css-1co26wt">
                                  <div type="subtitle" class="att-product-detail-latest-price css-do31rh" color="primary500">1.890.000&nbsp;₫</div>
                                  <div class="css-3mjppt">
                                    <div type="caption" class="att-product-detail-retail-price css-18z00w6" color="textSecondary">2.490.000&nbsp;₫</div>
                                    <div type="caption" color="primary500" class="css-2rwx6s">-24.1%</div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </a></div>
                      </div>
                    </div>
                    <div class="glide__slide" style="height: unset; margin-left: 5px; width: 174.6px;">
                      <div class="css-1ei4kcr">
                        <div class="product-card css-1msrncq" data-content-region-name="relatedProducts" data-track-content="true" data-content-name="221100983" data-content-target="productDetail"><a target="_self" class="css-pxdb0j" href="/may-uon-toc-tu-xoay-ion-am-halio-auto-rotating-hair-curler--s221100983">
                            <div class="css-4rhdrh">
                              <div class="css-1v97aik">
                                <div class="css-798fc">
                                  <div height="100%" width="100%" class="css-1uzm8bv"><img src="https://lh3.googleusercontent.com/t7cGymgFqIHJlOweixULACQ8pDWnQ6agUn4OSMvD-HrzAvp22-QE2KHbZUDMOgNjtgWj_YlLe3yS-WBYEW9DntdVhkC7z_8U=w230-rw" loading="lazy" hover="zoom" decoding="async" alt="Máy Uốn Tóc Tự Xoay Ion Âm Halio Auto Rotating Hair Curler" style="width: 100%; height: 100%; object-fit: contain; position: absolute; top: 0px; left: 0px;"></div>
                                </div>
                                <div class="css-14q2k9d">
                                  <div class="css-zb7zul">
                                    <div class="css-1bqeu8f">TIẾT KIỆM</div>
                                    <div class="css-1rdv2qd">241.000&nbsp;₫</div>
                                  </div>
                                </div>
                              </div>
                              <div class="css-68cx5s">
                                <div type="body" color="textSecondary" class="product-brand-name css-90n0z6" style="text-transform: uppercase; display: inline;">Halio</div>
                              </div>
                              <div class="css-1ybkowq">
                                <div type="caption" class="att-product-card-title css-1uunp2d" color="textPrimary">
                                  <h3 title="Máy Uốn Tóc Tự Xoay Ion Âm Halio Auto Rotating Hair Curler" class="css-1xdyrhj">Máy Uốn Tóc Tự Xoay Ion Âm Halio Auto Rotating Hair Curler</h3>
                                </div>
                              </div>
                              <div class="css-kgkvir">
                                <div class="css-1co26wt">
                                  <div type="subtitle" class="att-product-detail-latest-price css-do31rh" color="primary500">749.000&nbsp;₫</div>
                                  <div class="css-3mjppt">
                                    <div type="caption" class="att-product-detail-retail-price css-18z00w6" color="textSecondary">990.000&nbsp;₫</div>
                                    <div type="caption" color="primary500" class="css-2rwx6s">-24.34%</div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </a></div>
                      </div>
                    </div>
                  </div>
                  <div data-glide-el="controls" class="glide__arrows">
                    <div class="glide__arrow--override glide__arrow--left glide__arrow--disabled" data-glide-dir="|<"></div>
                    <div class="glide__arrow--override glide__arrow--right" data-glide-dir="|>"></div>
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
    echo "Không tìm thấy sản phẩm với SKU: $maMH";
  }
} else {
  echo "SKU không được cung cấp";
}
?>