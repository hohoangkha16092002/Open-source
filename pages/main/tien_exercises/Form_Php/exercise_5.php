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
            $startTimeInput = $_POST['startTime'];
            $endTimeInput = $_POST['endTime'];
            $startTime = strtotime($startTimeInput);
            $endTime = strtotime($endTimeInput);
            $price10_17 = 20000;
            $price17_24 = 45000;

            $startTime_minute = date("i", $startTime); // Lấy phút của giờ bắt đầu
            $endTime_minute = date("i", $endTime); // Lấy phút của giờ kết thúc

            if ($startTime_minute < 30) {
                if ($startTime_minute < 15) {
                    $startTime = strtotime(date('H', $startTime) . ':00:00');
                } else {
                    $startTime = strtotime(date('H', $startTime) . ':30:00');
                }
            } else {
                if ($startTime_minute < 45) {
                    $startTime = strtotime(date('H', $startTime) . ':30:00');
                } else {
                    $startTime = strtotime(date('H', $startTime)+1 . ':00:00'); 
                }
            }

            if ($endTime_minute < 30) {
                if ($endTime_minute < 15) {
                    $endTime = strtotime(date('H', $endTime) . ':00:00');
                } else {
                    $endTime = strtotime(date('H', $endTime) . ':30:00');
                }
            } else {
                if ($endTime_minute < 45) {
                    $endTime = strtotime(date('H', $endTime) . ':30:00');
                } else {
                    $endTime = strtotime(date('H', $endTime)+1 . ':00:00'); 
                }
            }

            // function calculator($startTime, $endTime, $price){
            //     $totalTime = ($endTime-$startTime);
            //     echo $totalTime."<br>";
            //     $totalTimeMinutes = date("i", $totalTime);
            //     echo $totalTimeMinutes."<br>";
                
            //     if($totalTimeMinutes < 15 and $totalTimeMinutes >= 0){
            //         $totalTime = (date('H', $totalTime) . ':00:00');
            //     }
            //     elseif($totalTimeMinutes >= 15 and $totalTimeMinutes <= 30){
            //         $totalTime = (date('H', $totalTime) . ':30:00');
            //     }
            //     else {
            //         $totalTime = (date('H', $totalTime)+1 . ':00:00'); // Làm tròn lên số giờ gần nhất
            //     }
            //     echo $totalTime."<br>";
            //     $totalTime = strtotime($totalTime);
            //     echo $totalTime."<br>";
            //     $paymentBill = $totalTime/3600 * $price;
            //     return $paymentBill;
            // }

            if($endTime > $startTime) {
                if($startTime >= strtotime('10:00') and $startTime <= strtotime('24:00') and $endTime >= strtotime('10:00') and $endTime <=strtotime('24:00')){
                    if($startTime <= strtotime('17:00') and $endTime <= strtotime('17:00')){
                        $paymentBill = round(($endTime - $startTime) / 3600 * $price10_17); // Chuyển đổi lại thành giờ
                    }
                    elseif($startTime >= strtotime('17:00') and $endTime >= strtotime('17:00')){
                        $paymentBill = round(($endTime - $startTime) / 3600 * $price17_24); // Chuyển đổi lại thành giờ
                    }
                    else {
                        $bill10_17 = (strtotime('17:00') - $startTime) / 3600 * $price10_17; // Chuyển đổi lại thành giờ
                        $bill17_24 = ($endTime - strtotime('17:00')) / 3600 * $price17_24; // Chuyển đổi lại thành giờ
                        $paymentBill = round($bill10_17 + $bill17_24);
                    }
                }
                else $msg = "Giờ mở cửa từ 10h đến 24h";
            }
            else $msg = "Giờ kết thúc phải > giờ bắt đầu";
        }
    ?>
    <form name="karaoke" method="post" action="">
        <table style="background: #76eec6;" align="center">
            <tr>
                <th colspan="2" style="background: blue; color: white">
                    TÍNH TIỀN KARAOKE
                </th>
            </tr>
            <tr>
                <td>Giờ bắt đầu:</td>
                <td>
                    <input type="time" name="startTime" value="<?php
                        if(isset($startTimeInput)) echo $startTimeInput;
                    ?>">
                    <span>(h)</span>
                </td>
            </tr>
            <tr>
                <td>Giờ kết thúc:</td>
                <td>
                    <input type="time" name="endTime" value="<?php
                        if(isset($endTimeInput)) echo $endTimeInput;
                    ?>">
                    <span>(h)</span>
                </td>
            </tr>
            <tr>
                <td>Tiền thanh toán:</td>
                <td>
                    <input type="text" name="paymentBill" size="9" readonly style="background: yellow;" value="<?php
                        if(isset($paymentBill)) echo $paymentBill;
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