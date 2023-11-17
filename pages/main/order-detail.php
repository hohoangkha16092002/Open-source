<?php
if (isset($_SESSION['loggedin_customer'])) {
    // $sql_customer = "SELECT * FROM khachhang WHERE MaKH = '" . $_SESSION['MaKH'] . "'";
    // $result_customer = mysqli_query($conn, $sql_customer);
    // if (mysqli_num_rows($result_customer) > 0) {
    //     $info = mysqli_fetch_assoc($result_customer);
    // }

    // $sql_order = "SELECT * FROM `order` WHERE MaKH = '" . $_SESSION['MaKH'] . "'";
    // $result_order = mysqli_query($conn, $sql_order);
    // if (mysqli_num_rows($result_order) > 0) {

    // }

    if (isset($_GET['orderID'])) {
        $orderID = $_GET['orderID'];

        $sql_orderID = "SELECT * FROM `order` WHERE id = '$orderID'";
        $result_orderID = $conn->query($sql_orderID);
        if (mysqli_num_rows($result_orderID) > 0) {
            $row_orderID = mysqli_fetch_assoc($result_orderID);
            $orderID_name = $row_orderID['TenNguoiNhan'];
            $orderID_sdt = $row_orderID['phone'];
            $orderID_address = $row_orderID['address'];
            $timestamp = $row_orderID["created_time"];
            $formattedDate = date('H:i, l d/m/Y', $timestamp);

        }
        // var_dump($result_orderID);exit;
    }
}
?>

<div style="background-color: #f8f8fc;">
    <div class="css-gjf6g1">
        <div class="css-z54kij">
            <div class="css-66d1qu">
                <div class="css-u0wwqg">
                    <div class="css-ov1ktg">
                        <div>
                            <div height="44" width="44" class="css-9bi3ip">
                                <picture>
                                    <source srcset="./img/icon-login.jpg" type="image/webp">
                                    <source srcset="./img/icon-login.jpg" type="image/png"><img
                                        class="lazyload css-hv3z8f" alt="" src="./img/icon-login.jpg" loading="lazy"
                                        decoding="async">
                                </picture>
                            </div>
                        </div>
                        <div class="css-tubh1u">
                            <h6 class="css-9x44fd">Tài khoản của</h6>
                            <h5 class="css-11aljab">
                                <b>
                                    <?php
                                    if (isset($_SESSION['loggedin_customer']))
                                        echo $info['HoTenKH'];
                                    elseif (isset($_SESSION['loggedin_employee']))
                                        echo $info['HoTenNV'];
                                    ?>
                                </b>
                            </h5>
                        </div>
                    </div>
                    <ul class="css-zzskb3">
                        <a class="css-11g9kr1" href="?page=personal-information">
                            <div class="css-1itrv06"><svg fill="none" viewBox="0 0 24 24" size="18" class="css-9w5ue6"
                                    height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12 3.5C7.30558 3.5 3.5 7.30558 3.5 12C3.5 13.9895 4.18351 15.8194 5.32851 17.2676C5.58317 16.4856 6.12054 15.8107 6.85621 15.3914L8.76361 14.2968C8.1448 13.5615 7.772 12.6122 7.772 11.5759V9.83689C7.772 7.50167 9.66479 5.60889 12 5.60889C14.3349 5.60889 16.229 7.50139 16.229 9.83689V11.5759C16.229 12.6132 15.8554 13.5631 15.2354 14.2986L17.1437 15.3908L17.1444 15.3912C17.8805 15.8106 18.4173 16.4856 18.6716 17.2674C19.8165 15.8192 20.5 13.9894 20.5 12C20.5 7.30558 16.6944 3.5 12 3.5ZM10.0133 15.3091C10.6056 15.6249 11.2819 15.8039 12 15.8039C12.7169 15.8039 13.3922 15.6255 13.984 15.3106L16.3999 16.6934L16.4013 16.6942C16.9789 17.0231 17.3365 17.6396 17.3365 18.3075V18.6164C16.8532 19.0067 16.3263 19.3451 15.7642 19.6232C14.9127 19.9671 13.6909 20.2625 12.0005 20.2625C10.3078 20.2625 9.08478 19.9663 8.23289 19.6217C7.67189 19.3439 7.14595 19.006 6.6635 18.6164V18.3075C6.6635 17.6402 7.0216 17.0234 7.59965 16.6942L7.6018 16.693L10.0133 15.3091ZM13.4184 13.9069C14.2043 13.428 14.729 12.5631 14.729 11.5759V9.83689C14.729 8.33038 13.5071 7.10889 12 7.10889C10.4932 7.10889 9.272 8.3301 9.272 9.83689V11.5759C9.272 12.5628 9.79594 13.4273 10.5809 13.9062C10.6523 13.9484 10.7542 14.0035 10.8812 14.0593C11.1657 14.1842 11.5558 14.3035 12.0005 14.3035C12.445 14.3035 12.8341 14.1846 13.1176 14.0602C13.2451 14.0042 13.3472 13.9489 13.4184 13.9069ZM2 12C2 14.9959 3.31741 17.684 5.40452 19.5168L5.42841 19.5438C5.49553 19.6189 5.59114 19.7182 5.71841 19.8332C5.97322 20.0636 6.35385 20.3562 6.88471 20.6435C7.10268 20.7615 7.34486 20.878 7.6128 20.9888C8.93735 21.6364 10.4262 22 12 22C13.5724 22 15.06 21.6371 16.3837 20.9905C16.6532 20.8792 16.8968 20.7621 17.1159 20.6435C17.6466 20.3561 18.0271 20.0635 18.2819 19.8331C18.4091 19.7181 18.5047 19.6187 18.5718 19.5437L18.5956 19.5167C20.6826 17.6839 22 14.9958 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12Z"
                                        fill="#82869E"></path>
                                </svg>
                                <div class="css-rac23i">Thông tin tài khoản</div>
                            </div>
                        </a>
                        <a class="css-11g9kr1" href="?page=order-management">
                            <div class="css-1tj8dpi"><svg fill="none" viewBox="0 0 24 24" size="18" class="css-9w5ue6"
                                    height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M7.5328 3.5625C7.5328 3.14829 7.86859 2.8125 8.2828 2.8125H15.2308C15.645 2.8125 15.9808 3.14829 15.9808 3.5625V3.80501H19.201C19.6152 3.80501 19.951 4.14079 19.951 4.55501V20.4361C19.951 20.8503 19.6152 21.1861 19.201 21.1861H4.3125C3.89829 21.1861 3.5625 20.8503 3.5625 20.4361V4.55501C3.5625 4.14079 3.89829 3.80501 4.3125 3.80501H7.5328V3.5625ZM15.9808 7.53276V5.30501H18.451V19.6861H5.0625V5.30501H7.5328V7.53276C7.5328 7.94698 7.86859 8.28276 8.2828 8.28276H10.0198C10.434 8.28276 10.7698 7.94698 10.7698 7.53276C10.7698 7.30843 11.0628 6.87111 11.7568 6.87111C12.4508 6.87111 12.7438 7.30843 12.7438 7.53276C12.7438 7.94698 13.0796 8.28276 13.4938 8.28276H15.2308C15.645 8.28276 15.9808 7.94698 15.9808 7.53276ZM9.0328 4.3125V6.78276H9.41784C9.7871 5.89836 10.7889 5.37111 11.7568 5.37111C12.7247 5.37111 13.7265 5.89836 14.0957 6.78276H14.4808V4.3125H9.0328ZM15.4476 12.0333C15.7405 11.7404 15.7405 11.2655 15.4476 10.9726C15.1547 10.6797 14.6798 10.6797 14.3869 10.9726L11.0384 14.3211L9.80564 13.0883C9.51275 12.7954 9.03787 12.7954 8.74498 13.0883C8.45209 13.3812 8.45209 13.8561 8.74498 14.149L10.5081 15.9121C10.6487 16.0527 10.8395 16.1318 11.0384 16.1318C11.2373 16.1318 11.4281 16.0527 11.5688 15.9121L15.4476 12.0333Z"
                                        fill="#82869E"></path>
                                </svg>
                                <div class="css-rac23i">Quản lý đơn hàng</div>
                            </div>
                        </a>
                        <a class="css-11g9kr1" href="?page=address">
                            <div class="css-1itrv06"><svg fill="none" viewBox="0 0 24 24" size="18" class="css-9w5ue6"
                                    height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M11.6957 2.75C9.09299 2.75 6.35871 4.72035 6.35871 8.08696C6.35871 8.84669 6.67432 9.80604 7.22598 10.8727C7.76947 11.9236 8.50271 13.0046 9.24942 13.9876C9.99415 14.968 10.7407 15.8358 11.302 16.4592C11.4469 16.6202 11.5792 16.7646 11.6957 16.8901C11.8121 16.7646 11.9444 16.6202 12.0894 16.4592C12.6506 15.8358 13.3972 14.968 14.1419 13.9876C14.8886 13.0046 15.6219 11.9236 16.1654 10.8727C16.717 9.80604 17.0326 8.84669 17.0326 8.08696C17.0326 4.72035 14.2983 2.75 11.6957 2.75ZM11.6957 17.9783C11.1633 18.5065 11.1632 18.5064 11.163 18.5063L11.1627 18.5059L11.1615 18.5048L11.1576 18.5008L11.1432 18.4862L11.0896 18.4313C11.0432 18.3835 10.9758 18.3138 10.8905 18.2241C10.72 18.0447 10.4776 17.7854 10.1872 17.4628C9.60714 16.8185 8.83197 15.9178 8.05496 14.895C7.27993 13.8747 6.49143 12.7177 5.89362 11.5618C5.30398 10.4217 4.85871 9.20548 4.85871 8.08696C4.85871 3.74922 8.41486 1.25 11.6957 1.25C14.9765 1.25 18.5326 3.74922 18.5326 8.08696C18.5326 9.20548 18.0874 10.4217 17.4977 11.5618C16.8999 12.7177 16.1114 13.8747 15.3364 14.895C14.5594 15.9178 13.7842 16.8185 13.2041 17.4628C12.9137 17.7854 12.6713 18.0447 12.5008 18.2241C12.4155 18.3138 12.3482 18.3835 12.3017 18.4313L12.2481 18.4862L12.2338 18.5008L12.2298 18.5048L12.2287 18.5059L12.2283 18.5063C12.2282 18.5064 12.2281 18.5065 11.6957 17.9783ZM11.6957 17.9783L12.2281 18.5065C12.0873 18.6484 11.8956 18.7283 11.6957 18.7283C11.4957 18.7283 11.3041 18.6484 11.1633 18.5065L11.6957 17.9783ZM17.4472 15.2423C17.8177 15.057 18.2682 15.2072 18.4534 15.5777L20.3385 19.3479C20.9203 20.5114 20.0742 21.8805 18.7733 21.8805H4.61804C3.31712 21.8805 2.47101 20.5114 3.05279 19.3479L4.93788 15.5777C5.12313 15.2072 5.57363 15.057 5.94411 15.2423C6.3146 15.4275 6.46477 15.878 6.27952 16.2485L4.39443 20.0187C4.31132 20.1849 4.4322 20.3805 4.61804 20.3805H18.7733C18.9591 20.3805 19.08 20.1849 18.9969 20.0187L17.1118 16.2485C16.9266 15.878 17.0767 15.4275 17.4472 15.2423ZM10.7065 8.08679C10.7065 7.5405 11.1494 7.09766 11.6957 7.09766C12.2419 7.09766 12.6848 7.54051 12.6848 8.08679C12.6848 8.63307 12.2419 9.07592 11.6957 9.07592C11.1494 9.07592 10.7065 8.63307 10.7065 8.08679ZM11.6957 5.59766C10.321 5.59766 9.20654 6.71208 9.20654 8.08679C9.20654 9.4615 10.321 10.5759 11.6957 10.5759C13.0704 10.5759 14.1848 9.4615 14.1848 8.08679C14.1848 6.71208 13.0704 5.59766 11.6957 5.59766Z"
                                        fill="#82869E"></path>
                                </svg>
                                <div class="css-rac23i">Sổ địa chỉ</div>
                            </div>
                        </a><a class="css-11g9kr1">
                            <a class="css-11g9kr1" href="?page=change-password">
                                <div class="css-1itrv06"><svg fill="none" viewBox="0 0 24 24" size="18"
                                        class="noti css-9w5ue6" height="18" width="18"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M5.99398 13V9C5.99398 5.686 8.68298 3 12 3C12.7883 2.99961 13.569 3.15449 14.2975 3.4558C15.0259 3.75712 15.6879 4.19897 16.2456 4.75612C16.8033 5.31327 17.2458 5.97481 17.5479 6.70298C17.8499 7.43115 18.0056 8.21168 18.006 9V13C18.006 13.986 18.454 14.919 19.223 15.537L19.532 15.785C20.449 16.521 19.928 18 18.752 18H5.24798C4.07198 18 3.55098 16.521 4.46798 15.785L4.77698 15.537C5.15686 15.2322 5.46344 14.846 5.67408 14.4069C5.88472 13.9678 5.99404 13.487 5.99398 13V13Z"
                                            stroke="#82869E" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path d="M10.5 21H13.5" stroke="#82869E" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                    <div class="css-rac23i">Đổi mật khẩu</div>
                                </div>
                            </a>
                            <li class="css-1jfhcvk"></li>
                    </ul>
                </div>
            </div>
            <div class="css-hveu7a">
                <div class="css-m52bne">
                    <div class="css-1knbux5">
                        <button class="css-1fxhdbo" onclick="window.history.back(-1);">
                            <span size="25" class="css-v89nyz"></span>
                        </button>
                        <h5 class="css-r44k6v">ĐƠN HÀNG:
                            <?php if (isset($orderID))
                                echo $orderID ?>
                            </h5>
                        </div>
                        <div class="css-0"></div>
                    </div>
                    <div direction="row" class="css-1o0q5vl">
                        <div class="css-qry4qr">
                            <div class="css-5gz4q4">Thông tin người nhận</div>
                            <div class="css-1jdmuma">
                                <div><strong>Người nhận: </strong><span>
                                    <?php echo $orderID_name ?>
                                </span></div>
                            <div><strong>Hình thức nhận hàng: </strong><span>Phí giao tiêu chuẩn</span></div>
                            <div><strong>Địa chỉ: </strong><span>
                                    <?php echo $orderID_address ?>
                                </span></div>
                            <div><strong>Điện thoại: </strong><span>
                                    <?php echo $orderID_sdt ?>
                                </span></div>
                        </div>
                    </div>
                    <div class="css-qry4qr">
                        <div class="css-5gz4q4">Thông tin đơn hàng</div>
                        <div class="css-1jdmuma"><strong>Thời gian tạo: </strong><span>
                                <?php echo $formattedDate ?>
                            </span></div>
                    </div>
                </div>
                <div class="css-118e7yd">
                    <div class="card-body css-0">
                        <div font-size="16" font-weight="500" class="css-1x7er7i">Sản phẩm</div>
                        <div>
                            <?php
                            $sql_order_detail = "SELECT * FROM `order_detail` WHERE order_id = '$orderID'";
                            $result_order_detail = $conn->query($sql_order_detail);
                            while ($row_order_detail = mysqli_fetch_assoc($result_order_detail)) {
                                $product_id = $row_order_detail["product_id"];

                                $sql_product = "SELECT * FROM `mathang` 
                                join anhmh on mathang.IDAnhMH = anhmh.IDAnhMH 
                                WHERE mathang.MaMH = '$product_id'";
                                $result_product = $conn->query($sql_product);

                                $row_product = mysqli_fetch_assoc($result_product);
                                $product_name = $row_product["TenMH"];
                                $product_image = $row_product["DLAnh"];
                                echo '<div>
                                <div data-track-content="true" class="css-8c46wm">
                                    <div class="css-x3zji3">
                                        <div class=" css-1ttl0c">
                                            <div>
                                                <div class="product-image" style="width: 80px; height: 80px;">
                                                    <div class="css-k67fg">
                                                        <picture>
                                                            <source
                                                                srcset="'.$product_image.'"
                                                                type="image/webp">
                                                            <source
                                                                srcset="'.$product_image.'"
                                                                type="image/png"><img class="lazyload css-hv3z8f" alt=""
                                                                src="'.$product_image.'"
                                                                loading="lazy" decoding="async">
                                                        </picture>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="css-w2pp9x"><a target="_blank"
                                            href="?page=detail&maMH='.$row_product['MaMH'].'"
                                            class="css-587jha">
                                            <div font-size="14" font-weight="400" class="css-1h7pc8k">' . $product_name . '</div>
                                        </a>
                                        <div class="css-1ik66w8">
                                            <div>
                                                <div class="css-nie9dj">
                                                    <div color="#82869E" font-size="13" class="css-lgc00o">Cung cấp
                                                        bởi&nbsp;</div>
                                                    <div color="#1782E6" font-size="13" class="css-zs3dxf">Phong Vũ
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="css-uaistt">
                                        <div class="css-889chh">
                                            <div class="css-sht0qh">
                                                <div class="css-f8oshx">
                                                    <div class="css-1sg2lsz"><span
                                                            class="product-price__price css-1osruls">' . number_format($row_order_detail['price'], 0, '.', '.') . '<span
                                                                class="css-1ul6wk9">đ</span></span></div>
                                                </div>
                                            </div>
                                            <div font-size="12" color="#848788" class="css-1vuge1h">X' . $row_order_detail['quantity'] . '</div>
                                        </div>
                                    </div>
                                </div>
                            </div>';
                            }
                            ?>


                        </div>
                    </div>
                </div>
                <div class="css-14xqo9c">
                    <div class="card-body css-0">
                        <div class="css-1ug7q4c" direction="column">
                            <div class="css-11mtdw9">
                                <div direction="row" class="css-4scx67">
                                    <div color="#848788" direction="row" class="css-1xs08uy">Tổng tạm tính</div>
                                    <div class="css-rs5cam"><span class="css-htm2b9">
                                            <?php echo number_format($row_orderID['total'], 0, '.', '.') ?> <span
                                                class="css-1angbw">đ</span>
                                        </span></div>
                                </div>
                                <div direction="row" class="css-4scx67">
                                    <div color="#848788" direction="row" class="css-1xs08uy">Phí vận chuyển</div>
                                    <div class="css-rs5cam"><span class="css-htm2b9">0 <span
                                                class="css-1angbw">đ</span></span></div>
                                </div>
                                <div direction="row" class="css-4scx67">
                                    <div color="#848788" direction="row" class="css-1xs08uy">
                                        <div direction="row" class="css-9nowlb">Giảm giá &nbsp;</div>
                                    </div>
                                    <div class="css-rs5cam"><span class="css-htm2b9">0 <span
                                                class="css-1angbw">đ</span></span></div>
                                </div>
                                <div direction="row" class="css-4scx67">
                                    <div color="#848788" direction="row" class="css-1xs08uy">Thành tiền</div>
                                    <div class="css-aafp0n"><span class="css-htm2b9">
                                            <?php echo number_format($row_orderID['total'], 0, '.', '.') ?> <span
                                                class="css-1ul6wk9">đ</span>
                                        </span></div>
                                </div>
                            </div>
                            <div class="css-b2d3vz">(Đã bao gồm VAT)</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>