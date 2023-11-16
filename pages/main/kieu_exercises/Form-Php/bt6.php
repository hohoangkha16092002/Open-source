<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="bt6_kq.php" method="post">
        <table>
            <tr style="color: blue;">
                <th colspan="2">PHÉP TÍNH TRÊN HAI SỐ</th>
            </tr>
            <tr style="color: red;">
                <td style="float: right;">Chọn phép tính:</td>
                <td>
                    <input type="radio" name="hd" value="cong" required>Cộng
                    <input type="radio" name="hd" value="tru">Trừ
                    <input type="radio" name="hd" value="nhan">Nhân
                    <input type="radio" name="hd" value="chia">Chia
                </td>
            </tr>
            <tr>
                <td style="color: blue; float: right">Số thứ nhất:</td>
                <td>
                    <input type="number" name="so_thu_nhat" value="<?php
                    if (isset($so_thu_nhat))
                        echo $so_thu_nhat;
                    ?>" step="any" required>
                </td>
            </tr>
            <tr>
                <td style="color: blue; float: right">Số thứ hai:</td>
                <td>
                    <input type="number" name="so_thu_hai" value="<?php
                    if (isset($so_thu_hai))
                        echo $so_thu_hai;
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