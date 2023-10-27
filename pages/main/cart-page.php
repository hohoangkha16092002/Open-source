<?php
include("config.php");
$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Kết nối tới cơ sở dữ liệu thất bại: " . $conn->connect_error);
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
                <div class="css-1sqnsff"><img src="https://shopfront-cdn.tekoapis.com/static/phongvu/logo.svg" alt="logo"></div>
                <div class="css-1i20i3">Báo giá sản phẩm</div>
                <div class="teko-row teko-row-no-wrap teko-row-space-between css-15z799l">
                    <div class="teko-col css-17ajfcv" style="flex: 1 1 auto;">
                        <div class="teko-row teko-row-no-wrap teko-row-start css-1qrgscw" style="margin-left: -8px; margin-right: -8px;">
                            <div class="teko-col css-17ajfcv" style="padding-left: 8px; padding-right: 8px; flex: 0 0 auto;">
                                <div width="4.875rem" class="css-olmswc"><img src="https://lh3.googleusercontent.com/r_xFGeSZ4xFlzdKgItX8Jp82j10sfAnJwvyIYMNpEr9K-gaJzeBnMJJsEd6L51m1of60-l1VjFPj7mvrA7KSyu-WrAXIkxM=rw" loading="lazy" decoding="async" style="width: 100%; height: auto;"></div>
                            </div>
                            <div class="teko-col css-17ajfcv" style="padding-left: 8px; padding-right: 8px; flex: 0 1 35rem;">Điện thoại Samsung Galaxy Z Flip4 8GB/128GB (Light Violet) (SM-F721BLVAXXV)</div>
                            <div class="teko-col css-17ajfcv" style="padding-left: 8px; padding-right: 8px;">x 1</div>
                        </div>
                    </div>
                    <div class="teko-col css-17ajfcv" style="flex: 0 0 auto;">
                        <div class="teko-row teko-row-end css-1qrgscw"><span color="primary500" class="css-1yqf0rb">15.149.000đ</span></div>
                        <div class="teko-row teko-row-end css-1qrgscw"><span class="css-10zxjrh">22.990.000đ</span></div>
                    </div>
                </div>
                <div class="teko-row teko-row-no-wrap teko-row-start css-taqq0j" style="margin-left: -8px; margin-right: -8px;">
                    <div class="teko-col css-17ajfcv" style="padding-left: 8px; padding-right: 8px; flex: 0 0 auto;">
                        <div class="teko-row teko-row-end css-1qrgscw" style="width: 4.875rem;">
                            <div width="1.5rem" class="css-1bpl8h5"><img src="https://shopfront-cdn.tekoapis.com/cart/gift-filled.png" loading="lazy" decoding="async" style="width: 100%; height: auto;"></div>
                        </div>
                    </div>
                    <div class="teko-col css-17ajfcv" style="padding-left: 8px; padding-right: 8px; flex: 0 1 auto;">Giảm 7.841.000₫ (áp dụng vào giá sản phẩm)
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
                                <div type="subtitle" color="" class="css-nbdyuc"><span color="primary500" class="att-final-price css-1yqf0rb">15.149.000đ</span></div>
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
                    <div class="css-889chh"><svg fill="none" viewBox="0 0 24 24" size="16" class="css-26qhcs" color="placeholder" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.49976 19.0001L15.4998 12.0001L8.49976 5.00012" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg></div><a href="#" disabled="" class="breadcrumb-item css-4jp5hh">
                        <div type="body" class="css-kwe6s1">Giỏ hàng</div>
                    </a>
                </div>
                <div class="css-117j3zt">
                    <div class="css-8x68m">
                        <div class="css-1knbux5">
                            <div type="title" class="att-gio-hang css-1cp1h79">Giỏ hàng</div><button class="att-delete-all-btn css-tj2ae3">Xóa tất cả</button>
                        </div>
                    </div>
                    <div class="css-8xcfft">
                        <div class="css-1vczc1y">
                            <div class="css-cssveg"><button class="css-1rllob8"><span class="css-1denlqa">Tải báo giá</span><span direction="down" size="12" class="css-er4drj"></span></button></div>
                        </div>
                    </div>
                </div>
                <div class="css-4cffwv">
                    <div class="css-8x68m">
                        <div class="css-1jky165">
                            <div class="card-body css-0">
                                <div class="teko-row teko-row-space-between teko-row-middle css-8m0ae5">
                                    <div class="teko-col css-17ajfcv" style="flex: 0 0 4%;"><label class="check-box css-1u2186j">
                                            <div class="css-l24w9c"><input type="checkbox" class="att-uncheck-all-product css-11kbzq0" checked="">
                                                <div class="checkbox-inner css-rumpju"><svg fill="none" viewBox="0 0 24 24" size="12" class="css-5ju3er" color="white" height="12" width="12" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M5 12.4545L9.375 17L19 7" stroke="#82869E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg></div>
                                            </div>
                                        </label></div>
                                    <div class="teko-col css-17ajfcv" style="flex: 0 0 96%;">
                                        <div class="teko-row teko-row-space-between teko-row-middle css-1qrgscw">
                                            <div class="teko-col teko-col-6 css-17ajfcv">
                                                <div class="css-1j4ksfn">
                                                    <div>
                                                        <div type="subtitle" class="css-4eq9p2">CÔNG TY CỔ PHẦN THƯƠNG MẠI DỊCH VỤ PHONG VŨ</div>
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
                                <div class="css-ehdnal">
                                    <div class="teko-row teko-row-space-between teko-row-middle css-1qrgscw">
                                        <div class="teko-col css-17ajfcv" style="flex: 0 0 4%;"><label class="check-box css-1u2186j">
                                                <div class="css-l24w9c"><input type="checkbox" class="css-11kbzq0" checked="">
                                                    <div class="checkbox-inner css-rumpju"><svg fill="none" viewBox="0 0 24 24" size="12" class="css-5ju3er" color="white" height="12" width="12" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M5 12.4545L9.375 17L19 7" stroke="#82869E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg></div>
                                                </div>
                                            </label></div>
                                        <div class="teko-col css-17ajfcv" style="flex: 0 0 96%;">
                                            <div class="teko-row teko-row-space-between css-1qrgscw">
                                                <div class="teko-col teko-col-6 css-17ajfcv">
                                                    <div class="css-vhnop0"><a target="_self" class="css-cbrxda" href="/dien-thoai-samsung-galaxy-z-flip4-8gb-128gb-light-violet-sm-f721blvaxxv--s221003264?sku=221003264">
                                                            <div height="80" width="80" class="css-1i7enn7"><img src="https://lh3.googleusercontent.com/r_xFGeSZ4xFlzdKgItX8Jp82j10sfAnJwvyIYMNpEr9K-gaJzeBnMJJsEd6L51m1of60-l1VjFPj7mvrA7KSyu-WrAXIkxM=rw" loading="lazy" decoding="async" alt="product" style="width: 100%; height: 80px;"></div>
                                                        </a>
                                                        <div class="css-yp9swi"><a target="_self" class="css-cbrxda" href="/dien-thoai-samsung-galaxy-z-flip4-8gb-128gb-light-violet-sm-f721blvaxxv--s221003264?sku=221003264">
                                                                <div type="body" color="textPrimary" class="css-1h5tj4c">Điện thoại Samsung Galaxy Z Flip4 8GB/128GB (Light Violet) (SM-F721BLVAXXV)</div>
                                                            </a>
                                                            <div type="caption" color="textSecondary" class="css-1f5a6jh">SKU: 221003264</div>
                                                            <div type="caption" color="textSecondary" class="css-1f5a6jh">128GB, Purple</div>
                                                            <div type="caption" color="warning" class="css-1ly96sc">Chỉ còn 4 sản phẩm</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="teko-col teko-col-2 css-1g0wtwt">
                                                    <div class="teko-col css-17ajfcv">
                                                        <div class="teko-row teko-row-end teko-row-middle css-1qrgscw"><span class="product-price__price css-rmdhxt">15.149.000đ</span></div>
                                                        <div class="teko-row teko-row-end teko-row-middle css-1qrgscw"><span class="product-price__listed-price att-strike-through-display-price css-10zxjrh">23.990.000₫</span></div>
                                                    </div>
                                                </div>
                                                <div class="teko-col teko-col-2 css-17ajfcv">
                                                    <div class="css-1oskuwq">
                                                        <div class="css-1qgaj65"><button disabled="" class="css-1kcvffe"><span class="css-1orfikq"><svg fill="none" viewBox="0 0 24 24" size="16" class="css-cpb1o" color="disable" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.25 12C3.25 11.5858 3.58579 11.25 4 11.25H20C20.4142 11.25 20.75 11.5858 20.75 12C20.75 12.4142 20.4142 12.75 20 12.75H4C3.58579 12.75 3.25 12.4142 3.25 12Z" fill="#82869E"></path>
                                                                    </svg></span></button>
                                                            <div class="css-ktgpr2">
                                                                <div height="40" class="wrap-input-number css-1edkzvw">
                                                                    <div class="rc-input-number">
                                                                        <div class="rc-input-number-input-wrap"><input autocomplete="off" role="spinbutton" aria-valuemin="1" aria-valuemax="999" aria-valuenow="1" step="1" class="rc-input-number-input" value="1"></div>
                                                                    </div>
                                                                </div>
                                                            </div><button class="css-1i77det"><span class="css-1orfikq"><svg fill="none" viewBox="0 0 24 24" size="16" class="css-g427p8" color="textPrimary" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.75 4C12.75 3.58579 12.4142 3.25 12 3.25C11.5858 3.25 11.25 3.58579 11.25 4V11.25H4C3.58579 11.25 3.25 11.5858 3.25 12C3.25 12.4142 3.58579 12.75 4 12.75H11.25V20C11.25 20.4142 11.5858 20.75 12 20.75C12.4142 20.75 12.75 20.4142 12.75 20V12.75H20C20.4142 12.75 20.75 12.4142 20.75 12C20.75 11.5858 20.4142 11.25 20 11.25H12.75V4Z" fill="#82869E"></path>
                                                                    </svg></span></button>
                                                        </div>
                                                        <div type="body" class=" css-3c7poi">Xóa</div>
                                                    </div>
                                                </div>
                                                <div class="teko-col teko-col-2 css-17ajfcv">
                                                    <div class="teko-col css-17ajfcv">
                                                        <div class="teko-row teko-row-end teko-row-middle css-1qrgscw"><span class="product-price__price css-rmdhxt">15.149.000đ</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="teko-row teko-row-no-wrap teko-row-start css-1qrgscw">
                                        <div class="teko-col css-17ajfcv" style="flex: 0 0 4%;"></div>
                                        <div class="teko-col css-cudft" style="flex: 0 0 96%;">
                                            <div class="teko-row css-1qrgscw">
                                                <div class="teko-col css-17ajfcv" style="flex: 0 0 94%;">
                                                    <div width="100%" class="css-6q9u1e">
                                                        <div class="teko-row teko-row-no-wrap teko-row-space-between css-1qrgscw">
                                                            <div class="teko-col css-1q4g17t">
                                                                <div height="16" width="16" class="css-11m9qpq"><img src="https://shopfront-cdn.tekoapis.com/cart/gift-filled.png" loading="lazy" decoding="async" style="width: 100%; height: 16px;"></div>
                                                            </div>
                                                            <div width="100%" class="teko-col css-oi0lj1">
                                                                <div type="body" class="css-1lchwqw">Giảm 7.841.000₫ (áp dụng vào giá sản phẩm)
                                                                    1x Tai nghe Samsung Galaxy Buds 2 (Đen) (SM-R177NZKAXXV) (Quà tặng)
                                                                    1x Sạc nhanh Samsung 15W Type C, Trắng (EP-T1510NWEGWW) (Quà tặng)</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="teko-col css-1wvh353" style="flex: 0 0 6%;"><svg fill="none" viewBox="0 0 24 24" size="24" class="css-26qhcs" color="placeholder" height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M8.49976 19.0001L15.4998 12.0001L8.49976 5.00012" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="css-8xcfft">
                        <div class="css-127zbo8">
                            <div class="card-header css-0">
                                <div class="css-1knbux5">
                                    <h6>Khuyến mãi</h6><a target="_blank" rel="noopener noreferrer" class="css-kfv2zc" color="link500" id="select-coupon"><svg fill="none" viewBox="0 0 24 24" class="css-9w5ue6" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M6.19499 3C5.99608 3 5.80532 3.07902 5.66466 3.21967L3.21967 5.66466C3.07902 5.80532 3 5.99608 3 6.19499V11.085C3 11.2839 3.07902 11.4747 3.21967 11.6153L12.3884 20.784C12.6813 21.0769 13.1562 21.0769 13.4491 20.784L17.1166 17.1166L20.784 13.4491C21.0769 13.1562 21.0769 12.6813 20.784 12.3884L11.6153 3.21967C11.4747 3.07902 11.2839 3 11.085 3H6.19499ZM4.5 6.50565L6.50565 4.5H10.7743L19.1931 12.9187L16.0559 16.0559L12.9187 19.1931L4.5 10.7743V6.50565ZM7.86186 9.2514C7.86186 8.65286 8.34707 8.16765 8.94561 8.16765C9.54415 8.16765 10.0294 8.65286 10.0294 9.2514C10.0294 9.84994 9.54415 10.3351 8.94561 10.3351C8.34707 10.3351 7.86186 9.84994 7.86186 9.2514ZM8.94561 6.66765C7.51865 6.66765 6.36186 7.82444 6.36186 9.2514C6.36186 10.6784 7.51865 11.8351 8.94561 11.8351C10.3726 11.8351 11.5294 10.6784 11.5294 9.2514C11.5294 7.82444 10.3726 6.66765 8.94561 6.66765ZM11.3097 12.9996C11.0168 12.7067 10.5419 12.7067 10.249 12.9996C9.95613 13.2925 9.95613 13.7674 10.249 14.0603L12.3884 16.1996C12.6813 16.4925 13.1562 16.4925 13.449 16.1996C13.7419 15.9067 13.7419 15.4319 13.449 15.139L11.3097 12.9996ZM12.694 10.5545C12.9869 10.2616 13.4618 10.2616 13.7547 10.5545L15.8941 12.6939C16.187 12.9868 16.187 13.4616 15.8941 13.7545C15.6012 14.0474 15.1263 14.0474 14.8334 13.7545L12.694 11.6151C12.4011 11.3223 12.4011 10.8474 12.694 10.5545Z" fill="#82869E"></path>
                                        </svg> &nbsp; Chọn hoặc nhập khuyến mãi</a>
                                </div>
                            </div>
                            <div class="card-body css-0">
                                <div class="css-twos5s">Đơn hàng chưa đủ điều kiện áp dụng khuyến mãi. Vui lòng mua thêm để áp dụng</div>
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
                                            <div type="subtitle" color="" class="css-nbdyuc"><span color="primary500" class="att-final-price css-1yqf0rb">15.149.000đ</span></div>
                                            <div type="caption" color="textSecondary" class="css-172d5l5">(Đã bao gồm VAT)</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer css-0">
                                <div data-content-region-name="bottomShoppingCart" data-track-content="true" data-content-name="createOrder" class="css-0"><button class="att-shopping-btn css-v463h2">TIẾP TỤC</button></div>
                            </div>
                        </div>
                        <div class="cartInlineBox"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>