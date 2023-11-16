<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        table {
            margin-left: auto;
            margin-right: auto;
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: solid 0.5px;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        th {
            background-color: #04AA6D;
            color: white;
        }

        .center {
            margin-left: auto;
            margin-right: auto;
            text-align: center;
        }
    </style>
</head>

<body>
    <?php
    require('config.php');
    $conn = mysqli_connect($servername, $username, $password, $dbname)
        or die('Không thể kết nối tới database' . mysqli_connect_error());
    mysqli_set_charset($conn, 'utf8');

    if (isset($_GET['hang_sua'])) {
        $hang_sua = $_GET['hang_sua'];
        $sql = "SELECT `sua`.`Hinh`,`sua`.`Ten_sua`, `sua`.`Trong_luong`, `sua`.`Don_gia` FROM sua WHERE Ma_hang_sua = '$hang_sua'";
    } elseif (isset($_GET['loai_sua'])) {
        $loai_sua = $_GET['loai_sua'];
        $sql = "SELECT `sua`.`Hinh`,`sua`.`Ten_sua`, `sua`.`Trong_luong`, `sua`.`Don_gia` FROM sua WHERE Ma_loai_sua = '$loai_sua'";
    } else {
        $sql = "SELECT `sua`.`Hinh`,`sua`.`Ten_sua`, `sua`.`Trong_luong`, `sua`.`Don_gia` FROM sua";
    }
    $result = mysqli_query($conn, $sql);
    if (!$result)
        die('<br> <b>Query failed</b>');
    $numRows = mysqli_num_rows($result);

    //mysqli_close($conn);
    ?>
    <header>
        <img src="img/banner.jpg" alt="" width="100%" height="200px">
    </header>
    <div class="container" style="min-width: 100%;">
        <div class="row" style="min-width: 100%;">
            <div class="div-left col-3 bg-light">
                <div class="hang-sua">
                    <h5>Sản phẩm theo hãng sữa</h5>
                    <ul style="list-style-type: none;">
                        <li><a href="<?php echo $_SERVER['PHP_SELF'] . "?hang_sua=VNM"; ?>">Vinamilk</a></li>
                        <li><a href="<?php echo $_SERVER['PHP_SELF'] . "?hang_sua=NTF"; ?>">Nutifood</a></li>
                        <li><a href="<?php echo $_SERVER['PHP_SELF'] . "?hang_sua=MJ"; ?>">Mead Jonhson</a></li>
                        <li><a href="<?php echo $_SERVER['PHP_SELF'] . "?hang_sua=DS"; ?>">Daisy</a></li>
                        <li><a href="<?php echo $_SERVER['PHP_SELF'] . "?hang_sua=DM"; ?>">Dumex</a></li>
                        <li><a href="<?php echo $_SERVER['PHP_SELF'] . "?hang_sua=DL"; ?>">Dutch Lady</a></li>
                        <li><a href="<?php echo $_SERVER['PHP_SELF'] . "?hang_sua=AB"; ?>">Abbott</a></li>
                    </ul>
                </div>
                <div class="loai-sua">
                    <h5>Sản phẩm sữa theo loại</h5>
                    <ul style="list-style-type: none;">
                        <li><a href="<?php echo $_SERVER['PHP_SELF'] . "?loai_sua=SB"; ?>">Sữa bột</a></li>
                        <li><a href="<?php echo $_SERVER['PHP_SELF'] . "?loai_sua=SC"; ?>">Sữa chua</a></li>
                        <li><a href="<?php echo $_SERVER['PHP_SELF'] . "?loai_sua=SD"; ?>">Sữa đặc</a></li>
                        <li><a href="<?php echo $_SERVER['PHP_SELF'] . "?loai_sua=ST"; ?>">Sữa tươi</a></li>
                    </ul>
                </div>
                <div>
                    <img src="img/left1.jpg" width="100%" alt="">
                </div>
            </div>
            <div class="div-center col-6">
                <?php
                if ($numRows <> 0) {
                    echo "<div style='overflow-x: auto;'>
                        <table>
                            <tr style='background:pink;'><th colspan='6'><p class='center'>THÔNG TIN SỮA</p></th></tr>
                            <tr>
                                <th style='text-align: center;'>Hình</th>
                                <th style='text-align: center;'>Tên Sữa</th>
                                <th style='text-align: center;'>Trọng Lượng</th>
                                <th style='text-align: center;'>Đơn giá</th>
                            </tr>";
                    while ($rows = mysqli_fetch_array($result)) {
                        echo "<td width='20%' height='30px' align='center'><img width='50px' src='./img/Hinh_sua/{$rows['Hinh']}' alt=''></td>";
                        echo "<td>{$rows['Ten_sua']}</td>";
                        echo "<td>{$rows['Trong_luong']} gram</td>";
                        echo "<td>{$rows['Don_gia']} VNĐ</td>";
                        echo "</tr>";
                    }
                    echo "</table> </div>";
                    $re = mysqli_query($conn, 'select * from sua');
                    $numRows = mysqli_num_rows($re);
                    echo "<div class='center'>";
                    echo "</div>";
                    //    echo 'Tong so trang la: '.$maxPage;
                }
                ?>
            </div>
            <div class="div-right col-3 bg-light">
                <div>
                    <img src="img/right1.jpg" width="100%" alt="">
                    <img src="img/right2.jpg" width="100%" alt="">
                    <img src="img/right3.jpg" width="100%" alt="">
                    <img src="img/right4.jpg" width="100%" alt="">
                    <img src="img/right5.jpg" width="100%" alt="">
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div style="background-color: blue;">
            <p style="text-align: center; color:white; margin-bottom: 0rem;">2007 - 2008 Siêu thị sữa happy milk</p>
            <p style="text-align: center; color:white; margin-bottom: 0rem;">Địa chỉ: Số 1bis Đường Nguyễn Du Quận 1
                TP.HCM - Điện thoại: (08) 8741258</p>
            <p style="text-align: center; color:white; margin-bottom: 0rem;">happy_milk@milk.com.vn</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>