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
            $fullName = $_POST['fullName'];
            $address = $_POST['address'];
            $phone = $_POST['phone'];
            $gender = $_POST['gender'];
            $country = $_POST['country'];
            $note = $_POST['note'];

            switch($country){
                case 'vietNam':
                    $country = "Việt Nam";
                    break;   
                case 'lao':
                    $country = "Lào";
                    break;   
                case 'campuchia':
                    $country = "Camphuchia";
                    break;   
                case 'nhatBan':
                    $country = "Nhật bản";
                    break;   
                 default:
                    $country = "Bạn chưa chọn quốc gia nào";
                    break;   
            }

            switch($gender){
                case 'male':
                    $gender = "Nam";
                    break;
                case 'female':
                    $gender = "Nữ";
                    break;
                default:
                    $gender = "Bạn chưa chọn giới tính";
                    break;
            }

            if(strlen($phone) >= 3){
                $lastThreeDigits = substr($phone, -3);
                $phone = substr_replace($phone,'xxx',-3);
            }
        }
    ?>
    <form action="" method="post">
        <table>
            <tr>
                <th>Bạn đã nhập thành công, dưới đây là những thông tin bạn đã nhập:</th>
            </tr>
            <tr>
                <td>Họ tên: <?php if(isset($fullName))  echo $fullName ?></td>
            </tr>
            <tr>
                <td>Address: <?php if(isset($address))  echo $address ?></td>
            </tr>
            <tr>
                <td>Phone: <?php if(isset($phone))  echo $phone ?></td>
            </tr>
            <tr>
                <td>Gender: <?php if(isset($gender))  echo $gender ?></td>
            </tr>
            <tr>
                <td>Country: <?php if(isset($country))  echo $country ?></td>
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
                <td>Note: <?php if(isset($note))  echo $note ?></td>
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