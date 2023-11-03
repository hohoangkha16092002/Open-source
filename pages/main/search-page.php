<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!-- <link rel="stylesheet" type="text/css" href="path/to/jquery-ui.css"> -->
    <script src="path/to/jquery.js"></script>
    <script src="path/to/jquery-ui.js"></script>
    <style>
    </style>
</head>

<?php
include("config.php");
$search = $_GET['search-input'];
if (isset($_GET['filter'])) {
    $search = $_GET['Asus'];
    header("Location: ?page=search&search-input=$search");
}
?>

<body>
    <div style="background-color: #ececec;">
        <div class="css-rf24tk">
            <div class="css-tqzoy9">
                <a href="/" class="breadcrumb-item css-1s8chay">
                    <div type="body" class="css-kwe6s1"><svg fill="none" viewBox="0 0 24 24" size="24"
                            class="css-26qhcs" color="placeholder" height="24" width="24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M11.512 1.43055C11.7928 1.18982 12.2073 1.18982 12.4881 1.43055L21.4881 9.14455C21.7264 9.3488 21.8123 9.67984 21.7035 9.9742C21.5946 10.2686 21.3139 10.464 21 10.464H20.75V19.18C20.75 20.1852 19.9665 21 19 21H15V16.1776C15 15.6001 14.7542 15.0462 14.3166 14.6378C13.879 14.2294 13.2856 14 12.6667 14H11.3333C10.7144 14 10.121 14.2294 9.6834 14.6378C9.24583 15.0462 9 15.6001 9 16.1776V21H5C4.0335 21 3.25 20.1852 3.25 19.18V10.464H3.00004C2.68618 10.464 2.40551 10.2686 2.29662 9.9742C2.18773 9.67984 2.27365 9.3488 2.51195 9.14455L11.512 1.43055Z"
                                fill="currentColor"></path>
                        </svg></div>
                </a>
                <div class="css-889chh"><svg fill="none" viewBox="0 0 24 24" size="16" class="css-26qhcs"
                        color="placeholder" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.49976 19.0001L15.4998 12.0001L8.49976 5.00012" stroke="currentColor"
                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg></div><a href="/c/epson-ecotank" class="breadcrumb-item css-1s8chay">
                    <div type="body" class="css-kwe6s1">Thiết bị văn phòng</div>
                </a>
            </div>
        </div>
        <form method="post">
            <div class="css-rf24tk">
                <div class="teko-row css-ezmamy" style="margin-left: -8px; margin-right: -8px; row-gap: 16px;">
                    <div class="teko-col teko-col-2 css-17ajfcv" style="padding-left: 8px; padding-right: 8px;">
                        <div class="css-1psc7jy">
                            <div type="subtitle" class="css-y7yt88">Khoảng giá</div>
                            <div class="css-9bznj9">
                                <div class="css-1n5trgy" direction="row"><span class="css-11mfy90"
                                        name="min_price">0đ</span><span class="css-11mfy90"
                                        name="max_price">75.000.000đ</span></div>
                                <div class="css-1vlfwg">
                                    <div color="primary" class="css-1sv7nws">
                                        <div class="slider-track css-tipbfv">
                                            <div class="slider-track-fill" style="width: 100%; left: 0%;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="css-1veiyrs">
                                <div width="100%" color="border" class="css-yae08c"></div>
                            </div>
                            <div class="css-0">
                                <div class="css-gr7w3w">
                                    <div type="subtitle" class="css-q3day0">Thương hiệu</div><svg fill="none"
                                        viewBox="0 0 24 24" class="active css-500jnn" color="textPrimary" height="1em"
                                        width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5 8.5L12 15.5L19 8.5" stroke="#82869E" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </div>
                                <div class="active css-1i3vt0z">
                                    <div direction="row" class="css-1skvw03">
                                        <div style="min-width: 100%;"><label class="check-box css-1p9luqs">
                                                <div class="">
                                                    <input type="checkbox" name="products[]" value="AC">
                                                    <div class="checkbox-inner css-gfk8lf">
                                                        <svg fill="none" viewBox="0 0 24 24" size="12"
                                                            class="css-u5ggi9" color="transparent" height="12"
                                                            width="12" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M5 12.4545L9.375 17L19 7" stroke="#82869E"
                                                                stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div type="body" class="checkbox-label css-6r3s23"
                                                    style="flex: 1 1 0%;">
                                                    <span>
                                                        <span style="display: flex;">
                                                            <div>ACER</div>
                                                        </span>
                                                        <span class="css-22xpbp" data-popper-reference-hidden="false"
                                                            data-popper-escaped="true" data-popper-placement="right"
                                                            style="position: absolute; inset: 0px auto auto 0px; visibility: hidden; z-index: 999; transform: translate3d(106px, 150px, 0px);"><span
                                                                class="arrow-left css-3mq3j4" data-placement="auto"
                                                                style="position: absolute; top: 0px; transform: translate3d(0px, 15px, 0px);"></span>
                                                            <div type="body" color="white" class="css-2h64mz">ACER</div>
                                                        </span>
                                                    </span>
                                                </div>
                                            </label>
                                        </div>

                                        <!-- Begin Test -->
                                        <?php
                                        $sql_products_brands = "SELECT * FROM dmhangsanxuat";
                                        $result_products_brands = mysqli_query($conn, $sql_products_brands);

                                        while ($row_products_brands = mysqli_fetch_array($result_products_brands)) {
                                            $MaHSX = $row_products_brands["MaHSX"];
                                            $TenHSX = $row_products_brands["TenHSX"];
                                            echo '<div style="min-width: 100%;"><label class="check-box css-1p9luqs">
                                                    <div class="">
                                                        <input type="checkbox" name="products[]" value="' . $MaHSX . '">
                                                        <div class="checkbox-inner css-gfk8lf">
                                                            <svg fill="none" viewBox="0 0 24 24" size="12"
                                                                class="css-u5ggi9" color="transparent" height="12"
                                                                width="12" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M5 12.4545L9.375 17L19 7" stroke="#82869E"
                                                                    stroke-width="1.5" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div type="body" class="checkbox-label css-6r3s23"
                                                        style="flex: 1 1 0%;" name="' . $TenHSX . '">
                                                        <span>
                                                            <span style="display: flex;">
                                                                <div>' . $TenHSX . '</div>
                                                            </span>
                                                            <span class="css-22xpbp" data-popper-reference-hidden="false"
                                                                data-popper-escaped="true" data-popper-placement="right"
                                                                style="position: absolute; inset: 0px auto auto 0px; visibility: hidden; z-index: 999; transform: translate3d(106px, 150px, 0px);"><span
                                                                    class="arrow-left css-3mq3j4" data-placement="auto"
                                                                    style="position: absolute; top: 0px; transform: translate3d(0px, 15px, 0px);"></span>
                                                                <div type="body" color="white" class="css-2h64mz">' . $TenHSX . '</div>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </label>
                                            </div>';
                                        }
                                        ?>
                                        <!-- End Test -->
                                    </div>

                                </div>
                            </div>
                            <div class="css-1veiyrs">
                                <div width="100%" color="border" class="css-yae08c"></div>
                            </div>
                            <div class="css-0">
                                <div class="css-gr7w3w">
                                    <div type="subtitle" class="css-q3day0">Nhu cầu</div><svg fill="none"
                                        viewBox="0 0 24 24" class="active css-500jnn" color="textPrimary" height="1em"
                                        width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5 8.5L12 15.5L19 8.5" stroke="#82869E" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </div>
                                <div class="active css-1i3vt0z">
                                    <div direction="row" class="css-1skvw03">
                                        <div style="min-width: 100%;"><label class="check-box css-1p9luqs">
                                                <div><input type="checkbox" name="MaLMH[]" value="GMLT">
                                                    <div class="checkbox-inner css-gfk8lf"><svg fill="none"
                                                            viewBox="0 0 24 24" size="12" class="css-u5ggi9"
                                                            color="transparent" height="12" width="12"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M5 12.4545L9.375 17L19 7" stroke="#82869E"
                                                                stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                        </svg></div>
                                                </div>
                                                <div type="body" class="checkbox-label css-6r3s23"
                                                    style="flex: 1 1 0%;">
                                                    <span><span style="display: flex;">
                                                            <div>Laptop GAMING</div>
                                                        </span><span class="css-22xpbp"
                                                            data-popper-reference-hidden="false"
                                                            data-popper-escaped="true" data-popper-placement="right"
                                                            style="position: absolute; inset: 0px auto auto 0px; visibility: hidden; z-index: 999; transform: translate3d(127px, 302px, 0px);"><span
                                                                class="arrow-left css-3mq3j4" data-placement="auto"
                                                                style="position: absolute; top: 0px; transform: translate3d(0px, 15px, 0px);"></span>
                                                            <div type="body" color="white" class="css-2h64mz">Laptop
                                                                GAMING
                                                            </div>
                                                        </span></span>
                                                </div>
                                            </label></div>
                                        <div style="min-width: 100%;"><label class="check-box css-1p9luqs">
                                                <div class=""><input type="checkbox" name="MaLMH[]" value="BSLT">
                                                    <div class="checkbox-inner css-gfk8lf"><svg fill="none"
                                                            viewBox="0 0 24 24" size="12" class="css-u5ggi9"
                                                            color="transparent" height="12" width="12"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M5 12.4545L9.375 17L19 7" stroke="#82869E"
                                                                stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                        </svg></div>
                                                </div>
                                                <div type="body" class="checkbox-label css-6r3s23"
                                                    style="flex: 1 1 0%;">
                                                    <span><span style="display: flex;">
                                                            <div>Laptop Văn Phòng</div>
                                                        </span><span class="css-22xpbp"
                                                            data-popper-reference-hidden="false"
                                                            data-popper-escaped="true" data-popper-placement="right"
                                                            style="position: absolute; inset: 0px auto auto 0px; visibility: hidden; z-index: 999; transform: translate3d(138px, 334px, 0px);"><span
                                                                class="arrow-left css-3mq3j4" data-placement="auto"
                                                                style="position: absolute; top: 0px; transform: translate3d(0px, 15px, 0px);"></span>
                                                            <div type="body" color="white" class="css-2h64mz">Laptop Văn
                                                                Phòng</div>
                                                        </span></span>
                                                </div>
                                            </label></div>
                                        <div style="min-width: 100%;"><label class="check-box css-1p9luqs">
                                                <div><input type="checkbox" name="MaLMH[]" value="TIOLT">
                                                    <div class="checkbox-inner css-gfk8lf"><svg fill="none"
                                                            viewBox="0 0 24 24" size="12" class="css-u5ggi9"
                                                            color="transparent" height="12" width="12"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M5 12.4545L9.375 17L19 7" stroke="#82869E"
                                                                stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                        </svg></div>
                                                </div>
                                                <div type="body" class="checkbox-label css-6r3s23"
                                                    style="flex: 1 1 0%;">
                                                    <span><span style="display: flex;">
                                                            <div>Laptop Cảm Ứng</div>
                                                        </span><span class="css-22xpbp"
                                                            data-popper-reference-hidden="false"
                                                            data-popper-escaped="true" data-popper-placement="right"
                                                            style="position: absolute; inset: 0px auto auto 0px; visibility: hidden; z-index: 999; transform: translate3d(110px, 364px, 0px);"><span
                                                                class="arrow-left css-3mq3j4" data-placement="auto"
                                                                style="position: absolute; top: 0px; transform: translate3d(0px, 15px, 0px);"></span>
                                                            <div type="body" color="white" class="css-2h64mz">Laptop Cảm
                                                                Ứng
                                                            </div>
                                                        </span></span>
                                                </div>
                                            </label></div>
                                    </div>
                                </div>

                            </div>
                            <div class="css-1veiyrs">
                                <div width="100%" color="border" class="css-yae08c"></div>
                            </div>
                            <input type="submit" value="LỌC">
                            <div class="css-1veiyrs">
                                <div width="100%" color="border" class="css-yae08c"></div>
                            </div>
                        </div>

                    </div>
        </form>
        <?php
        if (isset($_GET['search-input'])){
            $searchvalue = $_GET['search-input'];
        }
        if (isset($_POST['products'])) {
            $valueproduct = $_POST['products'];
            $searchvalue ='';
        } else {
            $valueproduct = [];
        }

        if (isset($_POST['MaLMH'])) {
            $loaimh = $_POST['MaLMH'];
        } else {
            $loaimh = []; // Gán một mảng rỗng nếu không tồn tại
        }

        $nameloaimh = implode(',', $loaimh);
        $namepd = implode(', ', $valueproduct);

        ?>
        <div class="teko-col teko-col-10 css-17ajfcv" style="padding-left: 8px; padding-right: 8px;">
            <div class="teko-row teko-row-start teko-row-baseline css-17jbfbn">
                <h1 class="css-7nrxrf">Tìm kiếm:
                    <?php echo "$searchvalue" ?>
                    <?php if ($namepd == 'AC') {
                        echo 'Acer';
                    }elseif($namepd == 'AP'){
                        echo 'Apple';
                    }elseif($namepd == 'HP'){
                        echo 'HP';
                    }elseif($namepd == 'DE'){
                        echo 'DELL';
                    }elseif($namepd == 'AS'){
                        echo 'Asus';
                    }elseif($namepd == 'LE'){
                        echo 'Lenovo';
                    }elseif($namepd == 'LG'){
                        echo 'LG';
                    }elseif($namepd == 'MI'){
                        echo 'Microsoft';
                    }elseif($namepd == 'MS'){
                        echo 'MSI';
                    }
                    ?>
                    <?php 
                    if($nameloaimh == 'BSLT'){
                         echo 'Laptop Văn Phòng';
                    }elseif($nameloaimh == 'GMLT'){
                        echo 'Laptop Gaming';
                    }elseif($nameloaimh == 'TIOLT'){
                        echo 'Laptop Cảm Ứng';
                    }
                    ?>
                </h1>
                <div type="title" color="textSecondary" class="css-18xfrv"></div>
            </div>
            <div class="css-e7jx9s">
                <div class="css-v6thbz" direction="row">
                    <div height="100%" direction="row" class="css-1k985bk">
                        <div type="subtitle" class="css-1ew3940">Sắp xếp theo</div>
                        <div class="css-1w3mv8m" style="padding: 0.5rem; margin-right: 1rem;">
                            <div type="body" class="css-1lchwqw">Khuyến mãi tốt nhất</div>
                        </div>
                        <div class="css-1w3mv8m" style="padding: 0.5rem; margin-right: 1rem;">
                            <div type="body" class="css-1lchwqw">Giá tăng dần</div>
                        </div>
                        <div class="css-1w3mv8m" style="padding: 0.5rem; margin-right: 1rem;">
                            <div type="body" class="css-1lchwqw">Giá giảm dần</div>
                        </div>
                        <div class="css-1w3mv8m" style="padding: 0.5rem; margin-right: 1rem;">
                            <div type="body" class="css-1lchwqw">Sản phẩm mới nhất</div>
                        </div>
                        <div class="css-1w3mv8m" style="padding: 0.5rem; margin-right: 1rem;">
                            <div type="body" class="css-1lchwqw">Sản phẩm bán chạy nhất</div>
                        </div>
                    </div>
                </div>
                <div class="css-1y2krk0">
                    <?php

                    // Sử dụng chuỗi đã chuyển đổi
                    
                    if (isset($_GET['search-input'])) {
                        $search = $_GET['search-input'];
                        if (isset($_POST['products'])) {
                            $selectedProducts = $_POST['products'];
                            $search = '';
                        } else {
                            $selectedProducts = [];
                        }
                        if (isset($_POST['MaLMH'])) {
                            $selectedLMH = $_POST['MaLMH'];
                        } else {
                            $selectedLMH = []; // Gán một mảng rỗng nếu không tồn tại
                        }

                        // Chuyển mảng thành chuỗi bằng hàm implode
                        $nameLMH = implode(',', $selectedLMH);
                        $nameHSX = implode(', ', $selectedProducts);
                        if (empty($nameHSX) && empty($nameLMH)) {
                            $query = "SELECT * FROM `mathang` 
                                    join anhmh on mathang.MaMH = anhmh.MaMH
                                    join dmhangsanxuat on mathang.MaHSX = dmhangsanxuat.MaHSX
                                    join dmloaimathang on mathang.MaLMH = dmloaimathang.MaLMH
                                    WHERE TenMH LIKE '%$search%' || TenLoai LIKE '%$search%' || TenHSX LIKE '%$search%'";
                        } elseif (!empty($nameHSX) && empty($nameLMH)) {
                            $query = "SELECT * FROM `mathang` 
                            JOIN anhmh ON mathang.MaMH = anhmh.MaMH
                            WHERE TenMH LIKE '%$search%' AND MaHSX = '$nameHSX'";
                        } elseif (empty($nameHSX) && !empty($nameLMH)) {
                            $query = "SELECT * FROM `mathang` 
                            JOIN anhmh ON mathang.MaMH = anhmh.MaMH
                            WHERE MaLMH = '$nameLMH'";
                        } else {
                            $query = "SELECT * FROM `mathang` 
                            JOIN anhmh ON mathang.MaMH = anhmh.MaMH
                            WHERE TenMH LIKE '%$search%' AND MaHSX = '$nameHSX' AND MaLMH = '$nameLMH'";
                        }
                        $result_products = mysqli_query($conn, $query);

                        if (mysqli_num_rows($result_products) <> 0) {
                            while ($row_products = mysqli_fetch_assoc($result_products)) {
                                $product_name = $row_products["TenMH"];
                                $product_price = $row_products["DonGia"];
                                $product_price = number_format($product_price, 0, '.', '.');
                                $product_image = $row_products['DLAnh'];
                                $product_id = $row_products['MaMH'];
                                echo "<div type='grid' class='css-13w7uog'>
                                       <div class='product-card css-1msrncq' data-content-region-name='itemProductResult'
                                           data-track-content='true' data-content-name='231002080' data-content-index='0'
                                           data-content-target='productDetail'><a target='_self' class='css-pxdb0j'
                                               href='?page=detail&maMH=$product_id'>
                                               <div class='css-4rhdrh'>
                                                   <div class='css-1v97aik'>
                                                       <div class='css-798fc'>
                                                           <div height='100%' width='100%' class='css-1uzm8bv'><img
                                                                   src='$product_image'
                                                                   loading='lazy' hover='zoom' decoding='async'
                                                                   alt='Máy in phun màu đa chức năng Epson L3550 STD'
                                                                   style='width: 100%; height: 100%; object-fit: contain; position: absolute; top: 0px; left: 0px;'>
                                                           </div>
                                                       </div>
                                                       <div class='css-14q2k9d'>
                                                           <div class='css-zb7zul'>
                                                               <div class='css-1bqeu8f'>TIẾT KIỆM</div>
                                                               <div class='css-1rdv2qd'>600.000&nbsp;₫</div>
                                                           </div>
                                                       </div>
                                                   </div>
                                                   <div class='css-68cx5s'>
                                                       <div type='body' color='textSecondary' class='product-brand-name css-90n0z6'
                                                           style='text-transform: uppercase; display: inline;'>EPSON</div>
                                                   </div>
                                                   <div class='css-1ybkowq'>
                                                       <div type='caption' class='att-product-card-title css-1uunp2d'
                                                           color='textPrimary'>
                                                           <h3 title='$product_name'
                                                               class='css-1xdyrhj'>$product_name
                                                           </h3>
                                                       </div>
                                                   </div>
                                                   <div class='css-kgkvir'>
                                                       <div class='css-1co26wt'>
                                                           <div type='subtitle' class='att-product-detail-latest-price css-do31rh'
                                                               color='primary500'>$product_price.₫</div>
                                                           <div class='css-3mjppt'>
                                                               <div type='caption'
                                                                   class='att-product-detail-retail-price css-18z00w6'
                                                                   color='textSecondary'>6.590.000&nbsp;₫</div>
                                                               <div type='caption' color='primary500' class='css-2rwx6s'>-9.1%
                                                               </div>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </a></div>
                                   </div>";
                            }
                        } else {
                            echo "Không tìm thấy sản phẩm nào.";
                        }
                    }
                    ?>

                </div>
            </div>
            <div class="teko-row css-5u4xaw">
                <div class="css-6gqh1c">
                    <div class="css-19xt07j">
                        <div color="primary500" disabled="" class="css-duo9ue"><svg fill="none" viewBox="0 0 24 24"
                                size="16" class="css-26qhcs" color="placeholder" height="16" width="16"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.5 5L8.5 12L15.5 19" stroke="#82869E" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg></div><a color="primary500" href="/c/may-in" class="css-c1go4p">
                            <div type="subtitle" class="css-q3day0">1</div>
                        </a><a color="primary500" href="/c/may-in?page=2" class="css-1i9lltx">
                            <div type="subtitle" class="css-q3day0">2</div>
                        </a><a color="primary500" href="/c/may-in?page=3" class="css-1i9lltx">
                            <div type="subtitle" class="css-q3day0">3</div>
                        </a>
                        <div color="primary500" class="css-rk91ax"><svg fill="none" viewBox="0 0 24 24" size="16"
                                class="css-26qhcs" color="placeholder" height="16" width="16"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.5 19L15.5 12L8.5 5" stroke="#82869E" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</body>
<script>
    $(function () {
        $(".slider-track").slider({
            range: true, // Cho phép chọn khoảng giá
            min: 0, // Giá tối thiểu
            max: 75000000, // Giá tối đa
            values: [0, 75000000], // Khoảng giá mặc định

            // Hàm thay đổi giá trị khi kéo slider
            slide: function (event, ui) {
                var minValue = ui.values[0];
                var maxValue = ui.values[1];
                // Cập nhật giá trị hiển thị
                $(".css-11mfy90").eq(0).text(minValue + 'đ');
                $(".css-11mfy90").eq(1).text(maxValue + 'đ');
            }
        });
    });
</script>

</html>