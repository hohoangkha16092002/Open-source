<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xóa Khách Hàng</title>
</head>

<body>
    <?php
    include('config.php');
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
    }

    if (isset($_GET['id'])) {
        $id = $_GET['id'];


        if (isset($_POST['submit'])) {
            $ten_khach_hang = $_POST['ten_khach_hang'];
            $phai = $_POST['phai'];
            $dia_chi = $_POST['dia_chi'];
            $dien_thoai = $_POST['dien_thoai'];
            $email = $_POST['email'];

            $sql = "DELETE FROM khach_hang WHERE Ma_khach_hang = '$id'";

            if ($conn->query($sql) === TRUE) {
                echo "Xóa khách hàng thành công!";
            } else {
                echo "Lỗi: " . $conn->error;
            }
        }

        $sql = "SELECT * FROM khach_hang WHERE Ma_khach_hang='$id'";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            ?>

            <form method="post" action="">
                <table align="center" style="background-color: #FFEFDB;">
                    <tr style="background-color: orange; color: red;">
                        <th colspan="2">XOÁ KHÁCH HÀNG</th>
                    </tr>
                    <tr>
                        <td>Mã khách hàng:</td>
                        <td>
                            <input type="text" name="idkh" style="background-color: #FFF68F;" size="6" value="<?php
                            echo $row['Ma_khach_hang'];
                            ?>" readonly>
                        </td>
                    </tr>
                    <tr>
                        <td>Tên Khách Hàng:</td>
                        <td>
                            <input type="text" name="ten_khach_hang" size="24" value="<?php echo $row['Ten_khach_hang']; ?>"
                                required>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="phai">Giới Tính:</label></td>
                        <td>
                            <select name="phai" required>
                                <option value="1" <?php if ($row['Phai'] == 1)
                                    echo 'selected'; ?>>Nam</option>
                                <option value="0" <?php if ($row['Phai'] == 0)
                                    echo 'selected'; ?>>Nữ</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Địa Chỉ:</td>
                        <td><input type="text" name="dia_chi" size="24" value="<?php echo $row['Dia_chi']; ?>" required></td>
                    </tr>
                    <tr>
                        <td>Điện Thoại:</td>
                        <td><input type="text" name="dien_thoai" size="16" value="<?php echo $row['Dien_thoai']; ?>" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td><input type="email" name="email" size="24" value="<?php echo $row['Email']; ?>" required></td>
                    </tr>
                    <tr style="background-color: #FFE4B5;">
                        <td colspan="2" style="text-align: center;">
                            <input type="submit" name="submit" value="Xóa">
                        </td>
                    </tr>
                    <a href='javascript:window.history.back(-1);'>Quay về</a>
                </table>
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