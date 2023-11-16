<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sắp xếp mảng</title>
</head>

<body>
    <?php
    if (isset($_POST['sort'])) {
        $input = $_POST['input'];
        $ascending = "";
        $descending = "";

        $input = preg_replace('/[^a-zA-Z0-9, ]/', '', $input);
        $input = str_replace(' ', '', $input);

        if (!empty($input)) {
            $array = explode(",", $input);
            sort($array);
            $ascending = implode("  ", $array);
            rsort($array);
            $descending = implode("  ", $array);
        } else {
            $ascending = "Chuỗi không hợp lệ";
            $descending = "Chuỗi không hợp lệ";
        }
    }
    ?>


    <form action="" name="sort" method="post">
        <table style="background-color: lightcyan">
            <tr>
                <th colspan="2" style="background-color: darkcyan; color: white">SẮP XẾP MẢNG</th>
            </tr>
            <tr>
                <td>Nhập mảng:</td>
                <td>
                    <input required type="text" name="input" value="<?php
                    if (isset($input))
                        echo $input;
                    ?>">
                    <strong style="color: red;">(*)</strong>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <input type="submit" name="sort" value="Sắp xếp tăng/giảm">
                </td>
            </tr>
            <tr style="background-color: aquamarine">
                <td><strong style="color: red;">Sau khi sắp xếp:</strong></td>
                <td></td>
            </tr>
            <tr style="background-color: aquamarine">
                <td>Tăng dần:</td>
                <td>
                    <input readonly type="text" name="ascending" style="background-color: #BBFFFF;" value="<?php
                    if (isset($ascending))
                        echo $ascending;
                    ?>">
                </td>
            </tr>
            <tr style="background-color: aquamarine">
                <td>Giảm dần:</td>
                <td>
                    <input readonly type="text" name="descending" style="background-color: #BBFFFF;" value="<?php
                    if (isset($descending))
                        echo $descending;
                    ?>">
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <strong style="color: red;">(*)</strong> Các số được nhập cách nhau bằng dấu ","
                </td>
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