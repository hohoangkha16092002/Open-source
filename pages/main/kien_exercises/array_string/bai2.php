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
            $dayso = $_POST['dayso'];
            $mang = explode(",", $dayso);
            $tong = array_sum($mang);
        }
    ?>
    <form method="post" action="">
        <table style="background: cyan;">
            <tr style="background: darkcyan;">
                <th colspan="2">Tính Tổng Dãy Số</th>
            </tr>
            <tr>
                <td>Nhập dãy số: </td>
                <td>
                    <input type="text" name="dayso" value="<?php if(isset($dayso)) echo $dayso; ?>" required>
                    <span style="color: red;">(*)</span>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <input type="submit" name="submit" value="Tổng dãy số" style="background: yellow">
                </td>
            </tr>
            <tr>
                <td>Tổng dãy số: </td>
                <td>
                    <input type="text" name="result" value="<?php if(isset($tong)) echo $tong; ?>" readonly>
                    <span style="color: red;">(*)</span>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <span style="color: red">(*)</span>
                    Các số được nhập cách nhau bằng dấu ","
                </td>
            </tr>
        </table>
    </form>
</body>
</html>