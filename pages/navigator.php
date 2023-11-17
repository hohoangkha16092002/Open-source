<?php
if (isset($_GET['timKiem'])) {
    $search = $_GET['search-input'];
}

if (isset($_SESSION['loggedin_customer'])) {
    $sql = "SELECT * FROM khachhang WHERE MaKH = '" . $_SESSION['MaKH'] . "'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $info = mysqli_fetch_assoc($result);
        if (isset($_SESSION['cart'][$info['MaKH']])) {
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
        }
    }
}

if (isset($_SESSION['loggedin_employee'])) {
    $sql = "SELECT * FROM nhanvien WHERE MaNV = '" . $_SESSION['MaNV'] . "'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $info = mysqli_fetch_assoc($result);
    }
}

if (isset($_GET['search'])) {
    $search_input = $_GET["search-input"];
    header("Location: ?page=search&search-input=$search_input");
}

?>

<div id="mainNavigationBar" class="nav-main">
    <div class="teko-row teko-row-center nav-navbar">
        <div class="teko-row teko-row-no-wrap teko-row-middle nav-subnav"
            style="margin-left: -8px; margin-right: -8px; height: 112px; min-width: 0px; width: 75rem;">
            <div class="teko-col nav-product-portfolio" style="padding-left: 8px; padding-right: 8px; flex: 0 0 auto;">
                <div data-content-region-name="headerBar" data-track-content="true" data-content-name="logoPhongVu"
                    data-content-target="homepage" class="nav-product-portfolio-main">
                    <a target="_self" class="nav-product-portfolio-icon" href="?page=home">
                        <div height="35px" width="35px" class="nav-product-portfolio-icon-main"><img
                                src="https://shopfront-cdn.tekoapis.com/static/phongvu/logo.svg" loading="lazy"
                                decoding="async" alt="phongvu" style="width: 100%; height: 35px;"></div>
                    </a>
                    <div style="width: 100%;">
                        <div class="" tabindex="0" style="width: 100%;">
                            <div class="nav-product-portfolio-2">
                                <i class="fa-solid fa-grip-lines" href="/categories"></i>
                                <a id="nav--product-portfolio" class="nav-product-portfolio-text">Danh mục sản phẩm</a>
                            </div>
                        </div>
                        <div class="nav-product-subnav" id="nav--product-portfolio-popup"
                            style="position: absolute; inset: 0px auto auto 0px; transform: translate3d(65px, 37px, 0px);"
                            data-popper-reference-hidden="false" data-popper-escaped="false"
                            data-popper-placement="bottom-start">
                            <div origin="center top" class="nav-product-subnav-top">
                                <div class="" style="width: 204px; border-radius: 0.5rem;">
                                    <div class="" style=" position: relative;">
                                        <div class="nav-product-subnav-main" width="12.375rem" height="28.5rem">
                                            <a data-testid="TekoLink" target="_self" class="nav-products"
                                                href="/c/laptop">
                                                <div class="css-73wobg">
                                                    <div class="css-b1gs45">
                                                        <div height="100%" width="100%" class="css-b6tybp"><img
                                                                src="https://lh3.googleusercontent.com/lFZZtBMUqkbl9qKKUe3DSmHqpb62UjWrOkxqcJ6lN3yM83Wg2Irp-ZlvkUwGO6TMcsscLELMZa_lN9jo8tKteWsCzmUii7po=rw"
                                                                loading="lazy" decoding="async"
                                                                style="width: 100%; height: 100%;"></div>
                                                    </div>
                                                    <div type="caption" class="css-13yxnyc" style="flex: 1 1 0%;">
                                                        Laptop</div>
                                                </div>
                                            </a>
                                            <?php

                                            // ======== Begin In danh sách loại mặt hàng =========
                                            $sql_products_type = "SELECT * FROM dmloaimathang";
                                            $result_products_type = mysqli_query($conn, $sql_products_type);

                                            while ($row_products_type = mysqli_fetch_array($result_products_type)) {
                                                $MaLMH = $row_products_type["MaLMH"];
                                                $TenLoai = $row_products_type["TenLoai"];
                                                echo '<a class="home-page--main-child-left-main-child"
                                                    href="?page=search&search-input=' . $TenLoai . '">
                                                    <div class="home-page--category-child">
                                                        <div class="css-w22-h22">
                                                            <div height="100%" width="100%" class="home-page--category-child-icon">
                                                                <img src="https://lh3.googleusercontent.com/lFZZtBMUqkbl9qKKUe3DSmHqpb62UjWrOkxqcJ6lN3yM83Wg2Irp-ZlvkUwGO6TMcsscLELMZa_lN9jo8tKteWsCzmUii7po=rw"
                                                                    loading="lazy" decoding="async" style="width: 100%; height: 100%;">
                                                            </div>
                                                        </div>
                                                        <div type="caption" class="home-page--category-child-goods" style="flex: 1 1 0%;">
                                                            ' . $TenLoai . '</div>
                                                    </div>
                                                </a>';
                                            }
                                            // ======== End In danh sách loại mặt hàng =========
                                            // ======== Begin In danh sách hãng sản xuất =========
                                            $sql_products_brands = "SELECT * FROM dmhangsanxuat";
                                            $result_products_brands = mysqli_query($conn, $sql_products_brands);

                                            while ($row_products_brands = mysqli_fetch_array($result_products_brands)) {
                                                $MaHSX = $row_products_brands["MaHSX"];
                                                $TenHSX = $row_products_brands["TenHSX"];
                                                echo '<a class="home-page--main-child-left-main-child"
                                                    href="?page=search&search-input=' . $TenHSX . '">
                                                    <div class="home-page--category-child">
                                                        <div class="css-w22-h22">
                                                            <div height="100%" width="100%" class="home-page--category-child-icon">
                                                                <img src="https://lh3.googleusercontent.com/lFZZtBMUqkbl9qKKUe3DSmHqpb62UjWrOkxqcJ6lN3yM83Wg2Irp-ZlvkUwGO6TMcsscLELMZa_lN9jo8tKteWsCzmUii7po=rw"
                                                                    loading="lazy" decoding="async" style="width: 100%; height: 100%;">
                                                            </div>
                                                        </div>
                                                        <div type="caption" class="home-page--category-child-goods" style="flex: 1 1 0%;">
                                                            ' . $TenHSX . '</div>
                                                    </div>
                                                </a>';
                                            }
                                            // ======== End In danh sách hãng sản xuất =========
                                            
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="position: absolute; left: 0px; transform: translate3d(90px, 0px, 0px);">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="teko-col nav-common-form nav-search--has-popup"
                style="padding-left: 8px; padding-right: 8px; padding-top: 1.75rem; min-width: 0px; flex: 1 1 auto;">
                <div class="nav-search">
                    <form action="?page=search" method="get">
                        <div class="nav-search-main">
                            <div class="nav-search-input">
                                <input class="search-input nav-search-input-text" placeholder="Nhập từ khoá cần tìm"
                                    name="search-input" value="<?php if (isset($search_input))
                                        echo $search_input ?>">
                                </div>
                                <div class="nav-search-icon-main">
                                    <button name="search" class="search-icon nav-search-icon">
                                        <i class="fa-solid fa-magnifying-glass clickable"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                        <div class="nav-search-popup" id="nav-search-popup">
                            <div class="nav-search-popup-delete">
                                <div font-weight="500" color="#82869E" class="nav-search-hictory">Lịch sử tìm kiếm</div>
                                <div data-content-region-name="recentSearch" data-track-content="true"
                                    data-content-name="clearHistorySearch" data-content-target="searchProduct"
                                    class="css-clickable">Xóa lịch sử</div>
                            </div>
                            <div data-content-region-name="recentSearch" data-track-content="true"
                                data-content-name="laptop" data-content-target="searchProductResult"
                                data-content-payload="{&quot;screenName&quot;:&quot;searchProduct&quot;,&quot;index&quot;:0}"
                                class="nav-search-hictory-name"><span size="20" class="css-c1lbeq"></span>
                                <div style="margin: 0px 0.6rem;">
                                    <div class="css-1488rru" id="search-suggestions">

                                    </div>
                                </div>
                            </div>
                            <div data-content-region-name="recentSearch" data-track-content="true"
                                data-content-name="iphone 15" data-content-target="searchProductResult"
                                data-content-payload="{&quot;screenName&quot;:&quot;searchProduct&quot;,&quot;index&quot;:1}"
                                class="nav-search-hictory-name"><span size="20" class="css-c1lbeq"></span>
                                <div style="margin: 0px 0.6rem;">
                                    <div class="css-1488rru">iphone 15</div>
                                </div>
                            </div>
                            <div data-content-region-name="recentSearch" data-track-content="true" data-content-name="lap"
                                data-content-target="searchProductResult"
                                data-content-payload="{&quot;screenName&quot;:&quot;searchProduct&quot;,&quot;index&quot;:2}"
                                class="nav-search-hictory-name"><span size="20" class="css-c1lbeq"></span>
                                <div style="margin: 0px 0.6rem;">
                                    <div class="css-1488rru">lap</div>
                                </div>
                            </div>
                            <div data-content-region-name="recentSearch" data-track-content="true" data-content-name="bàn"
                                data-content-target="searchProductResult"
                                data-content-payload="{&quot;screenName&quot;:&quot;searchProduct&quot;,&quot;index&quot;:3}"
                                class="nav-search-hictory-name"><span size="20" class="css-c1lbeq"></span>
                                <div style="margin: 0px 0.6rem;">
                                    <div class="css-1488rru">bàn</div>
                                </div>
                            </div>
                            <div class="css-nloqo5">
                                <div class="css-1f38okd">
                                    <div font-weight="500" color="#82869E" class="nav-search-hictory">Từ khóa phổ biến
                                    </div>
                                </div>
                                <div class="css-1xhsr74">
                                    <div data-content-region-name="popularKeyword" data-track-content="true"
                                        data-content-name="ma" data-content-target="searchProductResult"
                                        data-content-payload="{&quot;screenName&quot;:&quot;searchProduct&quot;,&quot;index&quot;:0}"
                                        class="css-crf5cq">ma</div>
                                    <div data-content-region-name="popularKeyword" data-track-content="true"
                                        data-content-name="hdmi" data-content-target="searchProductResult"
                                        data-content-payload="{&quot;screenName&quot;:&quot;searchProduct&quot;,&quot;index&quot;:1}"
                                        class="css-crf5cq">hdmi</div>
                                    <div data-content-region-name="popularKeyword" data-track-content="true"
                                        data-content-name="iphone 15" data-content-target="searchProductResult"
                                        data-content-payload="{&quot;screenName&quot;:&quot;searchProduct&quot;,&quot;index&quot;:2}"
                                        class="css-crf5cq">iphone 15</div>
                                    <div data-content-region-name="popularKeyword" data-track-content="true"
                                        data-content-name="bàn" data-content-target="searchProductResult"
                                        data-content-payload="{&quot;screenName&quot;:&quot;searchProduct&quot;,&quot;index&quot;:3}"
                                        class="css-crf5cq">bàn</div>
                                    <div data-content-region-name="popularKeyword" data-track-content="true"
                                        data-content-name="máy" data-content-target="searchProductResult"
                                        data-content-payload="{&quot;screenName&quot;:&quot;searchProduct&quot;,&quot;index&quot;:4}"
                                        class="css-crf5cq">máy</div>
                                    <div data-content-region-name="popularKeyword" data-track-content="true"
                                        data-content-name="ram" data-content-target="searchProductResult"
                                        data-content-payload="{&quot;screenName&quot;:&quot;searchProduct&quot;,&quot;index&quot;:5}"
                                        class="css-crf5cq">ram</div>
                                    <div data-content-region-name="popularKeyword" data-track-content="true"
                                        data-content-name="dell" data-content-target="searchProductResult"
                                        data-content-payload="{&quot;screenName&quot;:&quot;searchProduct&quot;,&quot;index&quot;:6}"
                                        class="css-crf5cq">dell</div>
                                    <div data-content-region-name="popularKeyword" data-track-content="true"
                                        data-content-name="ssd" data-content-target="searchProductResult"
                                        data-content-payload="{&quot;screenName&quot;:&quot;searchProduct&quot;,&quot;index&quot;:7}"
                                        class="css-crf5cq">ssd</div>
                                    <div data-content-region-name="popularKeyword" data-track-content="true"
                                        data-content-name="bàn phím không dây" data-content-target="searchProductResult"
                                        data-content-payload="{&quot;screenName&quot;:&quot;searchProduct&quot;,&quot;index&quot;:8}"
                                        class="css-crf5cq">bàn phím không dây</div>
                                    <div data-content-region-name="popularKeyword" data-track-content="true"
                                        data-content-name="laptop" data-content-target="searchProductResult"
                                        data-content-payload="{&quot;screenName&quot;:&quot;searchProduct&quot;,&quot;index&quot;:9}"
                                        class="css-crf5cq">laptop</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="nav-search-propose"><a data-testid="TekoLink" class="nav-search-propose-text"
                            href="/acer-nitro-16-phoenix-an16-41-ryzen-5-rtx-4050--s230402670">Acer Nitro Phoenix
                        </a>&nbsp;&nbsp;&nbsp;
                        <a data-testid="TekoLink" class="nav-search-propose-text" href="/c/laptop-acer-nitro-5">Acer
                            Nitro 5
                        </a>&nbsp;&nbsp;&nbsp;
                        <a data-testid="TekoLink" class="nav-search-propose-text"
                            href="/laptop-asus-vivobook-go-15-e1504fa-nj454w-amd-ryzen-5-7520u--s230500521">Asus
                            Vivobook Go
                        </a>&nbsp;&nbsp;&nbsp;
                        <a data-testid="TekoLink" class="nav-search-propose-text" href="/c/laptop-asus-rog-strix">Asus
                            Rog Strix
                        </a>&nbsp;&nbsp;&nbsp;
                        <a data-testid="TekoLink" class="nav-search-propose-text" href="/c/laptop-hp">Laptop HP
                        </a>&nbsp;&nbsp;&nbsp;
                        <a data-testid="TekoLink" class="nav-search-propose-text" href="/c/laptop">Laptop
                        </a>&nbsp;&nbsp;&nbsp;
                        <a data-testid="TekoLink" class="nav-search-propose-text" href="/c/man-hinh-may-tinh">Màn hình
                            máy tính
                        </a>&nbsp;&nbsp;&nbsp;
                        <a data-testid="TekoLink" class="nav-search-propose-text" href="/c/may-tinh-de-ban">PC
                        </a>&nbsp;&nbsp;&nbsp;<a data-testid="TekoLink" class="nav-search-propose-text"
                            href="/c/chuot-gaming">Chuột gaming
                        </a>
                    </p>
                </div>
                <?php
                                    if (isset($_SESSION['loggedin_customer']) && $_SESSION['loggedin_customer'] === true) {
                                        echo '
                                                <div class="teko-col nav-common-form nav-ip--has-popup"
                                                style="padding-left: 8px; padding-right: 8px; flex: 0 0 auto;">
                                                <div>
                                                    <div>
                                                        <div class="button nav-ip-main" data-content-region-name="headerBar" data-track-content="true"
                                                            data-content-name="profileIcon">
                                                            <div class="nav-ip-form-avt">
                                                                <div height="100%" width="100%" class="nav-ip-avt">
                                                                    <img src="./img/icon-login.jpg"
                                                                        loading="lazy" hover="" decoding="async" alt="" fetchpriority="low"
                                                                        aria-label="Current User Avatar"
                                                                        style="width: 100%; height: 100%; object-fit: inherit; position: absolute; top: 0px; left: 0px;">
                                                                </div>
                                                            </div>
                                                            <div class="ml-12 text-left">
                                                                <div type="body" color="textSecondary" class="nav-common-text">Xin chào,</div>
                                                                <div type="body" color="textSecondary" class="nav-ip-name">' . $info['HoTenKH'] . '</div>
                                                            </div>
                                                        </div>
                                                    </div><span class="nav-ip-popup"
                                                        style="position: absolute; inset: 40px auto auto 920px; z-index: 100; transform: translate3d(-56px, 49px, 0px);"
                                                        data-popper-reference-hidden="false" data-popper-escaped="false" data-popper-placement="bottom">
                                                        <div class="nav-ip-popup-main">
                                                            <div class="nav-ip-popup-top">
                                                                <div class="nav-ip-popup-avt"><img
                                                                        src="./img/icon-login.jpg"
                                                                        alt="Avatar" style="width: 100%;">
                                                                </div>
                                                                <div class="nav-ip-popup-info">
                                                                <h3 class="name">' . $info['HoTenKH'] . '</h3>
                                                                    <h5 class="extra">' . $info['Email'] . '</h5>
                                                                </div>
                                                            </div><a target="_self" class="nav-ip-popup-child" href="?page=personal-information">
                                                                <div data-content-region-name="headerBar" data-track-content="true"
                                                                    data-content-name="viewAccountInfo" class="nav-ip-popup-child-main">
                                                                    <div class="icon">
                                                                        <svg fill="none" viewBox="0 0 24 24" size="18" class="css-9w5ue6" height="18"
                                                                            width="18" xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                d="M12 3.5C7.30558 3.5 3.5 7.30558 3.5 12C3.5 13.9895 4.18351 15.8194 5.32851 17.2676C5.58317 16.4856 6.12054 15.8107 6.85621 15.3914L8.76361 14.2968C8.1448 13.5615 7.772 12.6122 7.772 11.5759V9.83689C7.772 7.50167 9.66479 5.60889 12 5.60889C14.3349 5.60889 16.229 7.50139 16.229 9.83689V11.5759C16.229 12.6132 15.8554 13.5631 15.2354 14.2986L17.1437 15.3908L17.1444 15.3912C17.8805 15.8106 18.4173 16.4856 18.6716 17.2674C19.8165 15.8192 20.5 13.9894 20.5 12C20.5 7.30558 16.6944 3.5 12 3.5ZM10.0133 15.3091C10.6056 15.6249 11.2819 15.8039 12 15.8039C12.7169 15.8039 13.3922 15.6255 13.984 15.3106L16.3999 16.6934L16.4013 16.6942C16.9789 17.0231 17.3365 17.6396 17.3365 18.3075V18.6164C16.8532 19.0067 16.3263 19.3451 15.7642 19.6232C14.9127 19.9671 13.6909 20.2625 12.0005 20.2625C10.3078 20.2625 9.08478 19.9663 8.23289 19.6217C7.67189 19.3439 7.14595 19.006 6.6635 18.6164V18.3075C6.6635 17.6402 7.0216 17.0234 7.59965 16.6942L7.6018 16.693L10.0133 15.3091ZM13.4184 13.9069C14.2043 13.428 14.729 12.5631 14.729 11.5759V9.83689C14.729 8.33038 13.5071 7.10889 12 7.10889C10.4932 7.10889 9.272 8.3301 9.272 9.83689V11.5759C9.272 12.5628 9.79594 13.4273 10.5809 13.9062C10.6523 13.9484 10.7542 14.0035 10.8812 14.0593C11.1657 14.1842 11.5558 14.3035 12.0005 14.3035C12.445 14.3035 12.8341 14.1846 13.1176 14.0602C13.2451 14.0042 13.3472 13.9489 13.4184 13.9069ZM2 12C2 14.9959 3.31741 17.684 5.40452 19.5168L5.42841 19.5438C5.49553 19.6189 5.59114 19.7182 5.71841 19.8332C5.97322 20.0636 6.35385 20.3562 6.88471 20.6435C7.10268 20.7615 7.34486 20.878 7.6128 20.9888C8.93735 21.6364 10.4262 22 12 22C13.5724 22 15.06 21.6371 16.3837 20.9905C16.6532 20.8792 16.8968 20.7621 17.1159 20.6435C17.6466 20.3561 18.0271 20.0635 18.2819 19.8331C18.4091 19.7181 18.5047 19.6187 18.5718 19.5437L18.5956 19.5167C20.6826 17.6839 22 14.9958 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12Z"
                                                                                fill="#82869E"></path>
                                                                        </svg>
                                                                    </div>
                                                                    <div type="body" class="popup-text">Thông tin tài khoản</div>
                                                                </div>
                                                            </a><a target="_self" class="nav-ip-popup-child" href="?page=order-management">
                                                                <div data-content-region-name="headerBar" data-track-content="true"
                                                                    data-content-name="viewOrder" class="nav-ip-popup-child-main">
                                                                    <div class="icon"><svg fill="none" viewBox="0 0 24 24" size="18" class="css-9w5ue6"
                                                                            height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                d="M7.5328 3.5625C7.5328 3.14829 7.86859 2.8125 8.2828 2.8125H15.2308C15.645 2.8125 15.9808 3.14829 15.9808 3.5625V3.80501H19.201C19.6152 3.80501 19.951 4.14079 19.951 4.55501V20.4361C19.951 20.8503 19.6152 21.1861 19.201 21.1861H4.3125C3.89829 21.1861 3.5625 20.8503 3.5625 20.4361V4.55501C3.5625 4.14079 3.89829 3.80501 4.3125 3.80501H7.5328V3.5625ZM15.9808 7.53276V5.30501H18.451V19.6861H5.0625V5.30501H7.5328V7.53276C7.5328 7.94698 7.86859 8.28276 8.2828 8.28276H10.0198C10.434 8.28276 10.7698 7.94698 10.7698 7.53276C10.7698 7.30843 11.0628 6.87111 11.7568 6.87111C12.4508 6.87111 12.7438 7.30843 12.7438 7.53276C12.7438 7.94698 13.0796 8.28276 13.4938 8.28276H15.2308C15.645 8.28276 15.9808 7.94698 15.9808 7.53276ZM9.0328 4.3125V6.78276H9.41784C9.7871 5.89836 10.7889 5.37111 11.7568 5.37111C12.7247 5.37111 13.7265 5.89836 14.0957 6.78276H14.4808V4.3125H9.0328ZM15.4476 12.0333C15.7405 11.7404 15.7405 11.2655 15.4476 10.9726C15.1547 10.6797 14.6798 10.6797 14.3869 10.9726L11.0384 14.3211L9.80564 13.0883C9.51275 12.7954 9.03787 12.7954 8.74498 13.0883C8.45209 13.3812 8.45209 13.8561 8.74498 14.149L10.5081 15.9121C10.6487 16.0527 10.8395 16.1318 11.0384 16.1318C11.2373 16.1318 11.4281 16.0527 11.5688 15.9121L15.4476 12.0333Z"
                                                                                fill="#82869E"></path>
                                                                        </svg></div>
                                                                    <div type="body" class="popup-text">Quản lý đơn hàng</div>
                                                                </div>
                                                            </a><a target="_self" class="nav-ip-popup-child" href="?page=address">
                                                                <div data-content-region-name="headerBar" data-track-content="true"
                                                                    data-content-name="viewAddressList" class="nav-ip-popup-child-main">
                                                                    <div class="icon"><svg fill="none" viewBox="0 0 24 24" size="18" class="css-9w5ue6"
                                                                            height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                d="M11.6957 2.75C9.09299 2.75 6.35871 4.72035 6.35871 8.08696C6.35871 8.84669 6.67432 9.80604 7.22598 10.8727C7.76947 11.9236 8.50271 13.0046 9.24942 13.9876C9.99415 14.968 10.7407 15.8358 11.302 16.4592C11.4469 16.6202 11.5792 16.7646 11.6957 16.8901C11.8121 16.7646 11.9444 16.6202 12.0894 16.4592C12.6506 15.8358 13.3972 14.968 14.1419 13.9876C14.8886 13.0046 15.6219 11.9236 16.1654 10.8727C16.717 9.80604 17.0326 8.84669 17.0326 8.08696C17.0326 4.72035 14.2983 2.75 11.6957 2.75ZM11.6957 17.9783C11.1633 18.5065 11.1632 18.5064 11.163 18.5063L11.1627 18.5059L11.1615 18.5048L11.1576 18.5008L11.1432 18.4862L11.0896 18.4313C11.0432 18.3835 10.9758 18.3138 10.8905 18.2241C10.72 18.0447 10.4776 17.7854 10.1872 17.4628C9.60714 16.8185 8.83197 15.9178 8.05496 14.895C7.27993 13.8747 6.49143 12.7177 5.89362 11.5618C5.30398 10.4217 4.85871 9.20548 4.85871 8.08696C4.85871 3.74922 8.41486 1.25 11.6957 1.25C14.9765 1.25 18.5326 3.74922 18.5326 8.08696C18.5326 9.20548 18.0874 10.4217 17.4977 11.5618C16.8999 12.7177 16.1114 13.8747 15.3364 14.895C14.5594 15.9178 13.7842 16.8185 13.2041 17.4628C12.9137 17.7854 12.6713 18.0447 12.5008 18.2241C12.4155 18.3138 12.3482 18.3835 12.3017 18.4313L12.2481 18.4862L12.2338 18.5008L12.2298 18.5048L12.2287 18.5059L12.2283 18.5063C12.2282 18.5064 12.2281 18.5065 11.6957 17.9783ZM11.6957 17.9783L12.2281 18.5065C12.0873 18.6484 11.8956 18.7283 11.6957 18.7283C11.4957 18.7283 11.3041 18.6484 11.1633 18.5065L11.6957 17.9783ZM17.4472 15.2423C17.8177 15.057 18.2682 15.2072 18.4534 15.5777L20.3385 19.3479C20.9203 20.5114 20.0742 21.8805 18.7733 21.8805H4.61804C3.31712 21.8805 2.47101 20.5114 3.05279 19.3479L4.93788 15.5777C5.12313 15.2072 5.57363 15.057 5.94411 15.2423C6.3146 15.4275 6.46477 15.878 6.27952 16.2485L4.39443 20.0187C4.31132 20.1849 4.4322 20.3805 4.61804 20.3805H18.7733C18.9591 20.3805 19.08 20.1849 18.9969 20.0187L17.1118 16.2485C16.9266 15.878 17.0767 15.4275 17.4472 15.2423ZM10.7065 8.08679C10.7065 7.5405 11.1494 7.09766 11.6957 7.09766C12.2419 7.09766 12.6848 7.54051 12.6848 8.08679C12.6848 8.63307 12.2419 9.07592 11.6957 9.07592C11.1494 9.07592 10.7065 8.63307 10.7065 8.08679ZM11.6957 5.59766C10.321 5.59766 9.20654 6.71208 9.20654 8.08679C9.20654 9.4615 10.321 10.5759 11.6957 10.5759C13.0704 10.5759 14.1848 9.4615 14.1848 8.08679C14.1848 6.71208 13.0704 5.59766 11.6957 5.59766Z"
                                                                                fill="#82869E"></path>
                                                                        </svg></div>
                                                                    <div type="body" class="popup-text">Sổ địa chỉ</div>
                                                                </div>
                                                            </a><a target="_self" class="nav-ip-popup-child" href="?page=change-password">
                                                                <div data-content-region-name="headerBar" data-track-content="true"
                                                                    data-content-name="viewNotification" class="nav-ip-popup-child-main">
                                                                    <div class="icon">
                                                                        <svg fill="none" viewBox="0 0 24 24" size="18" class="noti css-9w5ue6"
                                                                            height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M5.99398 13V9C5.99398 5.686 8.68298 3 12 3C12.7883 2.99961 13.569 3.15449 14.2975 3.4558C15.0259 3.75712 15.6879 4.19897 16.2456 4.75612C16.8033 5.31327 17.2458 5.97481 17.5479 6.70298C17.8499 7.43115 18.0056 8.21168 18.006 9V13C18.006 13.986 18.454 14.919 19.223 15.537L19.532 15.785C20.449 16.521 19.928 18 18.752 18H5.24798C4.07198 18 3.55098 16.521 4.46798 15.785L4.77698 15.537C5.15686 15.2322 5.46344 14.846 5.67408 14.4069C5.88472 13.9678 5.99404 13.487 5.99398 13V13Z"
                                                                                stroke="#82869E" stroke-width="1.5" stroke-linecap="round"
                                                                                stroke-linejoin="round"></path>
                                                                            <path d="M10.5 21H13.5" stroke="#82869E" stroke-width="1.5"
                                                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                                                        </svg>
                                                                    </div>
                                                                    <div type="body" class="popup-text">Đổi mật khẩu</div>
                                                                </div>
                                                            </a>
                                                            <div data-content-region-name="headerBar" data-track-content="true"
                                                                data-content-name="logOut" class="nav-ip-popup-logout-button">
                                                                <a href="?page=confirm-logout">
                                                                <button height="2.5rem" color="white" class="logout-button" type="button">
                                                                    <div type="body" class="button-text logout-button-text" color="white">Đăng xuất
                                                                    </div>
                                                                    <span style="margin-left: 0px;">
                                                                        <div class="nav-ip-popup-logout"> </div>
                                                                    </span>
                                                                </button></a>
                                                            </div>
                                                        </div>
                                                    </span>
                                                </div>
                                            </div>';
                                    } elseif (isset($_SESSION['loggedin_employee']) && $_SESSION['loggedin_employee'] === true) {
                                        echo '
                                                <div class="teko-col nav-common-form nav-ip--has-popup"
                                                style="padding-left: 8px; padding-right: 8px; flex: 0 0 auto;">
                                                <div>
                                                    <div>
                                                        <div class="button nav-ip-main" data-content-region-name="headerBar" data-track-content="true"
                                                            data-content-name="profileIcon">
                                                            <div class="nav-ip-form-avt">
                                                                <div height="100%" width="100%" class="nav-ip-avt">
                                                                    <img src="./img/icon-login.jpg"
                                                                        loading="lazy" hover="" decoding="async" alt="" fetchpriority="low"
                                                                        aria-label="Current User Avatar"
                                                                        style="width: 100%; height: 100%; object-fit: inherit; position: absolute; top: 0px; left: 0px;">
                                                                </div>
                                                            </div>
                                                            <div class="ml-12 text-left">
                                                                <div type="body" color="textSecondary" class="nav-common-text">Xin chào,</div>
                                                                <div type="body" color="textSecondary" class="nav-ip-name">' . $info['HoTenNV'] . '</div>
                                                            </div>
                                                        </div>
                                                    </div><span class="nav-ip-popup"
                                                        style="position: absolute; inset: 40px auto auto 920px; z-index: 100; transform: translate3d(-56px, 49px, 0px);"
                                                        data-popper-reference-hidden="false" data-popper-escaped="false" data-popper-placement="bottom">
                                                        <div class="nav-ip-popup-main">
                                                            <div class="nav-ip-popup-top">
                                                                <div class="nav-ip-popup-avt"><img
                                                                        src="./img/icon-login.jpg"
                                                                        alt="Avatar" style="width: 100%;">
                                                                </div>
                                                                <div class="nav-ip-popup-info">
                                                                <h3 class="name">' . $info['HoTenNV'] . '</h3>
                                                                    <h5 class="extra">' . $info['Email'] . '</h5>
                                                                </div>
                                                            </div><a target="_self" class="nav-ip-popup-child" href="?page=personal-information">
                                                                <div data-content-region-name="headerBar" data-track-content="true"
                                                                    data-content-name="viewAccountInfo" class="nav-ip-popup-child-main">
                                                                    <div class="icon">
                                                                        <svg fill="none" viewBox="0 0 24 24" size="18" class="css-9w5ue6" height="18"
                                                                            width="18" xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                d="M12 3.5C7.30558 3.5 3.5 7.30558 3.5 12C3.5 13.9895 4.18351 15.8194 5.32851 17.2676C5.58317 16.4856 6.12054 15.8107 6.85621 15.3914L8.76361 14.2968C8.1448 13.5615 7.772 12.6122 7.772 11.5759V9.83689C7.772 7.50167 9.66479 5.60889 12 5.60889C14.3349 5.60889 16.229 7.50139 16.229 9.83689V11.5759C16.229 12.6132 15.8554 13.5631 15.2354 14.2986L17.1437 15.3908L17.1444 15.3912C17.8805 15.8106 18.4173 16.4856 18.6716 17.2674C19.8165 15.8192 20.5 13.9894 20.5 12C20.5 7.30558 16.6944 3.5 12 3.5ZM10.0133 15.3091C10.6056 15.6249 11.2819 15.8039 12 15.8039C12.7169 15.8039 13.3922 15.6255 13.984 15.3106L16.3999 16.6934L16.4013 16.6942C16.9789 17.0231 17.3365 17.6396 17.3365 18.3075V18.6164C16.8532 19.0067 16.3263 19.3451 15.7642 19.6232C14.9127 19.9671 13.6909 20.2625 12.0005 20.2625C10.3078 20.2625 9.08478 19.9663 8.23289 19.6217C7.67189 19.3439 7.14595 19.006 6.6635 18.6164V18.3075C6.6635 17.6402 7.0216 17.0234 7.59965 16.6942L7.6018 16.693L10.0133 15.3091ZM13.4184 13.9069C14.2043 13.428 14.729 12.5631 14.729 11.5759V9.83689C14.729 8.33038 13.5071 7.10889 12 7.10889C10.4932 7.10889 9.272 8.3301 9.272 9.83689V11.5759C9.272 12.5628 9.79594 13.4273 10.5809 13.9062C10.6523 13.9484 10.7542 14.0035 10.8812 14.0593C11.1657 14.1842 11.5558 14.3035 12.0005 14.3035C12.445 14.3035 12.8341 14.1846 13.1176 14.0602C13.2451 14.0042 13.3472 13.9489 13.4184 13.9069ZM2 12C2 14.9959 3.31741 17.684 5.40452 19.5168L5.42841 19.5438C5.49553 19.6189 5.59114 19.7182 5.71841 19.8332C5.97322 20.0636 6.35385 20.3562 6.88471 20.6435C7.10268 20.7615 7.34486 20.878 7.6128 20.9888C8.93735 21.6364 10.4262 22 12 22C13.5724 22 15.06 21.6371 16.3837 20.9905C16.6532 20.8792 16.8968 20.7621 17.1159 20.6435C17.6466 20.3561 18.0271 20.0635 18.2819 19.8331C18.4091 19.7181 18.5047 19.6187 18.5718 19.5437L18.5956 19.5167C20.6826 17.6839 22 14.9958 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12Z"
                                                                                fill="#82869E"></path>
                                                                        </svg>
                                                                    </div>
                                                                    <div type="body" class="popup-text">Thông tin tài khoản</div>
                                                                </div>
                                                            </a><a target="_self" class="nav-ip-popup-child" href="pages/admin/index.php">
                                                                <div data-content-region-name="headerBar" data-track-content="true"
                                                                    data-content-name="viewOrder" class="nav-ip-popup-child-main">
                                                                    <div class="icon"><svg fill="none" viewBox="0 0 24 24" size="18" class="css-9w5ue6"
                                                                            height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                d="M7.5328 3.5625C7.5328 3.14829 7.86859 2.8125 8.2828 2.8125H15.2308C15.645 2.8125 15.9808 3.14829 15.9808 3.5625V3.80501H19.201C19.6152 3.80501 19.951 4.14079 19.951 4.55501V20.4361C19.951 20.8503 19.6152 21.1861 19.201 21.1861H4.3125C3.89829 21.1861 3.5625 20.8503 3.5625 20.4361V4.55501C3.5625 4.14079 3.89829 3.80501 4.3125 3.80501H7.5328V3.5625ZM15.9808 7.53276V5.30501H18.451V19.6861H5.0625V5.30501H7.5328V7.53276C7.5328 7.94698 7.86859 8.28276 8.2828 8.28276H10.0198C10.434 8.28276 10.7698 7.94698 10.7698 7.53276C10.7698 7.30843 11.0628 6.87111 11.7568 6.87111C12.4508 6.87111 12.7438 7.30843 12.7438 7.53276C12.7438 7.94698 13.0796 8.28276 13.4938 8.28276H15.2308C15.645 8.28276 15.9808 7.94698 15.9808 7.53276ZM9.0328 4.3125V6.78276H9.41784C9.7871 5.89836 10.7889 5.37111 11.7568 5.37111C12.7247 5.37111 13.7265 5.89836 14.0957 6.78276H14.4808V4.3125H9.0328ZM15.4476 12.0333C15.7405 11.7404 15.7405 11.2655 15.4476 10.9726C15.1547 10.6797 14.6798 10.6797 14.3869 10.9726L11.0384 14.3211L9.80564 13.0883C9.51275 12.7954 9.03787 12.7954 8.74498 13.0883C8.45209 13.3812 8.45209 13.8561 8.74498 14.149L10.5081 15.9121C10.6487 16.0527 10.8395 16.1318 11.0384 16.1318C11.2373 16.1318 11.4281 16.0527 11.5688 15.9121L15.4476 12.0333Z"
                                                                                fill="#82869E"></path>
                                                                        </svg></div>
                                                                    <div type="body" class="popup-text">Quản lý sản phẩm</div>
                                                                </div>
                                                            </a><a target="_self" class="nav-ip-popup-child" href="?page=address">
                                                                <div data-content-region-name="headerBar" data-track-content="true"
                                                                    data-content-name="viewAddressList" class="nav-ip-popup-child-main">
                                                                    <div class="icon"><svg fill="none" viewBox="0 0 24 24" size="18" class="css-9w5ue6"
                                                                            height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                d="M11.6957 2.75C9.09299 2.75 6.35871 4.72035 6.35871 8.08696C6.35871 8.84669 6.67432 9.80604 7.22598 10.8727C7.76947 11.9236 8.50271 13.0046 9.24942 13.9876C9.99415 14.968 10.7407 15.8358 11.302 16.4592C11.4469 16.6202 11.5792 16.7646 11.6957 16.8901C11.8121 16.7646 11.9444 16.6202 12.0894 16.4592C12.6506 15.8358 13.3972 14.968 14.1419 13.9876C14.8886 13.0046 15.6219 11.9236 16.1654 10.8727C16.717 9.80604 17.0326 8.84669 17.0326 8.08696C17.0326 4.72035 14.2983 2.75 11.6957 2.75ZM11.6957 17.9783C11.1633 18.5065 11.1632 18.5064 11.163 18.5063L11.1627 18.5059L11.1615 18.5048L11.1576 18.5008L11.1432 18.4862L11.0896 18.4313C11.0432 18.3835 10.9758 18.3138 10.8905 18.2241C10.72 18.0447 10.4776 17.7854 10.1872 17.4628C9.60714 16.8185 8.83197 15.9178 8.05496 14.895C7.27993 13.8747 6.49143 12.7177 5.89362 11.5618C5.30398 10.4217 4.85871 9.20548 4.85871 8.08696C4.85871 3.74922 8.41486 1.25 11.6957 1.25C14.9765 1.25 18.5326 3.74922 18.5326 8.08696C18.5326 9.20548 18.0874 10.4217 17.4977 11.5618C16.8999 12.7177 16.1114 13.8747 15.3364 14.895C14.5594 15.9178 13.7842 16.8185 13.2041 17.4628C12.9137 17.7854 12.6713 18.0447 12.5008 18.2241C12.4155 18.3138 12.3482 18.3835 12.3017 18.4313L12.2481 18.4862L12.2338 18.5008L12.2298 18.5048L12.2287 18.5059L12.2283 18.5063C12.2282 18.5064 12.2281 18.5065 11.6957 17.9783ZM11.6957 17.9783L12.2281 18.5065C12.0873 18.6484 11.8956 18.7283 11.6957 18.7283C11.4957 18.7283 11.3041 18.6484 11.1633 18.5065L11.6957 17.9783ZM17.4472 15.2423C17.8177 15.057 18.2682 15.2072 18.4534 15.5777L20.3385 19.3479C20.9203 20.5114 20.0742 21.8805 18.7733 21.8805H4.61804C3.31712 21.8805 2.47101 20.5114 3.05279 19.3479L4.93788 15.5777C5.12313 15.2072 5.57363 15.057 5.94411 15.2423C6.3146 15.4275 6.46477 15.878 6.27952 16.2485L4.39443 20.0187C4.31132 20.1849 4.4322 20.3805 4.61804 20.3805H18.7733C18.9591 20.3805 19.08 20.1849 18.9969 20.0187L17.1118 16.2485C16.9266 15.878 17.0767 15.4275 17.4472 15.2423ZM10.7065 8.08679C10.7065 7.5405 11.1494 7.09766 11.6957 7.09766C12.2419 7.09766 12.6848 7.54051 12.6848 8.08679C12.6848 8.63307 12.2419 9.07592 11.6957 9.07592C11.1494 9.07592 10.7065 8.63307 10.7065 8.08679ZM11.6957 5.59766C10.321 5.59766 9.20654 6.71208 9.20654 8.08679C9.20654 9.4615 10.321 10.5759 11.6957 10.5759C13.0704 10.5759 14.1848 9.4615 14.1848 8.08679C14.1848 6.71208 13.0704 5.59766 11.6957 5.59766Z"
                                                                                fill="#82869E"></path>
                                                                        </svg></div>
                                                                    <div type="body" class="popup-text">Sổ địa chỉ</div>
                                                                </div>
                                                            </a><a target="_self" class="nav-ip-popup-child" href="/notification">
                                                                <div data-content-region-name="headerBar" data-track-content="true"
                                                                    data-content-name="viewNotification" class="nav-ip-popup-child-main">
                                                                    <div class="icon">
                                                                        <svg fill="none" viewBox="0 0 24 24" size="18" class="noti css-9w5ue6"
                                                                            height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M5.99398 13V9C5.99398 5.686 8.68298 3 12 3C12.7883 2.99961 13.569 3.15449 14.2975 3.4558C15.0259 3.75712 15.6879 4.19897 16.2456 4.75612C16.8033 5.31327 17.2458 5.97481 17.5479 6.70298C17.8499 7.43115 18.0056 8.21168 18.006 9V13C18.006 13.986 18.454 14.919 19.223 15.537L19.532 15.785C20.449 16.521 19.928 18 18.752 18H5.24798C4.07198 18 3.55098 16.521 4.46798 15.785L4.77698 15.537C5.15686 15.2322 5.46344 14.846 5.67408 14.4069C5.88472 13.9678 5.99404 13.487 5.99398 13V13Z"
                                                                                stroke="#82869E" stroke-width="1.5" stroke-linecap="round"
                                                                                stroke-linejoin="round"></path>
                                                                            <path d="M10.5 21H13.5" stroke="#82869E" stroke-width="1.5"
                                                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                                                        </svg>
                                                                    </div>
                                                                    <div type="body" class="popup-text">Thông báo</div>
                                                                </div>
                                                            </a>
                                                            <div data-content-region-name="headerBar" data-track-content="true"
                                                                data-content-name="logOut" class="nav-ip-popup-logout-button">
                                                                <a href="?page=confirm-logout">
                                                                <button height="2.5rem" color="white" class="logout-button" type="button">
                                                                    <div type="body" class="button-text logout-button-text" color="white">Đăng xuất
                                                                    </div>
                                                                    <span style="margin-left: 0px;">
                                                                        <div class="nav-ip-popup-logout"> </div>
                                                                    </span>
                                                                </button></a>
                                                            </div>
                                                        </div>
                                                    </span>
                                                </div>
                                            </div>';
                                    } else {
                                        echo '<a href="?page=login" style="text-decoration: unset;">
                                            <div class="teko-col css-17ajfcv" style="padding-left: 8px; padding-right: 8px; flex: 0 0 auto;">
                                                <div class="button css-12qbrtd" data-content-region-name="headerBar" data-track-content="true"
                                                    data-content-name="loginIcon"><svg fill="none" viewBox="0 0 24 24" size="36" class="css-11md2ba"
                                                        color="textSecondary" height="36" width="36" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M12 3.5C7.30558 3.5 3.5 7.30558 3.5 12C3.5 13.9895 4.18351 15.8194 5.32851 17.2676C5.58317 16.4856 6.12054 15.8107 6.85621 15.3914L8.76361 14.2968C8.1448 13.5615 7.772 12.6122 7.772 11.5759V9.83689C7.772 7.50167 9.66479 5.60889 12 5.60889C14.3349 5.60889 16.229 7.50139 16.229 9.83689V11.5759C16.229 12.6132 15.8554 13.5631 15.2354 14.2986L17.1437 15.3908L17.1444 15.3912C17.8805 15.8106 18.4173 16.4856 18.6716 17.2674C19.8165 15.8192 20.5 13.9894 20.5 12C20.5 7.30558 16.6944 3.5 12 3.5ZM10.0133 15.3091C10.6056 15.6249 11.2819 15.8039 12 15.8039C12.7169 15.8039 13.3922 15.6255 13.984 15.3106L16.3999 16.6934L16.4013 16.6942C16.9789 17.0231 17.3365 17.6396 17.3365 18.3075V18.6164C16.8532 19.0067 16.3263 19.3451 15.7642 19.6232C14.9127 19.9671 13.6909 20.2625 12.0005 20.2625C10.3078 20.2625 9.08478 19.9663 8.23289 19.6217C7.67189 19.3439 7.14595 19.006 6.6635 18.6164V18.3075C6.6635 17.6402 7.0216 17.0234 7.59965 16.6942L7.6018 16.693L10.0133 15.3091ZM13.4184 13.9069C14.2043 13.428 14.729 12.5631 14.729 11.5759V9.83689C14.729 8.33038 13.5071 7.10889 12 7.10889C10.4932 7.10889 9.272 8.3301 9.272 9.83689V11.5759C9.272 12.5628 9.79594 13.4273 10.5809 13.9062C10.6523 13.9484 10.7542 14.0035 10.8812 14.0593C11.1657 14.1842 11.5558 14.3035 12.0005 14.3035C12.445 14.3035 12.8341 14.1846 13.1176 14.0602C13.2451 14.0042 13.3472 13.9489 13.4184 13.9069ZM2 12C2 14.9959 3.31741 17.684 5.40452 19.5168L5.42841 19.5438C5.49553 19.6189 5.59114 19.7182 5.71841 19.8332C5.97322 20.0636 6.35385 20.3562 6.88471 20.6435C7.10268 20.7615 7.34486 20.878 7.6128 20.9888C8.93735 21.6364 10.4262 22 12 22C13.5724 22 15.06 21.6371 16.3837 20.9905C16.6532 20.8792 16.8968 20.7621 17.1159 20.6435C17.6466 20.3561 18.0271 20.0635 18.2819 19.8331C18.4091 19.7181 18.5047 19.6187 18.5718 19.5437L18.5956 19.5167C20.6826 17.6839 22 14.9958 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12Z"
                                                            fill="#82869E"></path>
                                                    </svg>
                                                    <div class="ml-6 text-left">
                                                        <div type="body" color="textSecondary" class="css-1ajy8lg">Đăng nhập</div>
                                                        <div type="body" color="textSecondary" class="css-1ajy8lg">Đăng ký</div>
                                                    </div>
                                                </div>
                                            </div>
                                            </a>';
                                    }
                                    ?>


            <div class="teko-col nav-common-form nav-notify--has-popup "
                style="padding-left: 8px; padding-right: 8px; flex: 0 0 auto;">
                <div class="nav-notify" data-content-region-name="headerBar" data-track-content="true"
                    data-content-name="notificationItem" data-content-target="notification">
                    <div class="nav-notify-cart " tabindex="0">
                        <div class="button nav-notify-main css-clickable"
                            style="flex-direction: column; min-width: 68px;">
                            <i class="fa-regular fa-bell css-clickable" style="font-size: 32px;"></i>
                        </div>
                    </div>
                    <div class="nav-notity-popup" style="position: absolute; inset: 72px 300px auto auto;"
                        data-popper-reference-hidden="false" data-popper-escaped="false"
                        data-popper-placement="bottom-end">
                        <div origin="center top" class="nav-notity-popup-main">
                            <div class="nav-notify-popup-child">
                                <div data-content-region-name="MiniNotification" data-track-content="true"
                                    data-content-name="viewNotificationFromMiniNotification"
                                    data-content-target="Notification" class="nav-notify-popup-child-main"
                                    direction="row"><a href="/notification">Xem tất cả thông báo</a></div>
                            </div>
                        </div>
                        <div style="position: absolute; left: 0px; transform: translate3d(350px, 0px, 0px);"></div>
                    </div>
                </div>
            </div>
            <div class="teko-col nav-common-form nav-cart--has-popup"
                style="padding-left: 8px; padding-right: 8px; flex: 0 0 auto;">
                <div class="nav-cart" data-content-region-name="headerBar" data-track-content="true"
                    data-content-name="cartItem" data-content-target="shoppingCart">
                    <div class="nav-notify-cart " tabindex="0">
                        <a target="_self" class="nav-ip-popup-child" href="?page=cart-page">
                            <div class="nav-cart-main">
                                <i class="fa-solid fa-cart-shopping clickable" style="font-size: 30px;"></i>
                                <div class="ml-6 text-left">
                                    <div type="body" color="textSecondary" class="title nav-common-text">Giỏ hàng
                                        của
                                        bạn</div>
                                    <div type="body" color="textSecondary" class="title nav-common-text">
                                        (<?php
                                                 if(isset($_SESSION['loggedin_customer']) and isset($_SESSION['cart'][$info['MaKH']] )) {
                                                    echo mysqli_num_rows($result_cart);
                                                 }
                                            ?>) sản
                                        phẩm
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="shoppingCartProductNumber" style="display: none;">2</div>
                    </div>
                    <div class="nav-cart-popup"
                        style="position: absolute; inset: 0px 0px auto auto; transform: translate3d(0px, 40px, 0px);">
                        <div origin="center top" class="nav-cart-popup">
                            <div class="nav-cart-popup-main">
                                <div class="nav-cart-popup-child">
                                    <div class="css-mb-16">
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

                                                echo '<div class="nav-cart-popup-products">
                                                <div>
                                                    <div height="80" width="80" class="nav-cart-popup-products-avt">
                                                    <picture>
                                                        <source
                                                            srcset="' . $product_image . '"
                                                            type="image/png">
                                                            <img class="lazyload css-jdz5ak" alt="product"
                                                            src="' . $product_image . '"
                                                            loading="lazy" decoding="async">
                                                    </picture>
                                                    </div>
                                                </div>
                                                <div class="css-mg1rem">
                                                    <a target="_blank"
                                                        href="/may-tinh-xach-tay-laptop-acer-nitro-16-phoenix-an16-41-r5m4-nh-qkbsv-003-amd-ryzen-5-7535hs-den-s230402670.html"
                                                        class="nav-cart-popup-a">
                                                        <div type="body" color="textPrimary" class="css-1h5tj4c">' . $product_name . '</div>
                                                    </a>
                                                    <div type="caption" color="textSecondary" class="css-1f5a6jh">Sốlượng ' . $quantity . '</div>
                                                        <span class="css-7ofbab">' . $price_sale_format . '<span
                                                            class="css-1ul6wk9">đ</span></span>
                                                </div>
                                            </div>';
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="css-1vf48kp">
                                    <div class="css-sax00u"><span>Tổng tiền
                                            (
                                            <?php
                                                 if(isset($_SESSION['loggedin_customer']) and isset($_SESSION['cart'][$info['MaKH']] )) {
                                                    echo mysqli_num_rows($result_cart);
                                                 }
                                            ?>) sản phẩm
                                        </span>
                                        <span class="css-19une5m">
                                            <span class="css-htm2b9">
                                                <?php if (isset($total_money_format))
                                                    echo $total_money_format ?>
                                                    <span class="css-1ul6wk9">đ</span>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="css-0"><a href="?page=cart-page" class="css-1dyo6sn">Xem giỏ hàng</a></div>
                                </div>
                            </div>
                            <div style="position: absolute; left: 0px; transform: translate3d(311px, 0px, 0px);"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>

            // Lấy tham chiếu đến nút bấm và thẻ div
            const showButton = document.getElementById("nav-search-input");
            const myDiv = document.getElementById("nav-search-popup");
            // Lấy tham chiếu đến nút bấm và thẻ div
            const showProductPortfolio = document.getElementById("nav--product-portfolio");
            const productPortfolioPopup = document.getElementById("nav--product-portfolio-popup");

            // Thêm sự kiện click cho nút bấm
            showProductPortfolio.addEventListener("click", function () {
                if (productPortfolioPopup.style.visibility === "hidden") {
                    productPortfolioPopup.style.visibility = "visible";
                } else {
                    productPortfolioPopup.style.visibility = "hidden";
                }
            });
            // document.getElementById('search-link').addEventListener('click', function () {
            //     var searchKeyword = document.getElementById('search-input').value;
            //     window.location.href = '?page=search&search-product=' + searchKeyword;
            // });
        </script>
    </div>