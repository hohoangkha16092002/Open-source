<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_POST['sapxep'])) {
        $nhap_mang = $_POST['nhap_mang'];

        function in_mang($mang)
        {
            $chuoi = implode("  ", $mang);
            return $chuoi;
        }

        function tang_dan($mang)
        {
            $tam = 0;
            for ($i = 0; $i < count($mang) - 1; $i++) {
                for ($j = $i + 1; $j < count($mang); $j++) {
                    if ($mang[$i] > $mang[$j]) {
                        $tam = $mang[$j];
                        $mang[$j] = $mang[$i];
                        $mang[$i] = $tam;
                    }
                }
            }
            return $mang;
        }

        function giam_dan($mang)
        {
            $tam = 0;
            for ($i = 0; $i < count($mang) - 1; $i++) {
                for ($j = $i + 1; $j < count($mang); $j++) {
                    if ($mang[$i] < $mang[$j]) {
                        $tam = $mang[$j];
                        $mang[$j] = $mang[$i];
                        $mang[$i] = $tam;
                    }
                }
            }
            return $mang;
        }
        $nhap_mang1 = str_replace(' ', '', $nhap_mang);

        $mang = explode(" , ", $nhap_mang1);
        $tang_dan = in_mang(tang_dan($mang));
        $giam_dan = in_mang(giam_dan($mang));
    }
    ?>
    <form action="" name="sap-xep" method="post">
        <table style="background-color: beige;">
            <tr>
                <th colspan="2" style="background-color: #a4d3ee; color: white">SẮP XẾP MẢNG</th>
            </tr>
            <tr>
                <td>Nhập mảng:</td>
                <td>
                    <input required type="text" name="nhap_mang" size="32" value="<?php
                    if (isset($nhap_mang))
                        echo $nhap_mang;
                    ?>">
                    <strong style="color: red;">(*)</strong>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="sapxep" value="Sắp xếp tăng/giảm" style="background-color;: white">
                </td>
            </tr>
            <tr style="background-color: #C6E2FF">
                <td><strong style="color: red;">Sau khi sắp xếp:</strong></td>
                <td></td>
            </tr>
            <tr style="background-color: #C6E2FF">
                <td>Tăng dần:</td>
                <td>
                    <input size="32" readonly type="text" name="tang_dan" style="background-color: #BBFFFF;" value="<?php
                    if (isset($tang_dan))
                        echo $tang_dan;
                    ?>">
                </td>
            </tr>
            <tr style="background-color: #C6E2FF">
                <td>Giảm dần:</td>
                <td>
                    <input size="32" readonly type="text" name="giam_dan" style="background-color: #BBFFFF;" value="<?php
                    if (isset($giam_dan))
                        echo $giam_dan;
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