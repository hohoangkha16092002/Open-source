<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TH_Form_8_config.php</title>
</head>

<body>
    <?php
    if (isset($_POST['send'])) {
        $fName = isset($_POST['fullName']) ? $_POST['fullName'] : '';
        $addr = isset($_POST['address']) ? $_POST['address'] : '';
        $numberPhone = isset($_POST['phone']) ? $_POST['phone'] : '';
        $gioiTinh = isset($_POST['gender']) ? $_POST['gender'] : '';
        $quocGia = isset($_POST['country']) ? $_POST['country'] : '';
        $chuThich = isset($_POST['note']) ? $_POST['note'] : '';

        switch ($quocGia) {
            case 'vietNam':
                $quocGia = "Việt Nam";
                break;
            case 'lao':
                $quocGia = "Lào";
                break;
            case 'campuchia':
                $quocGia = "Campuchia";
                break;
            case 'nhatBan':
                $quocGia = "Nhật bản";
                break;
            default:
                $quocGia = "Bạn chưa chọn quốc gia nào";
                break;
        }

        switch ($gioiTinh) {
            case 'male':
                $gioiTinh = "Nam";
                break;
            case 'female':
                $gioiTinh = "Nữ";
                break;
            default:
                $gioiTinh = "Bạn chưa chọn giới tính";
                break;
        }

        if (strlen($numberPhone) >= 3) {
            $lastThreeDigits = substr($numberPhone, -3);
            $numberPhone = substr_replace($numberPhone, 'xxx', -3);
        }
    }
    ?>
    <form action="" method="post">
        <table>
            <tr>
                <th>Bạn đã nhập thành công, dưới đây là những thông tin bạn đã nhập:</th>
            </tr>
            <tr>
                <td>Họ tên: <?php echo $fName ?></td>
            </tr>
            <tr>
                <td>Address: <?php echo $addr ?></td>
            </tr>
            <tr>
                <td>Phone: <?php echo $numberPhone ?></td>
            </tr>
            <tr>
                <td>Gender: <?php echo $gioiTinh ?></td>
            </tr>
            <tr>
                <td>Country: <?php echo $quocGia ?></td>
            </tr>
            <tr>
                <td>Các môn đã học:
                    <?php
                    if (isset($_POST['phpMySQL'])) echo  $_POST['phpMySQL'] . ",";
                    if (isset($_POST['asp'])) echo  $_POST['asp'] . ",";
                    if (isset($_POST['ccna'])) echo  $_POST['ccna'] . ",";
                    if (isset($_POST['security'])) echo  $_POST['security'];
                    ?>
                </td>
            </tr>
            <tr>
                <td>Note: <?php echo $chuThich ?></td>
            </tr>
        </table>
    </form>
</body>

</html>