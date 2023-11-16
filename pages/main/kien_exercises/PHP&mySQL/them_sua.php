<!DOCTYPE html>
<html>

<head>
    <title>Biểu mẫu thêm sữa</title>
</head>

<body>
    <?php
    include('config.php');

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
            echo "Thêm sữa thành công!";
            
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
                    <th style = 'color: orange' colspan='2'><h2>". $row["Ten_sua"] . "-" . $row["Ten_hang_sua"]. "</h2></th>
                </tr>
                <tr>
                    <td style = 'width: 200px'><img src='./img/Hinh_sua/". $row["Hinh"] ." ' width= 200px he}ight= 270/></td>
                    <td>
                        <div>
                            <p><i><b>Thành phần dinh dưỡng:</b></i> <br>" .
                            $row["TP_Dinh_Duong"]. "</p>
                            <p><i><b>Lợi ích:</b> </i><br>" .
                            $row["Loi_ich"]. "</p>
                            <p style = 'text-align: right'><i><b>Trọng lượng: </b></i> ". $row["Trong_luong"]." gr  -  <i><b>Đơn giá: </b></i>$formattedPrice VNĐ</p>
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
    
    // Đóng kết nối
    $conn->close();
        // if ($conn->query($sql) === TRUE) {
        //     echo "Thêm sữa thành công!";
        //     $new_sua_id = $conn->insert_id;
        //     $sql =
        //         "SELECT Ten_sua, hang_sua.Ten_hang_sua, Hinh, TP_Dinh_Duong, Loi_ich, Trong_luong, Don_gia 
        //         FROM sua 
        //         JOIN hang_sua ON sua.Ma_hang_sua = hang_sua.Ma_hang_sua 
        //         WHERE Ma_sua = '$new_sua_id'";
        //     $result = mysqli_query($conn, $sql);
        //     if ($result->num_rows > 0) {
        //         $row = $result->fetch_assoc();
            
        //         if ($row) {
                   
        //         } else {
        //             echo "Không tìm thấy dữ liệu sữa vừa thêm.";
        //         }
        //     } 
            
        //         }
        
        // }
        

    // Đóng kết nối
    ?>

    <h2>Thêm Sữa</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="ma_sua">Mã Sữa:</label>
        <input type="text" id="ma_sua" name="ma_sua" required><br>

        <label for="ten_sua">Tên Sữa:</label>
        <input type="text" id="ten_sua" name="ten_sua" required><br>

        <label for="hang_sua">Hãng Sữa:</label>
        <select id="hang_sua" name="hang_sua" required>
            <option value="AB">Abbott</option>
            <option value="DL">Dutch Lady</option>
            <option value="DM">Dumex</option>
            <option value="DS">Daisy</option>
            <option value="MJ">Mead Jonhson</option>
            <option value="NTF">Nutifood</option>
            <option value="VNM">Vinamilk</option>
            <!-- Thêm các tùy chọn Hãng Sữa khác vào đây -->
        </select><br>

        <label for="loai_sua">Loại Sữa:</label>
        <select id="loai_sua" name="loai_sua" required>
            <option value="SB">Sữa Bột</option>
            <option value="SD">Sữa Đặc</option>
            <option value="SC">Sữa Chua</option>
            <option value="ST">Sữa Tươi</option>

            <!-- Thêm các tùy chọn Loại Sữa khác vào đây -->
        </select><br>

        <label for="trong_luong">Trọng Lượng:</label>
        <input type="number" id="trong_luong" name="trong_luong" required><br>

        <label for="don_gia">Đơn Giá:</label>
        <input type="number" id="don_gia" name="don_gia" required><br>

        <label for="TP_Dinh_Duong">Thành Phần Dinh Dưỡng:</label>
        <textarea id="TP_Dinh_Duong" name="TP_Dinh_Duong" rows="4" required></textarea><br>

        <label for="loi_ich">Lời ích:</label>
        <textarea id="loi_ich" name="loi_ich" rows="4" required></textarea><br>

        <label for="hinh_anh">Hình Ảnh:</label>
        <input type="file" id="hinh_anh" name="hinh_anh" required><br>

        <input type="submit" name="submit" value="Thêm Sữa">
    </form>
</body>

</html>