<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_POST['submit'])){
            $thoiGianBDInput = $_POST['thoiGianBD'];
            $thoiGianKTInput = $_POST['thoiGianKT'];
            $thoiGianBD = strtotime($thoiGianBDInput);
            $thoiGianKT = strtotime($thoiGianKTInput);
            $gia10_17 = 20000;
            $gia17_24 = 45000;

            $thoiGianBD_SP = date("i", $thoiGianBD); // Lấy phút của giờ bắt đầu
            $thoiGianKT_SP = date("i", $thoiGianKT); // Lấy phút của giờ kết thúc

            if ($thoiGianBD_SP < 30) {
                if ($thoiGianBD_SP < 15) {
                    $thoiGianBD = strtotime(date('H', $thoiGianBD) . ':00:00');
                } else {
                    $thoiGianBD = strtotime(date('H', $thoiGianBD) . ':30:00');
                }
            } else {
                if ($thoiGianBD_SP < 45) {
                    $thoiGianBD = strtotime(date('H', $thoiGianBD) . ':30:00');
                } else {
                    $thoiGianBD = strtotime(date('H', $thoiGianBD)+1 . ':00:00'); 
                }
            }

            if ($thoiGianKT_SP < 30) {
                if ($thoiGianKT_SP < 15) {
                    $thoiGianKT = strtotime(date('H', $thoiGianKT) . ':00:00');
                } else {
                    $thoiGianKT = strtotime(date('H', $thoiGianKT) . ':30:00');
                }
            } else {
                if ($thoiGianKT_SP < 45) {
                    $thoiGianKT = strtotime(date('H', $thoiGianKT) . ':30:00');
                } else {
                    $thoiGianKT = strtotime(date('H', $thoiGianKT)+1 . ':00:00'); 
                }
            }
            if($thoiGianKT > $thoiGianBD) {
                if($thoiGianBD >= strtotime('10:00') and $thoiGianBD <= strtotime('24:00') and $thoiGianKT >= strtotime('10:00') and $thoiGianKT <=strtotime('24:00')){
                    if($thoiGianBD <= strtotime('17:00') and $thoiGianKT <= strtotime('17:00')){
                        $hoaDon_TT = round(($thoiGianKT - $thoiGianBD) / 3600 * $gia10_17); // Chuyển đổi lại thành giờ
                    }
                    elseif($thoiGianBD >= strtotime('17:00') and $thoiGianKT >= strtotime('17:00')){
                        $hoaDon_TT = round(($thoiGianKT - $thoiGianBD) / 3600 * $gia17_24); // Chuyển đổi lại thành giờ
                    }
                    else {
                        $hoaDon10_17 = (strtotime('17:00') - $thoiGianBD) / 3600 * $gia10_17; // Chuyển đổi lại thành giờ
                        $hoaDon17_24 = ($thoiGianKT - strtotime('17:00')) / 3600 * $gia17_24; // Chuyển đổi lại thành giờ
                        $hoaDon_TT = round($hoaDon10_17 + $hoaDon17_24);
                    }
                }
                else $msg = "Giờ mở cửa từ 10h đến 24h";
            }
            else $msg = "Giờ kết thúc phải > giờ bắt đầu";
        }
    ?>
    <form name="karaoke" method="post" action="">
        <table style="background: #CCFFFF;">
            <tr>
                <th colspan="2" style="background: #66FF99; color: blue">
                    TÍNH TIỀN KARAOKE
                </th>
            </tr>
            <tr>
                <td>Giờ bắt đầu:</td>
                <td>
                    <input type="time" name="thoiGianBD" value="<?php
                        if(isset($thoiGianBDInput)) echo $thoiGianBDInput;
                    ?>">
                    <span>(h)</span>
                </td>
            </tr>
            <tr>
                <td>Giờ kết thúc:</td>
                <td>
                    <input type="time" name="thoiGianKT" value="<?php
                        if(isset($thoiGianKTInput)) echo $thoiGianKTInput;
                    ?>">
                    <span>(h)</span>
                </td>
            </tr>
            <tr>
                <td>Tiền thanh toán:</td>
                <td>
                    <input type="text" name="hoaDon_TT" size="9" readonly style="background: #FFFF99;" value="<?php
                        if(isset($hoaDon_TT)) echo $hoaDon_TT;
                    ?>">
                    <span>(VNĐ)</span>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <input type="submit" name="submit" value="Tính tiền">
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center; color: red">
                    <?php
                        if(isset($msg)) echo $msg;
                    ?>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>