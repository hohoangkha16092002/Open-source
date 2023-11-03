<?php
include("config.php");
$product_type = "";
?>
<div style="  background-color: #f8f8fc;">
    <div class="home-page--container">
        <div class="home-page--main">
            <div class="teko-row teko-row-space-around home-page--main-child" style="height: 566px;">
                <div class="teko-col teko-col-2 home-page--main-child-left">
                    <div class="css-position-relative">
                        <div class="home-page--main-child-left-main" width="12.375rem" height="28.5rem">
                            <a class="home-page--main-child-left-main-child"
                                href="?page=search&search-input=<?php echo urlencode($product_type); ?>">
                                <div class="home-page--category-child">
                                    <div class="css-w22-h22">
                                        <div height="100%" width="100%" class="home-page--category-child-icon">
                                            <img src="https://lh3.googleusercontent.com/lFZZtBMUqkbl9qKKUe3DSmHqpb62UjWrOkxqcJ6lN3yM83Wg2Irp-ZlvkUwGO6TMcsscLELMZa_lN9jo8tKteWsCzmUii7po=rw"
                                                loading="lazy" decoding="async" style="width: 100%; height: 100%;">
                                        </div>
                                    </div>
                                    <div type="caption" class="home-page--category-child-goods" style="flex: 1 1 0%;">
                                        Laptop</div>
                                </div>
                            </a>
                            <!-- Begin Test -->
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

                            <!-- End Test -->
                        </div>
                    </div><img
                        src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDgiIGhlaWdodD0iNDgiIHZpZXdCb3g9IjAgMCA0OCA0OCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggb3BhY2l0eT0iMC4zIiBkPSJNMCAwSDI0QzM3LjI1NDggMCA0OCAxMC43NDUyIDQ4IDI0QzQ4IDM3LjI1NDggMzcuMjU0OCA0OCAyNCA0OEgwVjBaIiBmaWxsPSIjMUIxRDI5Ii8+CjxwYXRoIGQ9Ik0yNi41IDE4TDIwLjUgMjRMMjYuNSAzMCIgc3Ryb2tlPSJ3aGl0ZSIgc3Ryb2tlLXdpZHRoPSIxLjUiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIvPgo8L3N2Zz4K"
                        alt="" class="home-page--back-icon">
                </div>
                <div style="flex: 1 1 0%;">
                    <div class="home-page--slide">
                        <div
                            class="home-page--glide home-page--slide-main home-page--glide--swipeable home-page--glide--ltr home-page--glide--carousel">
                            <div class="home-page--glide__track" data-glide-el="track">
                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100"
                                                style="width: 100%; height: 566px; object-fit: cover;"
                                                src="https://lh3.googleusercontent.com/YSEh7mEEW8a_KbVD42Mut-z-NVGg_x9d8YBLcI8ZHZxX0PPVLz30TqanefsaJITaHRRimZ8W75k2SD6WXoqEogPcpqj4EePL=w1920-rw"
                                                alt="Acer tháng 10">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100"
                                                style="width: 100%; height: 566px; object-fit: cover;"
                                                src="https://lh3.googleusercontent.com/2KhPpjfZZKqDFENGxi16c-WAMcFLyhsnWcuwJzgX2Y9S-m2y9BCnrI6onJgds0lXXN0rFqWWCnzKj_l3qS5E80K_p-xBhGSqjw=w1920-rw"
                                                alt="Ngày hội Tân Sinh Viên">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100"
                                                style="width: 100%; height: 566px; object-fit: cover;"
                                                src="https://lh3.googleusercontent.com/vkMMX2cvl_1ii0c_vw5TGy4ixhRc-l7OlMWnmx4-oxquqHo_A9aET_lWxDmxbh-GMZTr3O5JS4kGNa0Ka7hcctxo2lj0xoUR=w1920-rw"
                                                alt="Intel Gen 12">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100"
                                                style="width: 100%; height: 566px; object-fit: cover;"
                                                src="https://lh3.googleusercontent.com/NEyGqAS4HkBmVGWbdLxRCJ7v4n7Xz-Xcfs6ffoxCNZMHBg0txwJk7L0FVyBvjZ9mwdFsV915-uAWlcX_JPHD1yJSq2EYfeV6=w1920-rw"
                                                alt="Intel Evo">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100"
                                                style="width: 100%; height: 566px; object-fit: cover;"
                                                src="https://lh3.googleusercontent.com/ryKnRM6pBr5ZGqtuLq8Quys5eiwxBFtnNlKSOwPFCDY0kJY46D6NofSl-71_LpfDNqHptA9DGjJLHwNKp7qukpSFy9GUEoti=w1920-rw"
                                                alt="PV siêu Sale tháng 10">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                        data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                        data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="teko-col teko-col-2 home-page--child-right">
                    <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDgiIGhlaWdodD0iNDgiIHZpZXdCb3g9IjAgMCA0OCA0OCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggb3BhY2l0eT0iMC4zIiBkPSJNMCAyNEMwIDEwLjc0NTIgMTAuNzQ1MiAwIDI0IDBINDhWNDhIMjRDMTAuNzQ1MiA0OCAwIDM3LjI1NDggMCAyNFoiIGZpbGw9IiMxQjFEMjkiLz4KPHBhdGggZD0iTTIxLjUgMzBMMjcuNSAyNEwyMS41IDE4IiBzdHJva2U9IndoaXRlIiBzdHJva2Utd2lkdGg9IjEuNSIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIi8+Cjwvc3ZnPgo="
                        alt="" class="home-page--forward-icon">
                    <div class="home-page--child-right-main">
                        <a data-testid="TekoLink" class="home-page--main-child-left-main-child" href="/p/promo">
                            <div height="220" width="100%" class="home-page--child-right-main-divide"
                                data-content-region-name="topRightBannerHomepage" data-track-content="true"
                                data-content-name="Chương trình tổng hợp tháng 10" data-content-index="0"
                                data-content-target="https://phongvu.vn/p/promo">
                                <img src="https://lh3.googleusercontent.com/7iRH6htrpI2HzoU92xxGWl68lVuKSO9XU9qBxcuuzpgIB3vgWz5WjOffN7WnWZ2VrWjQYRNwUu2LIGqIGmC-hhP32NjDr9Wx=w300-rw"
                                    loading="eager" hover="zoom" decoding="async" alt="Chương trình tổng hợp tháng 10"
                                    fetchpriority="high" style="width: 100%; height: 220px; object-fit: cover;">
                            </div>
                        </a>
                        <a data-testid="TekoLink" class="home-page--main-child-left-main-child"
                            href="/p/chuong-trinh-phong-vu">
                            <div height="220" width="100%" class="home-page--child-right-main-divide"
                                data-content-region-name="topRightBannerHomepage" data-track-content="true"
                                data-content-name="Chương trình học sinh sinh viên tháng 10" data-content-index="1"
                                data-content-target="https://phongvu.vn/p/chuong-trinh-phong-vu"><img
                                    src="https://lh3.googleusercontent.com/cPEu8E3KSvDqFyPgZlISP7W_KYCf4ZoMiQazpVyxC_rx_r4Ee62B-Iu9xVA13czlalt5J1u9vg6cxO7lnZt5vaY9jZlTOII=w300-rw"
                                    loading="eager" hover="zoom" decoding="async"
                                    alt="Chương trình học sinh sinh viên tháng 10" fetchpriority="high"
                                    style="width: 100%; height: 220px; object-fit: cover;"></div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="teko-row home-page--list-choose-container">
                <div class="teko-col teko-col-12 home-page--list-choose">
                    <div class="teko-row home-page--list-choose-main"
                        style="margin-left: -8px; margin-right: -8px; row-gap: 16px;">
                        <div class="teko-col teko-col-3 home-page--list-choose"
                            style="padding-left: 8px; padding-right: 8px;"><a data-testid="TekoLink"
                                class="home-page--main-child-left-main-child" href="/p/laptop-1">
                                <div width="100%" class="home-page--list-choose-child"
                                    data-content-region-name="bottomBanner" data-track-content="true"
                                    data-content-name="Laptop tháng 10" data-content-index="0"
                                    data-content-target="https://phongvu.vn/p/laptop-1"><img
                                        src="https://lh3.googleusercontent.com/q6lovS2WzW4BMMGaBywk4Hdbmv9L_Yh84PWNkRyczxqgtFgALpiCb44s1VfdeaHXrixHWjr8XtX5Wgl0HfePwZvmHN1EObA=w308-rw"
                                        loading="eager" hover="zoom" decoding="async" alt="Laptop tháng 10"
                                        fetchpriority="high" name="Laptop tháng 10" style="width: 100%; height: auto;">
                                </div>
                            </a></div>
                        <div class="teko-col teko-col-3 home-page--list-choose"
                            style="padding-left: 8px; padding-right: 8px;"><a data-testid="TekoLink"
                                class="home-page--main-child-left-main-child" href="/p/thiet-bi-van-phong">
                                <div width="100%" class="home-page--list-choose-child"
                                    data-content-region-name="bottomBanner" data-track-content="true"
                                    data-content-name="Thiết bị văn phòng tháng 10" data-content-index="1"
                                    data-content-target="https://phongvu.vn/p/thiet-bi-van-phong"><img
                                        src="https://lh3.googleusercontent.com/2yhEgyBFQW5M47B7cszx-lChiW4BaHm2frYTsX-f0tW-hLaD7F246s-UqWxTGAlAgKVTHY7gj3z9hQDuI-fVYwEeX6LAQunz=w308-rw"
                                        loading="eager" hover="zoom" decoding="async" alt="Thiết bị văn phòng tháng 10"
                                        fetchpriority="high" name="Thiết bị văn phòng tháng 10"
                                        style="width: 100%; height: auto;"></div>
                            </a></div>
                        <div class="teko-col teko-col-3 home-page--list-choose"
                            style="padding-left: 8px; padding-right: 8px;"><a data-testid="TekoLink"
                                class="home-page--main-child-left-main-child" href="/p/phong-vu-gaming">
                                <div width="100%" class="home-page--list-choose-child"
                                    data-content-region-name="bottomBanner" data-track-content="true"
                                    data-content-name="Gaming tháng 10" data-content-index="2"
                                    data-content-target="https://phongvu.vn/p/phong-vu-gaming"><img
                                        src="https://lh3.googleusercontent.com/NAL6SI3ErMnEySACqLpUSNfCF28AYVRPheYWufUcovyfmGjJUMXjKke_QJxnCKuCgz5sT2Cl6fPyI_TxS580_HVnvZefbs0=w308-rw"
                                        loading="eager" hover="zoom" decoding="async" alt="Gaming tháng 10"
                                        fetchpriority="high" name="Gaming tháng 10" style="width: 100%; height: auto;">
                                </div>
                            </a></div>
                        <div class="teko-col teko-col-3 home-page--list-choose"
                            style="padding-left: 8px; padding-right: 8px;"><a data-testid="TekoLink"
                                class="home-page--main-child-left-main-child" href="/p/dien-may">
                                <div width="100%" class="home-page--list-choose-child"
                                    data-content-region-name="bottomBanner" data-track-content="true"
                                    data-content-name="Điện máy tháng 10" data-content-index="3"
                                    data-content-target="https://phongvu.vn/p/dien-may"><img
                                        src="https://lh3.googleusercontent.com/qXkOnaasWJ9E9TT2M3mHrVQK-gXoDFUzXV1Dho-Ya7XFlWMTkil3-gcdxtndiEBAhDC_gb1rbx-V-FR3Okrj7HHU4YXZJnYy=w308-rw"
                                        loading="eager" hover="zoom" decoding="async" alt="Điện máy tháng 10"
                                        fetchpriority="high" name="Điện máy tháng 10"
                                        style="width: 100%; height: auto;"></div>
                            </a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="css-c8akhr">
            <div class="css-1g9pytl">
                <div class="css-1oy7kxh">
                    <div width="150" height="350" class="css-57q0lc"><a href="https://phongvu.vn/p/phong-vu-khuyen-mai"
                            target="_blank" rel="noopener noreferrer"><img
                                src="https://lh3.googleusercontent.com/0nOzNhfNFGmo0AXD3I3mdPtj5kU3DXi-k0JaksU4AweFfQW1LhAqVuKP7MPQvD-Nju2A4t6ZmJr4wfxX9GamWIqu3Fop465XeA"
                                class="css-1bvvtr6"></a></div>
                </div>
                <div class="css-ycdna5"></div>
                <div class="css-1ff6i85">
                    <div width="150" height="350" class="css-57q0lc"><a
                            href="https://phongvu.vn/p/chuong-trinh-phong-vu" target="_blank"
                            rel="noopener noreferrer"><img
                                src="https://lh3.googleusercontent.com/ezi5oistLUPzIpJCHqF6Ggyd6ofw2P2jZX31-xMnpIOB3iHiaBJfKciRivcxBfLD6E47U9H8aQeP8TG_MReJPZmYdHGVq7grLg"
                                class="css-1bvvtr6"></a></div>
                </div>
            </div>
        </div>
        <div class="css-k9y40f">
            <div id="promotion" class="css-1r9d2xy"></div>
            <div class="css-152s1x3"><span
                    style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: absolute; inset: 0px;"><img
                        alt="Chọn Quà Đúng Gu" sizes="100vw"
                        srcset="https://lh3.googleusercontent.com/G4E6IOl-UmzXQSM16n-nSeW5Q3QzDfsepLCLGlt7ADT6_-35AMU8xOX1m50zKXDJ2Uv6EroDB6HvDQL_auKRRGN3ltxpThy9Ng=rw-w640 640w, https://lh3.googleusercontent.com/G4E6IOl-UmzXQSM16n-nSeW5Q3QzDfsepLCLGlt7ADT6_-35AMU8xOX1m50zKXDJ2Uv6EroDB6HvDQL_auKRRGN3ltxpThy9Ng=rw-w750 750w, https://lh3.googleusercontent.com/G4E6IOl-UmzXQSM16n-nSeW5Q3QzDfsepLCLGlt7ADT6_-35AMU8xOX1m50zKXDJ2Uv6EroDB6HvDQL_auKRRGN3ltxpThy9Ng=rw-w828 828w, https://lh3.googleusercontent.com/G4E6IOl-UmzXQSM16n-nSeW5Q3QzDfsepLCLGlt7ADT6_-35AMU8xOX1m50zKXDJ2Uv6EroDB6HvDQL_auKRRGN3ltxpThy9Ng=rw-w1080 1080w, https://lh3.googleusercontent.com/G4E6IOl-UmzXQSM16n-nSeW5Q3QzDfsepLCLGlt7ADT6_-35AMU8xOX1m50zKXDJ2Uv6EroDB6HvDQL_auKRRGN3ltxpThy9Ng=rw-w1200 1200w, https://lh3.googleusercontent.com/G4E6IOl-UmzXQSM16n-nSeW5Q3QzDfsepLCLGlt7ADT6_-35AMU8xOX1m50zKXDJ2Uv6EroDB6HvDQL_auKRRGN3ltxpThy9Ng=rw-w1920 1920w, https://lh3.googleusercontent.com/G4E6IOl-UmzXQSM16n-nSeW5Q3QzDfsepLCLGlt7ADT6_-35AMU8xOX1m50zKXDJ2Uv6EroDB6HvDQL_auKRRGN3ltxpThy9Ng=rw-w2048 2048w, https://lh3.googleusercontent.com/G4E6IOl-UmzXQSM16n-nSeW5Q3QzDfsepLCLGlt7ADT6_-35AMU8xOX1m50zKXDJ2Uv6EroDB6HvDQL_auKRRGN3ltxpThy9Ng=rw-w3840 3840w"
                        src="https://lh3.googleusercontent.com/G4E6IOl-UmzXQSM16n-nSeW5Q3QzDfsepLCLGlt7ADT6_-35AMU8xOX1m50zKXDJ2Uv6EroDB6HvDQL_auKRRGN3ltxpThy9Ng=rw-w3840"
                        decoding="async" data-nimg="fill"
                        style="border-radius: 5px 5px 0px 0px; position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: cover; object-position: left top;"></span>
                <div class="css-j8f2xf">
                    <div data-index="0" class="active css-12c5axd" data-content-region-name="hotDealTab"
                        data-track-content="true" data-content-name="Chọn Quà Đúng Gu">
                        <div type="title" class="css-1t4t2c9" style="text-align: center;">Chọn Quà Đúng Gu</div>
                        <div type="subtitle" class="css-1rjvlsd" style="text-align: center;">Săn Deal Lên Đến 30%</div>
                    </div>
                    <div data-index="1" class=" css-12c5axd" data-content-region-name="hotDealTab"
                        data-track-content="true" data-content-name="Màn Hình Giá Sốc">
                        <div type="title" class="css-1t4t2c9" style="text-align: center;">Màn Hình Giá Sốc</div>
                        <div type="subtitle" class="css-1rjvlsd" style="text-align: center;">Deal Bật Nốc</div>
                    </div>
                    <div data-index="2" class=" css-12c5axd" data-content-region-name="hotDealTab"
                        data-track-content="true" data-content-name="Phụ Kiện Điện Thoại">
                        <div type="title" class="css-1t4t2c9" style="text-align: center;">Phụ Kiện Điện Thoại</div>
                        <div type="subtitle" class="css-1rjvlsd" style="text-align: center;">Sạc Nhanh Tiện Lợi</div>
                    </div>
                    <div data-index="3" class=" css-12c5axd" data-content-region-name="hotDealTab"
                        data-track-content="true" data-content-name="Nâng Cấp Văn Phòng">
                        <div type="title" class="css-1t4t2c9" style="text-align: center;">Nâng Cấp Văn Phòng</div>
                        <div type="subtitle" class="css-1rjvlsd" style="text-align: center;">Quà Tặng Chính Hãng</div>
                    </div>
                </div>
                <div style="position: relative; text-align: right; padding: 20px;"><a target="_self" class="css-cbrxda"
                        href="/c/flash-sales-2-1"><span style="color: white;">Xem tất cả</span><svg fill="none"
                            viewBox="0 0 24 24" class="css-ymxljd" color="white" height="1em" width="1em"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.49976 19.0001L15.4998 12.0001L8.49976 5.00012" stroke="currentColor"
                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg></a></div>
                <div class="teko-row home-page--list-choose-main">
                    <div class="teko-col teko-col-2 home-page--list-choose"
                        style="margin: auto; display: block; flex: 0 0 16.66%; max-width: 16.66%;" id="countdown">
                    </div>
                    <div class="teko-col teko-col-10 home-page--list-choose"
                        style="display: block; flex: 0 0 83.33%; max-width: 83.33%;">
                        <div class="css-gfmc8l">
                            <div class="glide css-npa7ru glide--swipeable glide--ltr glide--slider" id="glideContainer">
                                <div class="glide__track" data-glide-el="track">
                                    <div class="home-page--glide__slides"
                                        style="transition: transform 0ms cubic-bezier(0.165, 0.84, 0.44, 1) 0s; width: 1772px; transform: translate3d(0px, 0px, 0px);">
                                        <?php
                                        $sql_products = "SELECT * FROM `mathang` 
                                        join dmhangsanxuat on `mathang`.MaHSX = dmhangsanxuat.MaHSX 
                                        join anhmh on mathang.MaMH = anhmh.MaMH
                                        join khuyenmai on mathang.MaKM = khuyenmai.MaKM";
                                        $result_products = mysqli_query($conn, $sql_products);
                                        if (mysqli_num_rows($result_products) <> 0) {
                                            while ($row_products = mysqli_fetch_assoc($result_products)) {
                                                $product_name = $row_products["TenMH"];
                                                $product_price = $row_products["DonGia"];
                                                $product_brand = $row_products["TenHSX"];
                                                $product_image = $row_products['DLAnh'];
                                                $product_id = $row_products['MaMH'];
                                                $product_sale = $row_products['GiamGia'];

                                                $price_sale = $product_price - $product_price * $product_sale; //Số tiền còn lại
                                                $sale_rate = $product_sale * 100; //% khuyến mãi
                                                $save_price = $product_price - $price_sale; //Số tiền tiết kiệm
                                                $price_sale_format = number_format($price_sale, 0, '.', '.');
                                                $product_price_format = number_format($product_price, 0, '.', '.');
                                                $save_price_format = number_format($save_price, 0, '.', '.');

                                                if ($product_sale >= 0.25) {
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
                                        }
                                        ?>
                                    </div>
                                    <div data-glide-el="controls" class="home-page--glide__arrows">
                                        <div class="glide__arrow--override glide__arrow--left glide__arrow--disabled"
                                            data-glide-dir="|<"></div>
                                        <div class="glide__arrow--override glide__arrow--right" data-glide-dir="|>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="css-k9y40f">
            <div id="COUNT_DOWN_PROMO_BIG_SKU-5770" class="css-1r9d2xy"></div>
            <div class="css-152s1x3"><span
                    style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: absolute; inset: 0px;"><img
                        alt="Ưu đãi Samsung cho Học sinh sinh viên" sizes="100vw"
                        srcset="https://lh3.googleusercontent.com/iekE6KQ29-fGKefke68EDovM-tM7A3773OoS6dDs5fSqVXtrOjXdU_hnRi2FcnKhgcmHv5xZXHOV0SGBDU296kJ_xXN3prkqkg=rw-w640 640w, https://lh3.googleusercontent.com/iekE6KQ29-fGKefke68EDovM-tM7A3773OoS6dDs5fSqVXtrOjXdU_hnRi2FcnKhgcmHv5xZXHOV0SGBDU296kJ_xXN3prkqkg=rw-w750 750w, https://lh3.googleusercontent.com/iekE6KQ29-fGKefke68EDovM-tM7A3773OoS6dDs5fSqVXtrOjXdU_hnRi2FcnKhgcmHv5xZXHOV0SGBDU296kJ_xXN3prkqkg=rw-w828 828w, https://lh3.googleusercontent.com/iekE6KQ29-fGKefke68EDovM-tM7A3773OoS6dDs5fSqVXtrOjXdU_hnRi2FcnKhgcmHv5xZXHOV0SGBDU296kJ_xXN3prkqkg=rw-w1080 1080w, https://lh3.googleusercontent.com/iekE6KQ29-fGKefke68EDovM-tM7A3773OoS6dDs5fSqVXtrOjXdU_hnRi2FcnKhgcmHv5xZXHOV0SGBDU296kJ_xXN3prkqkg=rw-w1200 1200w, https://lh3.googleusercontent.com/iekE6KQ29-fGKefke68EDovM-tM7A3773OoS6dDs5fSqVXtrOjXdU_hnRi2FcnKhgcmHv5xZXHOV0SGBDU296kJ_xXN3prkqkg=rw-w1920 1920w, https://lh3.googleusercontent.com/iekE6KQ29-fGKefke68EDovM-tM7A3773OoS6dDs5fSqVXtrOjXdU_hnRi2FcnKhgcmHv5xZXHOV0SGBDU296kJ_xXN3prkqkg=rw-w2048 2048w, https://lh3.googleusercontent.com/iekE6KQ29-fGKefke68EDovM-tM7A3773OoS6dDs5fSqVXtrOjXdU_hnRi2FcnKhgcmHv5xZXHOV0SGBDU296kJ_xXN3prkqkg=rw-w3840 3840w"
                        src="https://lh3.googleusercontent.com/iekE6KQ29-fGKefke68EDovM-tM7A3773OoS6dDs5fSqVXtrOjXdU_hnRi2FcnKhgcmHv5xZXHOV0SGBDU296kJ_xXN3prkqkg=rw-w3840"
                        decoding="async" data-nimg="fill"
                        style="border-radius: 5px 5px 0px 0px; position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: cover; object-position: left top;"></span>
                <div class="css-j8f2xf">
                    <div data-index="0" class="active css-12c5axd" data-content-region-name="hotDealTab"
                        data-track-content="true" data-content-name="Ưu đãi Samsung cho Học sinh sinh viên">
                        <div type="title" class="css-1t4t2c9" style="text-align: center;">Ưu đãi Acer cho Học sinh
                            sinh viên</div>
                        <div type="subtitle" class="css-1rjvlsd" style="text-align: center;">Giảm thêm đến 500K</div>
                    </div>
                    <div data-index="1" class=" css-12c5axd" data-content-region-name="hotDealTab"
                        data-track-content="true" data-content-name="Sales Garmin - Chốt đơn liền">
                        <div type="title" class="css-1t4t2c9" style="text-align: center;">Sales Garmin - Chốt đơn liền
                        </div>
                        <div type="subtitle" class="css-1rjvlsd" style="text-align: center;">Giảm đến 45%</div>
                    </div>
                </div>
                <div style="position: relative; text-align: right; padding: 20px;"><a target="_self" class="css-cbrxda"
                        href="/c/flash-sales-b1-1"><span style="color: white;">Xem tất cả</span><svg fill="none"
                            viewBox="0 0 24 24" class="css-ymxljd" color="white" height="1em" width="1em"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.49976 19.0001L15.4998 12.0001L8.49976 5.00012" stroke="currentColor"
                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg></a></div>
                <div class="teko-row home-page--list-choose-main">
                    <div class="teko-col teko-col-2 home-page--list-choose"
                        style="margin: auto; display: block; flex: 0 0 16.66%; max-width: 16.66%;" id="countdown1">
                    </div>
                    <div class="teko-col teko-col-10 home-page--list-choose"
                        style="display: block; flex: 0 0 83.33%; max-width: 83.33%;">
                        <div class="css-gfmc8l">
                            <div class="glide css-npa7ru glide--swipeable glide--ltr glide--slider"
                                id="glideContainer1">
                                <div class="glide__track" data-glide-el="track">
                                    <div class="home-page--glide__slides"
                                        style="transition: transform 0ms cubic-bezier(0.165, 0.84, 0.44, 1) 0s; width: 1417.6px; transform: translate3d(0px, 0px, 0px);">
                                        <?php
                                        $sql_products = "SELECT * FROM `mathang` 
                                        join dmhangsanxuat on `mathang`.MaHSX = dmhangsanxuat.MaHSX 
                                        join anhmh on mathang.MaMH = anhmh.MaMH";
                                        $result_products = mysqli_query($conn, $sql_products);
                                        if (mysqli_num_rows($result_products) <> 0) {
                                            while ($row_products = mysqli_fetch_assoc($result_products)) {
                                                $product_name = $row_products["TenMH"];
                                                $product_price = $row_products["DonGia"];
                                                $product_brand = $row_products["TenHSX"];
                                                $product_image = $row_products['DLAnh'];
                                                $product_id = $row_products['MaMH'];
                                                $price_sale = $product_price - $product_price * $product_sale - 500000;
                                                $sale_rate = $product_sale * 100;
                                                $save_price = $product_price - $price_sale + 500000;
                                                $price_sale_format = number_format($price_sale, 0, '.', '.');
                                                $product_price_format = number_format($product_price, 0, '.', '.');
                                                $save_price_format = number_format($save_price, 0, '.', '.');

                                                if ($row_products["MaHSX"] == "AC") {
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
                                        }
                                        ?>
                                    </div>
                                    <div data-glide-el="controls" class="home-page--glide__arrows">
                                        <div class="glide__arrow--override glide__arrow--left glide__arrow--disabled"
                                            data-glide-dir="|<"></div>
                                        <div class="glide__arrow--override glide__arrow--right" data-glide-dir="|>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="css-k9y40f">
            <div id="danh-muc-noi-bat" class="css-1r9d2xy"></div>
            <div class="css-rfz8yf">
                <div class="css-ftpi71">
                    <div type="title" color="textTitle" class="title css-1dlj6qw">Danh mục nổi bật </div>
                </div>
                <div class="css-nqhd5d">
                    <?php
                    $sql_brand = "SELECT * FROM `dmhangsanxuat`";
                    $result_brand = mysqli_query($conn, $sql_brand);

                    if (mysqli_num_rows($result_brand) <> 0) {
                        while ($row_brand = mysqli_fetch_assoc($result_brand)) {
                            $product_name = $row_brand["TenHSX"];

                            echo "
                            <div class='css-qikc2t'>
                                <a target='_self' class='css-cbrxda' href='https://phongvu.vn/c/laptop'>
                                    <div height='56' width='56' class='css-1senw2f'><img
                                            src='https://lh3.googleusercontent.com/wOhcPJSPsA2l653-KPjmfodiem9y3NS6Mji6SZhkNCKsuyHK9Z3x0X-2l8gikfPI5n1DX0Fg9bBCHsOI0ACZD7n20XHN4e72=rw'
                                            loading='lazy' decoding='async' alt='Laptop'
                                            style='width: 100%; height: 56px; object-fit: cover;'></div>
                                    <div type='subtitle' class='css-pbicth'>$product_name</div>
                                </a>
                            </div>";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="css-k9y40f">
            <div id="body2BannerHomePage-6160" class="css-1r9d2xy">
            </div>
            <div class="teko-row css-1qrgscw" style="margin-left: -8px; margin-right: -8px; row-gap: 16px;">
                <div class="teko-col teko-col-6 css-17ajfcv" style="padding-left: 8px; padding-right: 8px;">
                    <a data-testid="TekoLink" class="css-1h3fn00" href="/asus-rog-strix-g15-g513rc-hn038w--s220300268">
                        <div width="100%" class="css-egxwy8" data-content-region-name="horizontalBanner2"
                            data-track-content="true" data-content-name="Asus ROG tháng 10" data-content-index="0"
                            data-content-target="https://phongvu.vn/asus-rog-strix-g15-g513rc-hn038w--s220300268">
                            <img src="https://lh3.googleusercontent.com/XtKhmrgEt5uItWtpTA5kmLVhjiva1VZvRL1ROXtf0bvMYsGWOdV3tOiKpPFTg2B_KxvrVHQQtujsj0TkQVrsh9jsu_gKb4c1=w616-rw"
                                loading="lazy" hover="zoom" decoding="async" alt="Asus ROG tháng 10"
                                fetchpriority="auto" name="Asus ROG tháng 10" style="width: 100%; height: auto;">
                        </div>
                    </a>
                </div>
                <div class="teko-col teko-col-6 css-17ajfcv" style="padding-left: 8px; padding-right: 8px;"><a
                        data-testid="TekoLink" class="css-1h3fn00" href="/p/uu-dai-doc-quyen">
                        <div width="100%" class="css-egxwy8" data-content-region-name="horizontalBanner2"
                            data-track-content="true" data-content-name="Nitro tháng 10" data-content-index="1"
                            data-content-target="https://phongvu.vn/p/uu-dai-doc-quyen"><img
                                src="https://lh3.googleusercontent.com/pmpFbS7kiNXIwKXjB4-snm6L31inUSAHv2UtBLIliQKFknmG5Tw2T_JrgbzAUbLTs3LWU32Plx3SSQsZdpJnV1aSwOQrOE_P=w616-rw"
                                loading="lazy" hover="zoom" decoding="async" alt="Nitro tháng 10" fetchpriority="auto"
                                name="Nitro tháng 10" style="width: 100%; height: auto;"></div>
                    </a></div>
            </div>
        </div>
        <div class="css-k9y40f">
            <div id="laptop-chi-tu-8-99-trieu" class="css-1r9d2xy"></div>
            <div data-content-region-name="LAPTOP - CHỈ TỪ 13.99 triệuHorizontalBlock" data-track-content="true"
                class="css-12hd8et" style="min-height: 416px;"><img alt="LAPTOP - CHỈ TỪ 13.99 triệu"
                    src="https://lh3.googleusercontent.com/gVKL-i0fwAwNW07q1BlrXWrszrk3f-ktPdrMadJm2W8HX-fciH_nxiLcwz5EC9YmJLDLENX_H_BQIgFoabdpO4goEyMZVKJy=w1232"
                    width="100%" height="100%" class="css-186ot5r">
                <div class="css-1ld3dfv"><a target="_self" class="css-cbrxda" href="/c/sieu-sale-phong-vu-laptop-1">
                        <div type="title" color="white" class="title css-t2k8cn">LAPTOP - CHỈ TỪ 13.99 triệu</div>
                    </a><a target="_self" class="css-cbrxda" href="/c/sieu-sale-phong-vu-laptop-1">
                        <div color="white" class="css-180mh0r">Xem tất cả<svg fill="none" viewBox="0 0 24 24"
                                class="css-ymxljd" color="white" height="1em" width="1em"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.49976 19.0001L15.4998 12.0001L8.49976 5.00012" stroke="currentColor"
                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg></div>
                    </a></div>
                <div class="glide css-92r27m glide--swipeable glide--ltr glide--slider">
                    <div class="glide__track" data-glide-el="track">
                        <div class="glide__slides"
                            style="transition: transform 0ms cubic-bezier(0.165, 0.84, 0.44, 1) 0s; width: 4744px; transform: translate3d(0px, 0px, 0px);">
                            <?php
                            $sql_products = "SELECT * FROM `mathang` 
                            join dmhangsanxuat on `mathang`.MaHSX = dmhangsanxuat.MaHSX 
                            join anhmh on mathang.MaMH = anhmh.MaMH";
                            $result_products = mysqli_query($conn, $sql_products);
                            if (mysqli_num_rows($result_products) <> 0) {
                                while ($row_products = mysqli_fetch_assoc($result_products)) {
                                    $product_name = $row_products["TenMH"];
                                    $product_price = $row_products["DonGia"];
                                    $product_brand = $row_products["TenHSX"];
                                    $product_image = $row_products['DLAnh'];
                                    $product_id = $row_products['MaMH'];
                                    $price_sale = $product_price - $product_price * $product_sale - 500000;
                                    $sale_rate = $product_sale * 100;
                                    $save_price = $product_price - $price_sale;
                                    $price_sale_format = number_format($price_sale, 0, '.', '.');
                                    $product_price_format = number_format($product_price, 0, '.', '.');
                                    $save_price_format = number_format($save_price, 0, '.', '.');

                                    if ($price_sale > 13990000) {
                                        echo "<div class='glide__slide glide__slide--active'
                                            style='height: unset; width: 227.2px; margin-right: 5px; margin-left: 5px;'>
                                            <div class='css-1ei4kcr'>
                                                <div class='product-card css-1msrncq' data-track-content='true'
                                                    data-content-name='221101761' data-content-target='productDetail'><a
                                                        target='_self' class='css-pxdb0j' href='?page=detail&maMH=$product_id'>
                                                        <div class='css-4rhdrh'>
                                                            <div class='css-1v97aik'>
                                                                <div class='css-798fc'>
                                                                    <div height='100%' width='100%' class='css-1uzm8bv'><img
                                                                            src='$product_image'
                                                                            loading='lazy' hover='zoom' decoding='async'
                                                                            alt='Laptop HP 15s-fq2712TU (7C0X2PA) (i3-1115G4/RAM 8GB/256GB SSD/ Windows 11)'
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
                                                                    style='text-transform: uppercase; display: inline;'>$product_brand</div>
                                                            </div>
                                                            <div class='css-1ybkowq'>
                                                                <div type='caption' class='att-product-card-title css-1uunp2d'
                                                                    color='textPrimary'>
                                                                    <h3 title='$product_name'
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
                                                                        <div type='caption' color='primary500' class='css-2rwx6s'>
                                                                            -$sale_rate%
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a></div>
                                            </div>
                                        </div>";
                                    }

                                }
                            }
                            ?>
                        </div>
                        <div data-glide-el="controls" class="glide__arrows">
                            <div class="glide__arrow--override glide__arrow--left glide__arrow--disabled"
                                data-glide-dir="|<">
                            </div>
                            <div class="glide__arrow--override glide__arrow--right" data-glide-dir="|>"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="css-k9y40f">
            <div id="san-pham-noi-bat" class="css-1r9d2xy"></div>
            <div>
                <div class="css-1wr68sm">
                    <div class="css-ftpi71" style="padding-left: 16px;"><a target="_self" class="css-cbrxda"
                            href="/c/san-pham-hot">
                            <div type="title" color="textTitle" class="title css-1dlj6qw">SẢN PHẨM NỔI BẬT</div>
                        </a><a target="_self" class="css-cbrxda" href="/c/san-pham-hot">
                            <div color="" class="css-k6wbw">Xem tất cả<svg fill="none" viewBox="0 0 24 24"
                                    class="css-9w5ue6" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.49976 19.0001L15.4998 12.0001L8.49976 5.00012" stroke="currentColor"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg></div>
                        </a></div>
                    <div class="css-1y2krk01">
                        <?php
                        //phan trang
                        $rowsPerPage = 10;
                        $sql_rows = "SELECT * FROM `mathang` ";
                        $result_rows = mysqli_query($conn, $sql_rows);
                        $numRows = mysqli_num_rows($result_rows);
                        $maxPage = ceil($numRows / $rowsPerPage);

                        if (!isset($_GET['op_page']))
                            $_GET['op_page'] = 1;
                        $offset = ($_GET['op_page'] - 1) * $rowsPerPage;
                        $sql_products = "SELECT * FROM `mathang` 
                            join dmhangsanxuat on `mathang`.MaHSX = dmhangsanxuat.MaHSX 
                            join anhmh on mathang.MaMH = anhmh.MaMH LIMIT $offset, $rowsPerPage;";
                        $result_products = mysqli_query($conn, $sql_products);


                        $temp = $_GET['op_page'] * $rowsPerPage; // danh so thu tu
                        if ($temp <= $rowsPerPage)
                            $num = 0;
                        else
                            $num = $temp - $rowsPerPage;
                        if (mysqli_num_rows($result_products) <> 0) {
                            while ($row_products = mysqli_fetch_assoc($result_products)) {
                                $product_price = $row_products["DonGia"];
                                $product_brand = $row_products["TenHSX"];
                                $product_image = $row_products['DLAnh'];
                                $product_id = $row_products['MaMH'];
                                $price_sale = $product_price - $product_price * $product_sale - 500000;
                                $sale_rate = $product_sale * 100;
                                $save_price = $product_price - $price_sale;
                                $price_sale_format = number_format($price_sale, 0, '.', '.');
                                $product_price_format = number_format($product_price, 0, '.', '.');
                                $save_price_format = number_format($save_price, 0, '.', '.');

                                echo "<div type='grid' class='css-13w7uog'>
                                        <div class='product-card css-1msrncq' data-content-region-name='forYouListProduct'
                                            data-track-content='true' data-content-name='220303205' data-content-index='0'
                                            data-content-target='productDetail'><a target='_self' class='css-pxdb0j'
                                            href='?page=detail&maMH=$product_id'>
                                                <div class='css-4rhdrh'>
                                                    <div class='css-1v97aik'>
                                                        <div class='css-798fc'>
                                                            <div height='100%' width='100%' class='css-1uzm8bv'><img
                                                                    src='$product_image'
                                                                    loading='lazy' hover='zoom' decoding='async'
                                                                    alt='$product_image'
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
                                                            style='text-transform: uppercase; display: inline;'>$product_brand</div>
                                                    </div>
                                                    <div class='css-1ybkowq'>
                                                        <div type='caption' class='att-product-card-title css-1uunp2d'
                                                            color='textPrimary'>
                                                            <h3 title='$product_name' class='css-1xdyrhj'>$product_name</h3>
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
                                                                <div type='caption' color='primary500' class='css-2rwx6s'>
                                                                    -$sale_rate%</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>";

                            }
                        }

                        ?>
                    </div>
                </div>
                <div class="css-59raa2">
                    <?php
                    echo "<div class='css-59raa2' algin='center'>
                            <div class='css-1sdem05'>
                                <div class='css-19xt07j'>";
                    if ($_GET['op_page'] > 1) {
                        echo "<a href=" . $_SERVER['PHP_SELF'] . '?op_page=' . ($_GET['op_page'] - 1) . ">
                                                <div color='primary500' class='css-duo9ue' disabled=''>
                                                            <i class='fa-solid fa-angle-left'></i>
                                                </div>
                                            </a>";
                    }

                    for ($i = 1; $i <= $maxPage; $i++) {
                        if ($i == $_GET['op_page']) {
                            echo '<div color="primary500" class="css-j9nr2k" style="background-color: blue">
                                                    <div type="subtitle" color="white" class="css-1t6n552">' . $i . '</div>
                                                </div>';
                        } else {
                            echo '
                                                <div color="primary500" class="css-j9nr2k">
                                                    <div type="subtitle" color="white" class="css-1t6n552">' . "<a  href=" . $_SERVER["PHP_SELF"] . "?op_page=" . $i . ">" . $i . "</a>" . '</div>
                                                </div>
                                            ';
                        }
                    }
                    if ($_GET['op_page'] < $maxPage) {

                        echo "<a href = " . $_SERVER['PHP_SELF'] . "?op_page=" . ($_GET['op_page'] + 1) . ">
                                            <div color='primary500' class='css-j9nr2k' disabled=''>
                                                <i class='fa-solid fa-angle-right'></i>
                                            </div>
                                        </a>";
                    }
                    echo '</div>
                                </div>
                            </div>';
                    echo "<div></div>";
                    ?>
                </div>
            </div>
            <!-- <div class="css-59raa2">
                <div class="css-1sdem05">
                    <div class="css-19xt07j">
                        <div color="primary500" class="css-duo9ue" disabled=""><svg fill="none" viewBox="0 0 24 24"
                                size="16" class="css-26qhcs" color="placeholder" height="16" width="16"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.5 5L8.5 12L15.5 19" stroke="#82869E" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg></div>
                        <div color="primary500" class="css-j9nr2k">
                            <div type="subtitle" color="white" class="css-1t6n552">1</div>
                        </div>
                        <div color="primary500" class="css-rk91ax"><svg fill="none" viewBox="0 0 24 24" size="16"
                                class="css-26qhcs" color="placeholder" height="16" width="16"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.5 19L15.5 12L8.5 5" stroke="#82869E" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg></div>
                    </div>
                </div>
            </div> -->
        </div>
        <script>
            // $(document).ready(function () {
            //     // Thời gian chuyển đổi giữa các slide (đơn vị là mili giây)
            //     var interval = 10; // 3 giây

            //     // Tự động chuyển slide
            //     $('.carousel').carousel({
            //         interval: interval
            //     });
            // });

            // Set the date we're counting down to
            var countDownDate = new Date("Jan 5, 2024 15:37:25").getTime();

            // Update the count down every 1 second
            var x = setInterval(function () {

                // Get today's date and time
                var now = new Date().getTime();

                // Find the distance between now and the count down date
                var distance = countDownDate - now;

                // Time calculations for days, hours, minutes and seconds
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                // Output the result in an element with id="demo"
                document.getElementById("countdown").innerHTML = `
                <div class="css-145zk79">
                    <p class="css-11h7x84">Kết thúc sau <span class="css-dqb2r8">${days} ngày</span></p>
                    <div class="home-page--slide-child">
                    <div class="css-1x163zj">${hours}</div>
                    <div class="css-1x163zj">${minutes}</div>
                    <div class="css-1x163zj">${seconds}</div>
                    </div>
                </div>`;

                document.getElementById("countdown1").innerHTML = `
                <div class="css-145zk79">
                    <p class="css-11h7x84">Kết thúc sau <span class="css-dqb2r8">${days} ngày</span></p>
                    <div class="home-page--slide-child">
                    <div class="css-1x163zj">${hours}</div>
                    <div class="css-1x163zj">${minutes}</div>
                    <div class="css-1x163zj">${seconds}</div>
                    </div>
                </div>`;


                // If the count down is over, write some text 
                if (distance < 0) {
                    clearInterval(x);
                    document.getElementById("demo").innerHTML = "EXPIRED";
                }
            }, 1000);

            document.addEventListener("DOMContentLoaded", function () {
                new Glide("#glideContainer", {
                    type: "slider", // Đặt loại trượt là "carousel" để hiển thị 5 sản phẩm một lần
                    perView: 5, // Số lượng sản phẩm hiển thị trên mỗi trang
                    focusAt: 0,
                }).mount();

                const nextButton = document.querySelector(".glide__arrow--right");

                nextButton.addEventListener("click", function () {
                    const glideInstance = document.querySelector("#glideContainer").glide;
                    glideInstance.go(">"); // Điều này sẽ di chuyển sang trang tiếp theo
                });
            });
            document.addEventListener("DOMContentLoaded", function () {
                new Glide("#glideContainer1", {
                    type: "slider", // Đặt loại trượt là "carousel" để hiển thị 5 sản phẩm một lần
                    perView: 5, // Số lượng sản phẩm hiển thị trên mỗi trang
                    focusAt: 0,
                }).mount();

                const nextButton = document.querySelector(".glide__arrow--right");

                nextButton.addEventListener("click", function () {
                    const glideInstance = document.querySelector("#glideContainer1").glide;
                    glideInstance.go(">"); // Điều này sẽ di chuyển sang trang tiếp theo
                });
            });
        </script>
    </div>