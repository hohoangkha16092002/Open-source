<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="exercise_6_result.php" method="post">
        <table align="center">
            <tr style="color: blue;">
                <th colspan="2">PHÉP TÍNH TRÊN HAI SỐ</th>
            </tr>
            <tr style="color: red;">
                <td style="float: right;">Chọn phép tính:</td>
                <td>
                    <input type="radio" name="operation" value="add" required>Cộng
                    <input type="radio" name="operation" value="subtract">Trừ
                    <input type="radio" name="operation" value="multiply">Nhân
                    <input type="radio" name="operation" value="divide">Chia
                </td>
            </tr>
            <tr>
                <td style="color: blue; float: right">Số thứ nhất:</td>
                <td>
                    <input type="number" name="index1" value="<?php
                        if(isset($index1)) echo $index1;
                    ?>" step="any" required>
                </td>
            </tr>
            <tr>
                <td style="color: blue; float: right">Số thứ hai:</td>
                <td>
                    <input type="number" name="index2" value="<?php
                        if(isset($index2)) echo $index2;
                    ?>" step="any" required>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="submit" value="Tính">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>