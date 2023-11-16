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

        function PrintArray($array)
        {
            $string = implode(", ", $array);
            return $string;
        }

        function Ascending($array)
        {
            $temp = 0;
            for ($i = 0; $i < count($array) - 1; $i++) {
                for ($j = $i + 1; $j < count($array); $j++) {
                    if ($array[$i] > $array[$j]) {
                        $temp = $array[$j];
                        $array[$j] = $array[$i];
                        $array[$i] = $temp;
                    }
                }
            }
            return $array;
        }

        function Descending($array)
        {
            $temp = 0;
            for ($i = 0; $i < count($array) - 1; $i++) {
                for ($j = $i + 1; $j < count($array); $j++) {
                    if ($array[$i] < $array[$j]) {
                        $temp = $array[$j];
                        $array[$j] = $array[$i];
                        $array[$i] = $temp;
                    }
                }
            }
            return $array;
        }
        $input_nospace = str_replace(' ', '', $input);
        $array = explode(",", $input_nospace);
        $ascending = PrintArray(Ascending($array));
        $descending = PrintArray(Descending($array));
    }
    ?>
    <form action="" name="sort" method="post">
        <table align="center" style="background-color: #d3ddd2; border: 1px solid; margin: 8% auto 0;">
            <tr>
                <th colspan="2" style="background-color: #339a94; color: white">SẮP XẾP MẢNG</th>
            </tr>
            <tr>
                <td>Nhập mảng:</td>
                <td>
                    <input required type="text" name="input" size="32" value="<?php
                                                                                if (isset($input))
                                                                                    echo $input;
                                                                                ?>">
                    <strong style="color: red;">(*)</strong>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="sort" value="Sắp xếp tăng/giảm">
                </td>
            </tr>
            <tr style="background-color: #cbe5e2">
                <td><strong style="color: red;">Sau khi sắp xếp:</strong></td>
                <td></td>
            </tr>
            <tr style="background-color: #cbe5e2">
                <td>Tăng dần:</td>
                <td>
                    <input size="32" readonly type="text" name="ascending" style="background-color: #c9fefd;" value="<?php
                                                                                                                        if (isset($ascending))
                                                                                                                            echo $ascending;
                                                                                                                        ?>">
                </td>
            </tr>
            <tr style="background-color: #cbe5e2">
                <td>Giảm dần:</td>
                <td>
                    <input size="32" readonly type="text" name="descending" style="background-color: #c9fefd;" value="<?php
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