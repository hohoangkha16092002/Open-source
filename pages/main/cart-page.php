<?php
include('config.php');

if (isset($_SESSION['loggedin_customer'])) {
    $sql = "SELECT * FROM khachhang WHERE MaKH = '" . $_SESSION['MaKH'] . "'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $info = mysqli_fetch_assoc($result);
        if (!isset($_SESSION['cart'][$info['MaKH']])) {
            $_SESSION['cart'][$info['MaKH']] = array();
        }
        if (isset($_GET["action"])) {
            function update_cart($info, $add = false)
            {
                foreach ($_POST['quantity'] as $MaMH => $quantity) {
                    if ($quantity == 0) {
                        unset($_SESSION['cart'][$info['MaKH']][$MaMH]);
                    } else {
                        if ($add) {
                            $_SESSION['cart'][$info['MaKH']][$MaMH] += $quantity;
                        } else {
                            $_SESSION['cart'][$info['MaKH']][$MaMH] = $quantity;
                        }
                    }
                }
            }
            switch ($_GET["action"]) {
                case "add":
                    update_cart($info, true);
                    header('Location: ?page=cart-page');
                    break;
                case "delete":
                    if (isset($_GET['MaMH'])) {
                        unset($_SESSION['cart'][$info['MaKH']][$_GET['MaMH']]);
                        header('Location: ?page=cart-page');
                    }
                    break;
                case 'submit':
                    if (isset($_POST['update_click'])) {
                        update_cart($info);
                        header('Location: ?page=cart-page');
                    } elseif (isset($_POST['order_click'])) {

                    }
                    break;
            }
        }

        if (!empty($_SESSION['cart'][$info['MaKH']])) {
            $session_array = "'" . implode("','", array_keys($_SESSION['cart'][$info['MaKH']])) . "'";
            $sql_cart = "SELECT * FROM mathang
            join dmhangsanxuat on `mathang`.MaHSX = dmhangsanxuat.MaHSX
            join anhmh on mathang.MaMH = anhmh.MaMH
            join khuyenmai on mathang.MaKM = khuyenmai.MaKM
            WHERE mathang.MaMH IN ($session_array)";
            $result_cart = mysqli_query($conn, $sql_cart);

            if ($result_cart) {
                // Xử lý kết quả truy vấn
            } else {
                echo "Lỗi trong truy vấn SQL: " . mysqli_error($conn);
            }
        } else {
            echo "Giỏ hàng trống";
        }
    }
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <div class="css-cssveg">
            <div class=" css-27abj6">
                <div class="css-163sceo">
                    <div class="css-1sqnsff"><img src="https://shopfront-cdn.tekoapis.com/static/phongvu/logo.svg"
                            alt="logo"></div>
                    <div class="css-1i20i3">Báo giá sản phẩm</div>
                    <div class="teko-row teko-row-no-wrap teko-row-space-between css-15z799l">
                        <div class="teko-col css-17ajfcv" style="flex: 1 1 auto;">
                            <div class="teko-row teko-row-no-wrap teko-row-start css-1qrgscw"
                                style="margin-left: -8px; margin-right: -8px;">
                                <div class="teko-col css-17ajfcv"
                                    style="padding-left: 8px; padding-right: 8px; flex: 0 0 auto;">
                                    <div width="4.875rem" class="css-olmswc"><img
                                            src="https://lh3.googleusercontent.com/r_xFGeSZ4xFlzdKgItX8Jp82j10sfAnJwvyIYMNpEr9K-gaJzeBnMJJsEd6L51m1of60-l1VjFPj7mvrA7KSyu-WrAXIkxM=rw"
                                            loading="lazy" decoding="async" style="width: 100%; height: auto;"></div>
                                </div>
                                <div class="teko-col css-17ajfcv"
                                    style="padding-left: 8px; padding-right: 8px; flex: 0 1 35rem;">Điện thoại Samsung
                                    Galaxy Z Flip4 8GB/128GB (Light Violet) (SM-F721BLVAXXV)</div>
                                <div class="teko-col css-17ajfcv" style="padding-left: 8px; padding-right: 8px;">x 1
                                </div>
                            </div>
                        </div>
                        <div class="teko-col css-17ajfcv" style="flex: 0 0 auto;">
                            <div class="teko-row teko-row-end css-1qrgscw"><span color="primary500"
                                    class="css-1yqf0rb">15.149.000đ</span></div>
                            <div class="teko-row teko-row-end css-1qrgscw"><span class="css-10zxjrh">22.990.000đ</span>
                            </div>
                        </div>
                    </div>
                    <div class="teko-row teko-row-no-wrap teko-row-start css-taqq0j"
                        style="margin-left: -8px; margin-right: -8px;">
                        <div class="teko-col css-17ajfcv"
                            style="padding-left: 8px; padding-right: 8px; flex: 0 0 auto;">
                            <div class="teko-row teko-row-end css-1qrgscw" style="width: 4.875rem;">
                                <div width="1.5rem" class="css-1bpl8h5"><img
                                        src="https://shopfront-cdn.tekoapis.com/cart/gift-filled.png" loading="lazy"
                                        decoding="async" style="width: 100%; height: auto;"></div>
                            </div>
                        </div>
                        <div class="teko-col css-17ajfcv"
                            style="padding-left: 8px; padding-right: 8px; flex: 0 1 auto;">Giảm 7.841.000₫ (áp dụng vào
                            giá sản phẩm)
                            1x Tai nghe Samsung Galaxy Buds 2 (Đen) (SM-R177NZKAXXV) (Quà tặng)
                            1x Sạc nhanh Samsung 15W Type C, Trắng (EP-T1510NWEGWW) (Quà tặng)</div>
                    </div>
                    <div class="css-1v1xspx">
                        <div class="att-checkout-summary css-l1po7j">
                            <div class="teko-row teko-row-space-between teko-row-top css-33wqqr">
                                <div class="teko-col css-17ajfcv">
                                    <div type="subtitle" class="css-1lg3tx0">Tổng tạm tính</div>
                                </div>
                                <div class="teko-col css-17ajfcv" style="text-align: right;">
                                    <div type="subtitle" color="" class="css-nbdyuc">15.149.000₫</div>
                                </div>
                            </div>
                            <div class="teko-row teko-row-space-between teko-row-top css-33wqqr">
                                <div class="teko-col css-17ajfcv">
                                    <div type="subtitle" class="css-1lg3tx0">Thành tiền</div>
                                </div>
                                <div class="teko-col css-17ajfcv" style="text-align: right;">
                                    <div type="subtitle" color="" class="css-nbdyuc"><span color="primary500"
                                            class="att-final-price css-1yqf0rb">15.149.000đ</span></div>
                                    <div type="caption" color="textSecondary" class="css-172d5l5">(Đã bao gồm VAT)</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="css-bvrx60">
                    <div class="css-tqzoy9"><a href="/" class="breadcrumb-item css-1s8chay">
                            <div type="body" class="css-kwe6s1">Trang chủ</div>
                        </a>
                        <div class="css-889chh"><svg fill="none" viewBox="0 0 24 24" size="16" class="css-26qhcs"
                                color="placeholder" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.49976 19.0001L15.4998 12.0001L8.49976 5.00012" stroke="currentColor"
                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg></div><a href="#" disabled="" class="breadcrumb-item css-4jp5hh">
                            <div type="body" class="css-kwe6s1">Giỏ hàng</div>
                        </a>
                    </div>
                    <div class="css-117j3zt">
                        <div class="css-8x68m">
                            <div class="css-1knbux5">
                                <div type="title" class="att-gio-hang css-1cp1h79">Giỏ hàng</div><button
                                    id="delete-all-product" class="att-delete-all-btn css-tj2ae3">Xóa tất cả</button>
                            </div>
                        </div>
                        <div class="css-8xcfft">
                            <div class="css-1vczc1y">
                                <div class="css-cssveg"><button class="css-1rllob8"><span class="css-1denlqa">Tải báo
                                            giá</span><span direction="down" size="12"
                                            class="css-er4drj"></span></button></div>
                            </div>
                        </div>
                    </div>
                    <div class="css-4cffwv">
                        <div class="css-8x68m">
                            <div class="css-1jky165">
                                <div class="card-body css-0">
                                    <div class="teko-row teko-row-space-between teko-row-middle css-8m0ae5">
                                        <div class="teko-col css-17ajfcv" style="flex: 0 0 96%;">
                                            <div class="teko-row teko-row-space-between teko-row-middle css-1qrgscw">
                                                <div class="teko-col teko-col-6 css-17ajfcv">
                                                    <div class="css-1j4ksfn">
                                                        <div>
                                                            <div type="subtitle" class="css-4eq9p2"><b>CÔNG TY CỔ
                                                                    PHẦN THƯƠNG MẠI DỊCH VỤ PHONG VŨ</b></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="teko-col teko-col-2 css-14k6732">
                                                    <div type="body" class="css-1dqxh16">Đơn giá</div>
                                                </div>
                                                <div class="teko-col teko-col-2 css-12rwhn9">
                                                    <div type="body" class="css-1dqxh16">Số lượng</div>
                                                </div>
                                                <div class="teko-col teko-col-2 css-16l9z17">
                                                    <div type="body" class="css-1dqxh16">Thành tiền</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <form action="?page=cart-page&action=submit" method="post">
                                        <?php
                                        if (!empty($result_cart)) {
                                            $total_money = 0;
                                            while ($rows_cart = mysqli_fetch_assoc($result_cart)) {
                                                $product_name = $rows_cart["TenMH"];
                                                $product_price = $rows_cart["DonGia"];
                                                $product_brand = $rows_cart["TenHSX"];
                                                $product_image = $rows_cart['DLAnh'];
                                                $product_id = $rows_cart['MaMH'];
                                                $product_sale = $rows_cart['GiamGia'];
                                                $quantity = $_SESSION['cart'][$info['MaKH']][$product_id];
                                                $price_sale = $product_price - $product_price * $product_sale;
                                                $money = ($product_price - $product_price * $product_sale) * $quantity; //Số tiền còn lại
                                                $sale_rate = $product_sale * 100; //% khuyến mãi
                                                $save_price = $product_price - $price_sale; //Số tiền tiết kiệm
                                        
                                                $total_money += $money; //Tính tổng  tiền của tất cả sản phẩm
                                                $price_sale_format = number_format($price_sale, 0, '.', '.');
                                                $product_price_format = number_format($product_price, 0, '.', '.');
                                                $save_price_format = number_format($save_price, 0, '.', '.');
                                                $money_format = number_format($money, 0, '.', '.');
                                                $total_money_format = number_format($total_money, 0, '.', '.');

                                                echo '<div class="css-ehdnal">
                                                <div class="teko-row teko-row-space-between teko-row-middle css-1qrgscw">
                                                    <div class="teko-col css-17ajfcv" style="flex: 0 0 96%;">
                                                        <div class="teko-row teko-row-space-between css-1qrgscw">
                                                            <div class="teko-col teko-col-6 css-17ajfcv">
                                                                <div class="css-vhnop0"><a target="_self" class="css-cbrxda"
                                                                        href="">
                                                                        <div height="80" width="80" class="css-1i7enn7"><img
                                                                                src="' . $product_image . '"
                                                                                loading="lazy" decoding="async"
                                                                                alt="product"
                                                                                style="width: 100%; height: 80px;"></div>
                                                                    </a>
                                                                    <div class="css-yp9swi"><a target="_self"
                                                                            class="css-cbrxda"
                                                                            href="">
                                                                            <div type="body" color="textPrimary"
                                                                                class="css-1h5tj4c">' . $rows_cart['TenMH'] . '</div>
                                                                        </a>
                                                                        <div type="caption" color="textSecondary"
                                                                            class="css-1f5a6jh">Hãng sản xuấtt: ' . $rows_cart['TenHSX'] . '</div>
                                                                        <div type="caption" color="textSecondary"
                                                                            class="css-1f5a6jh">' . $rows_cart['LuuTru'] . '</div>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="teko-col teko-col-2 css-1g0wtwt">
                                                                <div class="teko-col css-17ajfcv">
                                                                    <div
                                                                        class="teko-row teko-row-end teko-row-middle css-1qrgscw">
                                                                        <span
                                                                            class="product-price__price css-rmdhxt">' . $price_sale_format . 'đ</span>
                                                                    </div>
                                                                    <div
                                                                        class="teko-row teko-row-end teko-row-middle css-1qrgscw">
                                                                        <span
                                                                            class="product-price__listed-price att-strike-through-display-price css-10zxjrh">' . $product_price_format . '₫</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="teko-col teko-col-2 css-17ajfcv">
                                                                <div class="css-1oskuwq">
                                                                    <div class="css-1qgaj65"><button disabled=""
                                                                            class="css-1kcvffe"><span
                                                                                class="css-1orfikq"><svg fill="none"
                                                                                    viewBox="0 0 24 24" size="16"
                                                                                    class="css-cpb1o" color="disable"
                                                                                    height="16" width="16"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <path fill-rule="evenodd"
                                                                                        clip-rule="evenodd"
                                                                                        d="M3.25 12C3.25 11.5858 3.58579 11.25 4 11.25H20C20.4142 11.25 20.75 11.5858 20.75 12C20.75 12.4142 20.4142 12.75 20 12.75H4C3.58579 12.75 3.25 12.4142 3.25 12Z"
                                                                                        fill="#82869E"></path>
                                                                                </svg></span></button>
                                                                        <div class="css-ktgpr2">
                                                                            <div height="40"
                                                                                class="wrap-input-number css-1edkzvw">
                                                                                <div class="rc-input-number">
                                                                                    <div class="rc-input-number-input-wrap">
                                                                                        <input name="quantity[' . $product_id . ']" class="rc-input-number-input"
                                                                                        value="' . $quantity . '">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div><button class="css-1i77det"><span
                                                                                class="css-1orfikq"><svg fill="none"
                                                                                    viewBox="0 0 24 24" size="16"
                                                                                    class="css-g427p8" color="textPrimary"
                                                                                    height="16" width="16"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <path fill-rule="evenodd"
                                                                                        clip-rule="evenodd"
                                                                                        d="M12.75 4C12.75 3.58579 12.4142 3.25 12 3.25C11.5858 3.25 11.25 3.58579 11.25 4V11.25H4C3.58579 11.25 3.25 11.5858 3.25 12C3.25 12.4142 3.58579 12.75 4 12.75H11.25V20C11.25 20.4142 11.5858 20.75 12 20.75C12.4142 20.75 12.75 20.4142 12.75 20V12.75H20C20.4142 12.75 20.75 12.4142 20.75 12C20.75 11.5858 20.4142 11.25 20 11.25H12.75V4Z"
                                                                                        fill="#82869E"></path>
                                                                                </svg></span></button>
                                                                    </div>
                                                                    <a href="?page=cart-page&action=delete&MaMH=' . $product_id . '"
                                                                        class="att-delete-all-btn css-3c7poi">Xóa</a>
                                                                </div>
                                                            </div>
                                                            <div class="teko-col teko-col-2 css-17ajfcv">
                                                                <div class="teko-col css-17ajfcv">
                                                                    <div
                                                                        class="teko-row teko-row-end teko-row-middle css-1qrgscw">
                                                                        <span
                                                                            class="product-price__price css-rmdhxt">' . $money_format . 'đ</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>';
                                            }
                                            ?>
                                            <?php
                                            echo '<div class="card-footer css-0">
                                                    <div class="css-0">
                                                        <input type="submit" name="update_click"
                                                            class="att-shopping-btn css-v463h2" value="Cập nhật giá tiền">
                                                    </div>
                                                </div>';
                                        }
                                        ?>

                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="css-8xcfft">
                            <div class="css-127zbo8">
                                <div class="card-header css-0">
                                    <div class="css-1knbux5">
                                        <h6>Khuyến mãi</h6><a target="_blank" rel="noopener noreferrer"
                                            class="css-kfv2zc" color="link500" id="select-coupon"><svg fill="none"
                                                viewBox="0 0 24 24" class="css-9w5ue6" height="1em" width="1em"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M6.19499 3C5.99608 3 5.80532 3.07902 5.66466 3.21967L3.21967 5.66466C3.07902 5.80532 3 5.99608 3 6.19499V11.085C3 11.2839 3.07902 11.4747 3.21967 11.6153L12.3884 20.784C12.6813 21.0769 13.1562 21.0769 13.4491 20.784L17.1166 17.1166L20.784 13.4491C21.0769 13.1562 21.0769 12.6813 20.784 12.3884L11.6153 3.21967C11.4747 3.07902 11.2839 3 11.085 3H6.19499ZM4.5 6.50565L6.50565 4.5H10.7743L19.1931 12.9187L16.0559 16.0559L12.9187 19.1931L4.5 10.7743V6.50565ZM7.86186 9.2514C7.86186 8.65286 8.34707 8.16765 8.94561 8.16765C9.54415 8.16765 10.0294 8.65286 10.0294 9.2514C10.0294 9.84994 9.54415 10.3351 8.94561 10.3351C8.34707 10.3351 7.86186 9.84994 7.86186 9.2514ZM8.94561 6.66765C7.51865 6.66765 6.36186 7.82444 6.36186 9.2514C6.36186 10.6784 7.51865 11.8351 8.94561 11.8351C10.3726 11.8351 11.5294 10.6784 11.5294 9.2514C11.5294 7.82444 10.3726 6.66765 8.94561 6.66765ZM11.3097 12.9996C11.0168 12.7067 10.5419 12.7067 10.249 12.9996C9.95613 13.2925 9.95613 13.7674 10.249 14.0603L12.3884 16.1996C12.6813 16.4925 13.1562 16.4925 13.449 16.1996C13.7419 15.9067 13.7419 15.4319 13.449 15.139L11.3097 12.9996ZM12.694 10.5545C12.9869 10.2616 13.4618 10.2616 13.7547 10.5545L15.8941 12.6939C16.187 12.9868 16.187 13.4616 15.8941 13.7545C15.6012 14.0474 15.1263 14.0474 14.8334 13.7545L12.694 11.6151C12.4011 11.3223 12.4011 10.8474 12.694 10.5545Z"
                                                    fill="#82869E"></path>
                                            </svg> &nbsp; Chọn hoặc nhập khuyến mãi</a>
                                    </div>
                                </div>
                                <div class="card-body css-0">
                                    <div class="css-twos5s">Đơn hàng chưa đủ điều kiện áp dụng khuyến mãi. Vui lòng
                                        mua thêm để áp dụng</div>
                                </div>
                            </div>
                            <div class="css-1pmyljg">
                                <div class="card-header css-0">
                                    <h6>Thanh toán</h6>
                                </div>
                                <div class="card-body css-0">
                                    <div class="att-checkout-summary css-l1po7j">
                                        <div class="teko-row teko-row-space-between teko-row-top css-33wqqr">
                                            <div class="teko-col css-17ajfcv">
                                                <div type="subtitle" class="css-1lg3tx0">Tổng tạm tính:</div>
                                            </div>
                                            <div class="teko-col css-17ajfcv" style="text-align: right;">
                                                <div type="subtitle" color="" class="css-nbdyuc">
                                                    <?php if (isset($total_money))
                                                        echo $total_money_format ?>đ
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="teko-row teko-row-space-between teko-row-top css-33wqqr">
                                                <div class="teko-col css-17ajfcv">
                                                    <div type="subtitle" class="css-1lg3tx0">Thành tiền</div>
                                                </div>
                                                <div class="teko-col css-17ajfcv" style="text-align: right;">
                                                    <div type="subtitle" color="" class="css-nbdyuc"><span
                                                            color="primary500" class="att-final-price css-1yqf0rb">
                                                        <?php if (isset($total_money))
                                                        echo $total_money_format ?>đ
                                                        </span></div>
                                                    <div type="caption" color="textSecondary" class="css-172d5l5">(Đã
                                                        bao gồm VAT)</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer css-0">
                                        <div data-content-region-name="bottomShoppingCart" data-track-content="true"
                                            data-content-name="createOrder" class="css-0">
                                            <a target="_self" class="nav-ip-popup-child" href="?page=checkout">
                                                <button class="att-shopping-btn css-v463h2">TIẾP TỤC</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="cartInlineBox"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="teko-modal-loiets79gktfazimh1v" class="teko-modal-container"
            style="position: fixed; inset: 0px; z-index: 1051; display: none; justify-content: center; align-items: center; background: rgba(0, 0, 0, 0.1);">
            <div class="css-1272naz"></div>
            <div class="teko-modal teko-modal-show css-t2ptn2"
                style="opacity: 1; transform: translateY(0px); width: 400px;">
                <div class="teko-modal-content"><svg fill="none" viewBox="0 0 24 24" class="teko-modal-close css-1qzn8fv"
                        size="24" color="#000000" height="24" width="24" xmlns="http://www.w3.org/2000/svg"
                        onclick="closeModalOneProduct()">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M6.81304 5.75263C6.52015 5.45974 6.04528 5.45974 5.75238 5.75263C5.45949 6.04552 5.45949 6.5204 5.75238 6.81329L10.8789 11.9398L5.75241 17.0663C5.45952 17.3592 5.45952 17.8341 5.75241 18.127C6.0453 18.4199 6.52018 18.4199 6.81307 18.127L11.9396 13.0005L17.0661 18.127C17.359 18.4199 17.8339 18.4199 18.1268 18.127C18.4196 17.8341 18.4196 17.3592 18.1268 17.0663L13.0002 11.9398L18.1268 6.81329C18.4197 6.5204 18.4197 6.04552 18.1268 5.75263C17.8339 5.45974 17.359 5.45974 17.0661 5.75263L11.9396 10.8792L6.81304 5.75263Z"
                            fill="#82869E"></path>
                    </svg>
                    <div class="teko-modal-header">
                        <div type="title" class="teko-modal-title teko-modal-title-centered css-1cp1h79">Chú ý</div>
                    </div>
                    <div class="teko-modal-body">
                        <div type="body" class="css-1lchwqw" style="text-align: center;">Bạn muốn xoá sản phẩm này ra khỏi
                            giỏ hàng?</div>
                        <div class="teko-modal-footer teko-modal-footer-center"><button height="2.5rem" class="css-12b53wj"
                                type="button" onclick="closeModalOneProduct()">
                                <div type="body" class="button-text css-1lchwqw">Hủy bỏ</div>
                                <span style="margin-left: 0px;">
                                    <div class="css-157jl91"></div>
                                </span>
                            </button><button height="2.5rem" color="white" class="css-fhio94" type="button"
                                onclick="confirmDeleteOneProduct()">
                                <div type="body" class="button-text css-2h64mz" color="white">Đồng ý</div><span
                                    style="margin-left: 0px;">
                                    <div class="css-157jl91"></div>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="teko-modal-loimegrzs96o8wkenua" class="teko-modal-container"
            style="position: fixed; inset: 0px; z-index: 1051; display: none; justify-content: center; align-items: center; background: rgba(0, 0, 0, 0.1);">
            <div class="css-1272naz"></div>
            <div class="teko-modal teko-modal-show css-t2ptn2"
                style="opacity: 1; transform: translateY(0px); width: 400px;">
                <div class="teko-modal-content"><svg fill="none" viewBox="0 0 24 24" class="teko-modal-close css-1qzn8fv"
                        size="24" color="#000000" height="24" width="24" xmlns="http://www.w3.org/2000/svg"
                        onclick="closeModalAllProduct()">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M6.81304 5.75263C6.52015 5.45974 6.04528 5.45974 5.75238 5.75263C5.45949 6.04552 5.45949 6.5204 5.75238 6.81329L10.8789 11.9398L5.75241 17.0663C5.45952 17.3592 5.45952 17.8341 5.75241 18.127C6.0453 18.4199 6.52018 18.4199 6.81307 18.127L11.9396 13.0005L17.0661 18.127C17.359 18.4199 17.8339 18.4199 18.1268 18.127C18.4196 17.8341 18.4196 17.3592 18.1268 17.0663L13.0002 11.9398L18.1268 6.81329C18.4197 6.5204 18.4197 6.04552 18.1268 5.75263C17.8339 5.45974 17.359 5.45974 17.0661 5.75263L11.9396 10.8792L6.81304 5.75263Z"
                            fill="#82869E"></path>
                    </svg>
                    <div class="teko-modal-body">
                        <div class="css-4grbqd">
                            <h5 class="css-nvel68">Chú ý</h5>
                        </div>
                        <div class="css-9wpg0h">Bạn muốn xoá tất cả sản phẩm ra khỏi giỏ hàng?</div>
                        <div class="teko-modal-footer teko-modal-footer-center"><button height="2.5rem" class="css-12b53wj"
                                type="button" onclick="closeModalAllProduct()">
                                <div type="body" class="button-text css-1lchwqw">Hủy bỏ</div><span
                                    style="margin-left: 0px;">
                                    <div class="css-157jl91"></div>
                                </span>
                            </button><button height="2.5rem" color="white"
                                class="att-approved-remove-all-cart-items css-fhio94" type="button"
                                onclick="confirmDeleteAllProduct()">
                                <div type="body" class="button-text css-2h64mz" color="white">Đồng ý</div><span
                                    style="margin-left: 0px;">
                                    <div class="css-157jl91"></div>
                                </span>
                            </button></div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            var deleteOneProductButton = document.getElementById('delete-one-product');
            var deleteAllProductButton = document.getElementById('delete-all-product');
            var modalOneProduct = document.getElementById('teko-modal-loiets79gktfazimh1v');
            var modalAllProduct = document.getElementById('teko-modal-loimegrzs96o8wkenua');
            // Đặt sự kiện click cho nút "Xóa" một sản phẩm
            deleteOneProductButton.addEventListener('click', function () {
                // Hiển thị thông báo khi xóa một sản phẩm
                modalOneProduct.style.display = "flex";
            });

            // Đặt sự kiện click cho nút "Xóa tất cả"
            deleteAllProductButton.addEventListener('click', function () {
                // Hiển thị thông báo khi xóa tất cả sản phẩm
                modalAllProduct.style.display = "flex";
            });

            function closeModalOneProduct() {
                modalOneProduct.style.display = "none";
            }

            function closeModalAllProduct() {
                modalAllProduct.style.display = "none";
            }

            function confirmDeleteOneProduct() {
                // Xử lý khi người dùng nhấn Đồng ý
                closeModalOneProduct(modalOneProduct);
                // Thực hiện hành động xóa sản phẩm
            }

            function confirmDeleteAllProduct() {
                // Xử lý khi người dùng nhấn Đồng ý
                closeModalAllProduct(modalAllProduct);
                // Thực hiện hành động xóa sản phẩm
            }
        </script>
    </body>

    </html>