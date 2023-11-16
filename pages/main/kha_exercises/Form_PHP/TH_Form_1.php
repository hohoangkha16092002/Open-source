<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diện Tích Hình Chữ Nhật</title>
</head>

<body>
    <?php

    $cd = $cr = $dt = '';
    $msg = '';

    if (isset($_POST["submit"])) {
        $cd = isset($_POST['dai']) ? $_POST['dai'] : '';
        $cr = isset($_POST['rong']) ? $_POST['rong'] : '';
        if (is_numeric($cd) && is_numeric($cr)) {
            if ($cd > 0 && $cr > 0) {
                $dt = $cd * $cr;
            } else {
                $msg = 'Chiều dài và chiều rộng phải lớn hơn 0.';
            }
        } else {
            $msg = 'Hãy nhập số hợp lệ cho chiều dài và chiều rộng.';
        }
    }
    ?>
    <form method="post" action="">
        <table style="background-color: antiquewhite; margin: 8% auto 0;">
            <tr style="background-color:pink; font-size: larger;">
                <th colspan="2">
                    DIỆN TÍCH HÌNH CHỮ NHẬT
                </th>
            </tr>
            <tr>
                <td>Chiều dài:</td>
                <td>
                    <input type="number" name="dai" size="20" step="any" value="<?php echo $cd; ?>">
                </td>
            </tr>
            <tr>
                <td>Chiều rộng:</td>
                <td>
                    <input type="number" name="rong" size="20" step="any" value="<?php echo $cr; ?>">
                </td>
            </tr>
            <tr>
                <td>Diện tích:</td>
                <td>
                    <input type="number" name="diencichcn" size="20" style="background-color:pink;"
                    value="<?php echo is_numeric($dt) ? $dt : ''; ?>">
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <input type="submit" name="submit" value="Tính">
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                  <?php if(isset($msg)) echo "<span style='color:red;'>$msg</span>" ?>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>
