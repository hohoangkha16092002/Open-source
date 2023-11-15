<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 2.8</title>
</head>

<body>
    <form action="" method="post">
        <table align=center style="background-color: pink;">
            <tr style="background-color: pink;">
                <th colspan="3" style="color:  red;">TÌM KIẾM THÔNG TIN SỮA</th>
            </tr>
            <tr style="background-color: white;">
                <td style="color:  red;"><b>Loại sữa:</b>
                    <select id="loai_sua" name="loai_sua" required>
                        <option value="SB">Sữa Bột</option>
                        <option value="SD">Sữa Đặc</option>
                        <option value="SC">Sữa Chua</option>
                        <option value="ST">Sữa Tươi</option>

                        <!-- Thêm các tùy chọn Loại Sữa khác vào đây -->
                    </select>
                </td>
                <td style="color:  red;"><b>Hãng sữa:</b>
                    <select id="hang_sua" name="hang_sua" required>
                        <option value="AB">Abbott</option>
                        <option value="DL">Dutch Lady</option>
                        <option value="DM">Dumex</option>
                        <option value="DS">Daisy</option>
                        <option value="MJ">Mead Jonhson</option>
                        <option value="NTF">Nutifood</option>
                        <option value="VNM">Vinamilk</option>
                        <!-- Thêm các tùy chọn Hãng Sữa khác vào đây -->
                    </select>
                </td>
                <td></td>
            </tr>
            <tr style="background-color: white;">
                <td style="color:  red;"><b>Tên sữa:</b></td>
                <td>
                    <input type="text" name="input" value="<?php
                    if (isset($_POST['submit'])) {
                        echo $_POST['input'];
                    }
                    ?>">
                </td>
                <td>
                    <input type="submit" name="submit" value="Tìm kiếm" style="background-color: pink;">
                </td>
            </tr>
        </table>
    </form>
    <?php
    include("config.php");
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
    }

    if (isset($_POST['submit'])) {
        $input = $_POST['input'];
        $hangsua = $_POST['hang_sua'];
        $loaisua = $_POST['loai_sua'];
        $sql = "SELECT Ten_sua, hang_sua.Ten_hang_sua, Hinh, TP_Dinh_Duong, Loi_ich, Trong_luong, Don_gia 
        FROM sua 
        JOIN hang_sua ON sua.Ma_hang_sua = hang_sua.Ma_hang_sua 
        WHERE sua.Ten_sua LIKE '%$input%' and sua.Ma_hang_sua = '$hangsua' and sua.Ma_loai_sua = '$loaisua'";

        $result = mysqli_query($conn, $sql);
        $numRows = mysqli_num_rows($result);
        $msg = "";
        if ($numRows > 0) {
            echo "<div style='text-align: center; font-weight: bold'>Có $numRows sản phẩm nào được tìm thấy</div>";
            while ($row = mysqli_fetch_row($result)) {
                echo "<div>
                    <table border = 1 align='center' style = 'width: 600px'>";
                $formattedPrice = number_format($row[6], 0, '.', '.');
                echo "<tr bgcolor='lightyellow'>
                    <th style = 'color: orange' colspan='2'><h2>$row[0] - $row[1]</h2></th>
                </tr>
                <tr>
                    <td style = 'width: 200px'><img src='./img/Hinh_sua/$row[2] ' width= 200px height= 270/></td>
                    <td>
                        <div>
                            <p><i><b>Thành phần dinh dưỡng:</b> </i><br>
                            $row[3]</p>
                            <p><i><b>Lợi ích:</b> </i><br>
                            $row[4]</p>
                            <p style = 'color: red'><i><b style = 'color: black'>Trọng lượng: </b></i>$row[5] gr  -  <i><b style = 'color: black'>Đơn giá: </b></i>$formattedPrice VNĐ</p>
                        </div>
                    </td>
                </tr>
                </table>
            </div>";
            }
        } else
            echo "<div style='text-align: center; font-weight: bold;'>Không có sản phẩm nào được tìm thấy</div>";
    }
    ?>

</body>

</html>