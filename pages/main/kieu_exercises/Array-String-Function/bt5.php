<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thay thế</title>
</head>

<body>
    <?php
    if (isset($_POST['submit'])) {
        $phan_tu = $_POST['phan_tu'];
        $so_can_thay = $_POST['so_can_thay'];
        $so_thay = $_POST['so_thay'];

        function inmang($mang)
        {
            $chuoi = implode("  ", $mang);
            return $chuoi;
        }

        function thay($so_thay, $so_can_thay, $mang)
        {
            foreach ($mang as &$value) {
                if ($value == $so_can_thay) {
                    $value = $so_thay;
                }
            }
            return $mang;
        }
        $phan_tu = str_replace(' ', '', $phan_tu);
        $mang = explode(",", $phan_tu);
        $mang_cu = inmang($mang);
        $mang_moi = inmang(thay($so_thay, $so_can_thay, $mang));
    }
    ?>
    <form action="" method="post" name="thay-the">
        <table style="background-color: #FFF0F5;">
            <tr>
                <th colspan="2" style="text-align: center; background-color: #cd8c95; color: white">THAY THẾ</th>
            </tr>
            <tr style="background-color: #ffbbff;">
                <td>Nhập các phần tử:</td>
                <td>
                    <input required type="text" name="phan_tu" , size="40" value="<?php
                    if (isset($phan_tu))
                        echo $phan_tu;
                    ?>">
                </td>
            </tr>
            <tr style="background-color: #ffbbff;">
                <td>Giá trị cần thay thế:</td>
                <td>
                    <input required type="text" name="so_can_thay" step="any" value="<?php
                    if (isset($so_can_thay))
                        echo $so_can_thay;
                    ?>">
                </td>
            </tr>
            <tr style="background-color: #ffbbff;">
                <td>Giá trị thay thế:</td>
                <td>
                    <input required type="text" step="any" name="so_thay" value="<?php
                    if (isset($so_thay))
                        echo $so_thay;
                    ?>">
                </td>
            </tr>
            <tr style="background-color: #ffbbff;">
                <td></td>
                <td>
                    <input style="background-color: yellow;" type="submit" name="submit" value="Thay thế">
                </td>
            </tr>
            <tr>
                <td>Mảng cũ:</td>
                <td>
                    <input readonly style="background-color: #ee8262;" type="text" name="mang_cu" size="40" value="<?php
                    if (isset($mang_cu))
                        echo $mang_cu;
                    ?>">
                </td>
            </tr>
            <tr>
                <td>Mảng mới:</td>
                <td>
                    <input readonly style="background-color: #ee8262;" type="text" name="mang_moi" size="40" value="<?php
                    if (isset($mang_moi))
                        echo $mang_moi;
                    ?>">
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">(<strong style="color: red">Ghi chú:</strong> Các phần tử
                    trong mảng sẽ cách nhau bằng dấu ",")</td>
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