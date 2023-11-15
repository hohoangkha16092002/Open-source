<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="post" enctype="multipart/form-data" style="">
        <table align=center style="background-color: pink;">
            <tr style="background-color: red; color: white">
                <th colspan="2">THÊM SỮA MỚI</th>
            </tr>
            <tr>
                <td>Mã Sữa:</td>
                <td>
                    <input type="text" id="ma_sua" name="ma_sua" required>
                </td>
            </tr>
            <tr>
                <td>Tên Sữa:</td>
                <td>
                    <input type="text" id="ten_sua" name="ten_sua" required>
                </td>
            </tr>
            <tr>
                <td>Hãng Sữa:</td>
                <td>
                    <select id="hang_sua" name="hang_sua" required>
                        <option value="AB">Abbott</option>
                        <option value="DL">Dutch Lady</option>
                        <option value="DM">Dumex</option>
                        <option value="DS">Daisy</option>
                        <option value="MJ">Mead Jonhson</option>
                        <option value="NTF">Nutifood</option>
                        <option value="VNM">Vinamilk</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Loại Sữa:</td>
                <td>
                    <select id="loai_sua" name="loai_sua" required>
                        <option value="SB">Sữa Bột</option>
                        <option value="SD">Sữa Đặc</option>
                        <option value="SC">Sữa Chua</option>
                        <option value="ST">Sữa Tươi</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Trọng Lượng:</td>
                <td>
                    <input type="number" id="trong_luong" name="trong_luong" required>
                </td>
            </tr>
            <tr>
                <td>Đơn Giá:</td>
                <td>
                    <input type="number" id="don_gia" name="don_gia" required>
                </td>
            </tr>
            <tr>
                <td>Thành Phần Dinh Dưỡng:</td>
                <td>
                    <textarea id="TP_Dinh_Duong" name="TP_Dinh_Duong" rows="4" required></textarea>
                </td>
            </tr>
            <tr>
                <td>Lợi ích:</td>
                <td>
                    <textarea id="loi_ich" name="loi_ich" rows="4" required></textarea>
                </td>
            </tr>
            <tr>
                <td>Hình Ảnh:</td>
                <td>
                    <input type="file" id="hinh_anh" name="hinh_anh" required>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <input type="submit" name="submit" value="Thêm mới">
                </td>
            </tr>
        </table>

    </form>
    <?php
    include('config.php');
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
    }

    if (isset($_POST['submit'])) {
        $ma_sua = $_POST["ma_sua"];
        $ten_sua = $_POST["ten_sua"];
        $hang_sua = $_POST["hang_sua"];
        $loai_sua = $_POST["loai_sua"];
        $trong_luong = $_POST["trong_luong"];
        $don_gia = $_POST["don_gia"];
        $mo_ta = $_POST["TP_Dinh_Duong"];
        $loi_ich = $_POST["loi_ich"];
        $hinh_anh = $_FILES["hinh_anh"]["name"];
        $sql = "INSERT INTO sua (Ma_sua, Ten_sua, Ma_hang_sua, Ma_loai_sua, Trong_luong, Don_gia, TP_Dinh_Duong, Loi_ich, Hinh) VALUES ('$ma_sua', '$ten_sua', '$hang_sua', '$loai_sua', '$trong_luong', '$don_gia', '$mo_ta', '$loi_ich', '$hinh_anh')";
        if ($conn->query($sql) === TRUE) {
            echo "<div style='text-align: center; font-weight: bold;'>Thêm sữa thành công!</div>";

            // Truy vấn lại thông tin sữa vừa thêm
            $select_sql = "SELECT * FROM sua 
            join hang_sua on sua.Ma_hang_sua = hang_sua.Ma_hang_sua
            WHERE Ma_sua = '$ma_sua'";
            $result = mysqli_query($conn, $select_sql);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();

                // Hiển thị thông tin sữa vừa thêm
                echo "<div>
                    <table border = 1 align='center' style = 'width: 600px'>";
                $formattedPrice = number_format($row["Don_gia"], 0, '.', '.');
                echo "<tr bgcolor='lightyellow'>
                    <th style = 'color: orange' colspan='2'><h2>" . $row["Ten_sua"] . "-" . $row["Ten_hang_sua"] . "</h2></th>
                </tr>
                <tr>
                    <td style = 'width: 200px'><img src='./img/Hinh_sua/" . $row["Hinh"] . " ' width= 200px he}ight= 270/></td>
                    <td>
                        <div>
                            <p><i><b>Thành phần dinh dưỡng:</b></i> <br>" .
                    $row["TP_Dinh_Duong"] . "</p>
                            <p><i><b>Lợi ích:</b> </i><br>" .
                    $row["Loi_ich"] . "</p>
                            <p style = 'color: red'><i><b style = 'color: black'>Trọng lượng: </b></i> " . $row["Trong_luong"] . " gr  -  <i><b style = 'color: black'>Đơn giá: </b></i>$formattedPrice VNĐ</p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td style='text-align: right'>
                    </td>
                    <td></td>
                </tr>
                </table>
            </div>";
            }
        } else {
            echo "Lỗi: " . $sql . "<br>" . $conn->error;
        }
    }
    ?>


</body>

</html>