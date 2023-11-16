<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh Sửa Khách Hàng</title>
</head>
<body>
    <?php
    include('config.php');
    
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        
        if (isset($_POST['submit'])) {
            $ten_khach_hang = $_POST['ten_khach_hang'];
            $phai = $_POST['phai'];
            $dia_chi = $_POST['dia_chi'];
            $dien_thoai = $_POST['dien_thoai'];
            $email = $_POST['email'];
            
            $sql = "UPDATE khach_hang SET Ten_khach_hang='$ten_khach_hang', Phai='$phai', Dia_chi='$dia_chi', Dien_thoai='$dien_thoai', Email='$email' WHERE Ma_khach_hang='$id'";
            
            if ($conn->query($sql) === TRUE) {
                echo "Cập nhật thông tin thành công!";
            } else {
                echo "Lỗi: " . $conn->error;
            }
        }
        
        $sql = "SELECT * FROM khach_hang WHERE Ma_khach_hang='$id'";
        $result = $conn->query($sql);
        
        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
    ?>
    
    <h3>Chỉnh Sửa Khách Hàng</h3>
    
    <form method="post" action="">
    <table>
    <tr>
            <td><label for="ten_khach_hang">ID KHÁCH HÀNG:</label></td>
            <td><input type="text" name="idkh" value="<?php echo $row['Ma_khach_hang']; ?>" readonly></td>
        </tr>
        <tr>
            <td><label for="ten_khach_hang">Tên Khách Hàng:</label></td>
            <td><input type="text" name="ten_khach_hang" value="<?php echo $row['Ten_khach_hang']; ?>" required></td>
        </tr>
        <tr>
            <td><label for="phai">Giới Tính:</label></td>
            <td>
                <select name="phai" required>
                    <option value="1" <?php if ($row['Phai'] == 1) echo 'selected'; ?>>Nam</option>
                    <option value="0" <?php if ($row['Phai'] == 0) echo 'selected'; ?>>Nữ</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><label for="dia_chi">Địa Chỉ:</label></td>
            <td><input type="text" name="dia_chi" value="<?php echo $row['Dia_chi']; ?>" required></td>
        </tr>
        <tr>
            <td><label for="dien_thoai">Điện Thoại:</label></td>
            <td><input type="text" name="dien_thoai" value="<?php echo $row['Dien_thoai']; ?>" required></td>
        </tr>
        <tr>
            <td><label for="email">Email:</label></td>
            <td><input type="email" name="email" value="<?php echo $row['Email']; ?>" required></td>
        </tr>
    </table>
    
    <input type="submit" name="submit" value="Cập Nhật">
    <a href='javascript:window.history.back(-1);'>Quay về</a>
</form>

    
    <?php
        } else {
            echo "Không tìm thấy khách hàng.";
        }
    } else {
        echo "Không có mã khách hàng được cung cấp.";
    }
    ?>
</body>
</html>
