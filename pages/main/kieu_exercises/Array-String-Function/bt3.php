<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phát sinh mảng và tính toán</title>
</head>

<body>
    <?php
    if (isset($_POST['submit'])) {
        $input = $_POST['input'];

        function taoMang($input)
        {
            $mang = array();
            for ($i = 0; $i < $input; $i++) {
                $mang[] = rand(0, 20);
            }
            return $mang;
        }

        function timMax($mang)
        {
            $max = $mang[0];
            foreach ($mang as $gia_tri) {
                if ($gia_tri > $max) {
                    $max = $gia_tri;
                }
            }
            return $max;
        }

        function timMin($mang)
        {
            $min = $mang[0];
            foreach ($mang as $gia_tri) {
                if ($gia_tri < $min) {
                    $min = $gia_tri;
                }
            }
            return $min;
        }

        function tong($mang)
        {
            $tong = 0;
            foreach ($mang as $gia_tri) {
                $tong += $gia_tri;
            }
            return $tong;
        }

        if ($input > 0) {
            $tao_mang = taoMang($input);
            $mang = implode(" ", $tao_mang);
            $max = timMax($tao_mang);
            $min = timMin($tao_mang);
            $tong = tong($tao_mang);
        } else {
            $msg = "(*)Số phần tử phải lớn hơn 0";
        }
    }
    ?>

    <form action="" method="post" name="exercise_3">
        <table style="border: 1px solid;">
            <tr>
                <th colspan="2" style="background-color: #99FF66; color: blue; text-align: center">
                    PHÁT SINH MẢNG VÀ TÍNH TOÁN
                </th>
            </tr>
            <tr style="background-color: #FFCCFF;">
                <td>Nhập số phần tử:</td>
                <td>
                    <input type="number" name="input" size="20" value="<?php
                    if (isset($input))
                        echo $input;
                    ?>">
                </td>
            </tr>
            <tr style="background-color: #FFCCFF;">
                <td></td>
                <td>
                    <input size="16" style="background-color: #FFFF99;" type="submit" name="submit"
                        value="Phát sinh và tính toán">
                </td>
            </tr>
            <tr>
                <td>Mảng:</td>
                <td>
                    <input size="30" style="background-color: #FF99CC;" type="text" name="array" value="<?php
                    if (isset($mang))
                        echo $mang;
                    ?>">
                </td>
            </tr>
            <tr>
                <td>GTLN (MAX) trong mảng:</td>
                <td>
                    <input readonly size="12" style="background-color: #FF99CC;" type="text" name="max" value="<?php
                    if (isset($max))
                        echo $max;
                    ?>">
                </td>
            </tr>
            <tr>
                <td>TTNN (MIN) trong mảng:</td>
                <td>
                    <input readonly size="12" style="background-color: #FF99CC;" type="text" name="min" value="<?php
                    if (isset($min))
                        echo $min;
                    ?>">
                </td>
            </tr>
            <tr>
                <td>Tổng mảng:</td>
                <td>
                    <input readonly size="12" style="background-color: #FF99CC;" type="text" name="sumArray" value="<?php
                    if (isset($tong))
                        echo $tong;
                    ?>">
                </td>
            </tr>
            <tr>
                <td style="text-align: center;" colspan="2">(<strong style="color: red;">Ghi chú:</strong> Các phần tử
                    trong mảng sẽ có giá trị từ 0 đến 20)</td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center; color:red">
                    <?php
                    if (isset($msg))
                        echo $msg;
                    ?>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>