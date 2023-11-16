<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TÍNH DÃY SỐ</title>
</head>

<body>
    <?php

    $dso = '';

    if (isset($_POST["submit"])) {
        $dso = isset($_POST['so']) ? $_POST['so'] : '';
        $arr = explode(",", $dso);
        $tong = array_sum($arr);
    }
    ?>
    <form method="post" action="">
        <table style="background-color:#ccd9cf;">
            <tr style="background-color:#2E9398;">
                <th colspan="2" style="color:white">
                    NHẬP VÀ TÍNH TRÊN DÃY SỐ
                </th>
            </tr>
            <tr>
                <td>Nhập dãy số (cách nhau bằng dấu phẩy):</td>
                <td>
                    <input type="text" name="so" size="20" step="any" value="<?php echo $dso; ?>"> <span style="color:red">(*)</span>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="submit" value="Tổng dãy số" style="background-color:#fbf794;">
                </td>
            </tr>
            <tr>
                <td>Tổng dãy số:</td>
                <td>
                    <input type="number" name="tong" size="20" style="background-color:#CEF0A0;"
                    value="<?php if(isset($tong)) echo $tong;?>" readonly>
                </td>
            </tr>
            <tr>
                <td colspan="2"><span style="color:red; text-align: center;">(*)</span> Các số được nhập cách nhau bằng dấu cách ","</td>
            </tr>
        </table>
    </form>
</body>

</html>
