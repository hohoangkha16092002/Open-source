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
            $in_Time = $_POST['inTime'];
            $out_Time = $_POST['outTime'];
            $start_Time = strtotime($in_Time);
            $end_Time = strtotime($out_Time);
            $price10_17 = 20000;
            $price17_24 = 45000;

            $start_Time_minute = date("i", $start_Time); // Lấy phút của giờ bắt đầu
            $end_Time_minute = date("i", $end_Time); // Lấy phút của giờ kết thúc

            if ($start_Time_minute < 30) {
                if ($start_Time_minute < 15) {
                    $start_Time = strtotime(date('H', $start_Time) . ':00:00');
                } else {
                    $start_Time = strtotime(date('H', $start_Time) . ':30:00');
                }
            } else {
                if ($start_Time_minute < 45) {
                    $start_Time = strtotime(date('H', $start_Time) . ':30:00');
                } else {
                    $start_Time = strtotime(date('H', $start_Time)+1 . ':00:00'); 
                }
            }

            if ($end_Time_minute < 30) {
                if ($end_Time_minute < 15) {
                    $end_Time = strtotime(date('H', $end_Time) . ':00:00');
                } else {
                    $end_Time = strtotime(date('H', $end_Time) . ':30:00');
                }
            } else {
                if ($end_Time_minute < 45) {
                    $end_Time = strtotime(date('H', $end_Time) . ':30:00');
                } else {
                    $end_Time = strtotime(date('H', $end_Time)+1 . ':00:00'); 
                }
            }

            if($end_Time > $start_Time) {
                if($start_Time >= strtotime('10:00') and $start_Time <= strtotime('24:00') and $end_Time >= strtotime('10:00') and $end_Time <=strtotime('24:00')){
                    if($start_Time <= strtotime('17:00') and $end_Time <= strtotime('17:00')){
                        $pay = round(($end_Time - $start_Time) / 3600 * $price10_17); // Chuyển đổi lại thành giờ
                    }
                    elseif($start_Time >= strtotime('17:00') and $end_Time >= strtotime('17:00')){
                        $pay = round(($end_Time - $start_Time) / 3600 * $price17_24); // Chuyển đổi lại thành giờ
                    }
                    else {
                        $bill10_17 = (strtotime('17:00') - $start_Time) / 3600 * $price10_17; // Chuyển đổi lại thành giờ
                        $bill17_24 = ($end_Time - strtotime('17:00')) / 3600 * $price17_24; // Chuyển đổi lại thành giờ
                        $pay = round($bill10_17 + $bill17_24);
                    }
                }
                else $msg = "Giờ mở cửa từ 10h đến 24h";
            }
            else $msg = "Giờ kết thúc phải > giờ bắt đầu";
        }
    ?>
    <form name="karaoke" method="post" action="">
        <table style="background: #6091c3;" align="center">
            <tr style="background: #60c1c3;">
                <th colspan="2">
                    TÍNH TIỀN KARAOKE
                </th>
            </tr>
            <tr>
                <td>Giờ bắt đầu:</td>
                <td>
                    <input type="time" name="inTime" value="<?php
                        if(isset($in_Time)) echo $in_Time;
                    ?>">
                    <span>(h)</span>
                </td>
            </tr>
            <tr>
                <td>Giờ kết thúc:</td>
                <td>
                    <input type="time" name="outTime" value="<?php
                        if(isset($out_Time)) echo $out_Time;
                    ?>">
                    <span>(h)</span>
                </td>
            </tr>
            <tr>
                <td>Tiền thanh toán:</td>
                <td>
                    <input type="text" name="pay" size="9" readonly style="background: yellow;" value="<?php
                        if(isset($pay)) echo $pay;
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