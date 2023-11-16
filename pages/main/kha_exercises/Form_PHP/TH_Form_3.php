<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiền điện</title>
</head>

<body>
    <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $old = $_POST['old'];
        $new = $_POST['new'];
        $dongia = 20000;
        $money = $_POST['money'];
        if (is_numeric(($old)) and is_numeric($new))
            if ($old > 0 and $new > 0)
                if ($new >= $old)
                    $money = ceil(($new - $old) * $dongia);
                else $msg = "Chỉ số mới không được nhỏ hơn chỉ số cũ";
            else $msg = "Chỉ số mới và Chỉ số cũ không được <=0";
        else $msg = "Chỉ số mới hoặc chỉ số cũ ko phải số";
    }
    ?>

    <form method="post" name="tiendien">
        <table style="background: #fcf6d4; margin: 8% auto 0;">
            <tr style="background-color:#ffda77; color: #a97025; font-size: larger;">
                <th colspan="2">
                    THANH TOÁN TIỀN ĐIỆN
                </th>
            </tr>

            <tr>
                <td>Tên chủ hộ</td>
                <td>
                    <input type="text" name="name" size="20" value="<?php
                                                                    if (isset($name)) echo $name;?>">
                </td>
            </tr>

            <tr>
                <td>Chỉ số cũ</td>
                <td>
                    <input type="text" name="old" size="20" value="<?php
                                                                    if (isset($new)) echo $old;?>"> (KW)
                </td>
            </tr>

            <tr>
                <td>Chỉ số mới</td>
                <td>
                    <input type="text" name="new" size="20" value="<?php
                                                                    if (isset($old)) echo $new;?>"> (KW)
                </td>
            </tr>

            <tr>
                <td>Đơn giá</td>
                <td>
                    <input type="text" name="dongia" size="20" value="<?php if (isset($dongia)) echo $dongia;?>"> (VNĐ)
                </td>
            </tr>

            <tr>
                <td>Số tiền thanh toán</td>
                <td>
                    <input type="text" name="money" size="20" readonly style="background: #ffd4da" 
                    value="<?php if (isset($money)) echo $money;?>">(VNĐ)
                </td>
            </tr>

            <tr>
                <td colspan="2" style="text-align: center">
                    <input type="submit" name="submit" value="Tính">
                </td>
            </tr>

            <tr>
                <th colspan="2" style="color: red">
                    <?php
                    if (isset($msg)) echo $msg;
                    ?>
            </tr>

        </table>
    </form>
</body>

</html>