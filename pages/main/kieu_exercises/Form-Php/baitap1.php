<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hình chữ nhật</title>
</head>

<body>
    <?php
    if (isset($_POST['submit'])) {
        $chieu_dai = $_POST['chieu_dai'];
        $chieu_rong = $_POST['chieu_rong'];
        if ($chieu_dai > 0 and $chieu_rong > 0) {
            if ($chieu_dai >= $chieu_rong)
                $dien_tich = $chieu_dai * $chieu_rong;
            else
                $msg = "Chiều dài phải > chiều rộng";
        } else
            $msg = "Chiều dài hoặc chiều rộng phải > 0";
    }
    ?>
    <form name="hinh_chu_nhat" action="" method="post">
        <table style="background: #CCFFFF;">
            <tr style="background: #66FF99;">
                <th colspan="2">DIỆN TÍCH HÌNH CHỮ NHẬT</th>
            </tr>
            <tr>
                <td>Chiều dài: </td>
                <td>
                    <input type="number" name="chieu_dai" size="10" step="any" value="<?php
                    if (isset($chieu_dai))
                        echo $chieu_dai;
                    ?>">
                </td>
            </tr>
            <tr>
                <td>Chiều rộng: </td>
                <td>
                    <input type="number" name="chieu_rong" size="10" step="any" value="<?php
                    if (isset($chieu_rong))
                        echo $chieu_rong;
                    ?>">
                </td>
            </tr>
            <tr>
                <td>Diện tích: </td>
                <td>
                    <input type="text" name="area" size="10" readonly value="<?php
                    if (isset($dien_tich))
                        echo $dien_tich;
                    ?>">
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <input type="submit" name="submit" value="Tính">
                </td>
            </tr>
            <tr>
                <td colspan="2" style="color: red; text-align:center">
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