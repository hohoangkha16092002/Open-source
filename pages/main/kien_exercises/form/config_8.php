<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Config.php</title>
</head>
<body>
    <?php
        if(isset($_POST['send'])){
            $ho_ten = $_POST['fullName'];
            $dia_chi = $_POST['address'];
            $sdt = $_POST['phone'];
            $gioi_tinh = $_POST['gender'];
            $que_quan = $_POST['country'];
            $ghi_chu = $_POST['note'];

            switch($que_quan){
                case 'vietNam':
                    $que_quan = "Việt Nam";
                    break;   
                case 'lao':
                    $que_quan = "Lào";
                    break;   
                case 'campuchia':
                    $que_quan = "Camphuchia";
                    break;   
                case 'nhatBan':
                    $que_quan = "Nhật bản";
                    break;   
                 default:
                    $que_quan = "Bạn chưa chọn quốc gia nào";
                    break;   
            }

            switch($gioi_tinh){
                case 'male':
                    $gioi_tinh = "Nam";
                    break;
                case 'female':
                    $gioi_tinh = "Nữ";
                    break;
                default:
                    $gioi_tinh = "Bạn chưa chọn giới tính";
                    break;
            }

            if(strlen($sdt) >= 3){
                $lastThreeDigits = substr($sdt, -3);
                $sdt = substr_replace($sdt,'xxx',-3);
            }
        }
    ?>
    <form action="" method="post">
        <table>
            <tr>
                <th>Bạn đã nhập thành công, dưới đây là những thông tin bạn đã nhập:</th>
            </tr>
            <tr>
                <td>Họ tên: <?php if(isset($ho_ten))  echo $ho_ten ?></td>
            </tr>
            <tr>
                <td>Address: <?php if(isset($dia_chi))  echo $dia_chi ?></td>
            </tr>
            <tr>
                <td>Phone: <?php if(isset($sdt))  echo $sdt ?></td>
            </tr>
            <tr>
                <td>Gender: <?php if(isset($gioi_tinh))  echo $gioi_tinh ?></td>
            </tr>
            <tr>
                <td>Country: <?php if(isset($que_quan))  echo $que_quan ?></td>
            </tr>
            <!-- <tr>
                <td>Các môn đã học:
                <?php
                    if (isset($_POST['phpMySQL'])) echo  $_POST['phpMySQL'] . ",";
                    if (isset($_POST['asp'])) echo  $_POST['asp'] . ",";
                    if (isset($_POST['ccna'])) echo  $_POST['ccna'] . ",";
                    if (isset($_POST['security'])) echo  $_POST['security'];
                    ?>
                </td>
            </tr> -->
            <tr>
                <td>Note: <?php if(isset($ghi_chu))  echo $ghi_chu ?></td>
            </tr>
            <tr>
                <td>
                    <a href="javascript:window.history.back(-1);">Trở về trang trước</a>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>