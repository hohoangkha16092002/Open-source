<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_POST['submit'])) {
        function timKiem($so_can_tim, $mang)
        {
            $ket_qua = "Không tìm thấy $so_can_tim trong mảng";
            for ($i = 0; $i < count($mang); $i++) {
                $pos = $i + 1;

                if ($so_can_tim === $mang[$i]) {

                    $ket_qua = "Tìm thấy $so_can_tim tại vị trí thứ $pos của mảng";
                    break;
                }
            }
            return $ket_qua;
        }

        if (isset($_POST['nhap_mang']) && isset($_POST['so_can_tim'])) {
            $nhap_mang = $_POST['nhap_mang'];
            $so_can_tim = $_POST['so_can_tim'];

            if (!empty($nhap_mang) && !empty($so_can_tim)) {
                $nhap_mang = trim($nhap_mang);

                $nhap_mang = str_replace(' ', '', $nhap_mang);
                $mang = explode(",", $nhap_mang);
                $chuoi = implode("  ", $mang);
                $ket_qua = timKiem($so_can_tim, $mang);

            } elseif (empty($nhap_mang)) {
                $msg = "Vui lòng nhập mảng.";
            } elseif (empty($so_can_tim)) {
                $msg = "Vui lòng nhập số cần tìm.";
            }
        } else {
            $msg = "dữ liệu nhập sai.";
        }
    }
    ?>
    <form action="" name="tim_kiem" method="post">
        <table style="background-color: beige;">
            <tr>
                <th colspan="2" style="background-color: #33FF66; color: blue">TÌM KIẾM</th>
            </tr>
            <tr>
                <td>Nhập mảng:</td>
                <td>
                    <input type="text" name="nhap_mang" size="28" value="<?php
                    if (isset($nhap_mang))
                        echo $nhap_mang;
                    ?>" required>
                </td>
            </tr>
            <tr>
                <td>Nhập số cần tìm:</td>
                <td>
                    <input step="any" type="number" name="so_can_tim" size="6" value="<?php
                    if (isset($so_can_tim))
                        echo $so_can_tim;
                    ?>">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="submit" style="background-color: #FFFF99;" value="Tìm kiếm ">
                </td>
            </tr>
            <tr>
                <td>Mảng:</td>
                <td>
                    <input readonly type="text" name="mang" size="28" value="<?php
                    if (isset($chuoi))
                        echo $chuoi;
                    ?>">
                </td>
            </tr>
            <tr>
                <td>Kết quả tìm kiếm:</td>
                <td>
                    <input style="color: red;" readonly type="text" name="ket_qua" size="28" value="<?php
                    if (isset($ket_qua))
                        echo $ket_qua;
                    ?>">
                </td>
            </tr>
            <tr style="background-color: #99FFCC">
                <td colspan="2" style="text-align: center">(Các phần tử trong mảng sẽ cách nhau bằng dấu ",")</td>
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