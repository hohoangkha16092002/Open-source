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
        { //Hàm in mảng
            $string = implode("  ", $array);
            return $string;
        }

        function Ascending($array)
        { // Hàm tăng dần
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
        { // Hàm tăng dần
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

        //$inputArray = preg_replace('/[^a-zA-Z0-9, ]/', '', $input);
        $input_nospace = str_replace(' ', '', $input);

        $array = explode(",", $input_nospace);
        $ascending = PrintArray(Ascending($array));
        $descending = PrintArray(Descending($array));
    }
    ?>
    <form action="" name="sort" method="post">
        <table align="center" style="background-color: #E6E6FA; border: 1px solid;">
            <tr>
                <th colspan="2" style="background-color: #53868B; color: white">SẮP XẾP MẢNG</th>
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
            <tr style="background-color: #AFEEEE">
                <td><strong style="color: red;">Sau khi sắp xếp:</strong></td>
                <td></td>
            </tr>
            <tr style="background-color: #AFEEEE">
                <td>Tăng dần:</td>
                <td>
                    <input size="32" readonly type="text" name="ascending" style="background-color: #BBFFFF;" value="<?php
                    if (isset($ascending))
                        echo $ascending;
                    ?>">
                </td>
            </tr>
            <tr style="background-color: #AFEEEE">
                <td>Giảm dần:</td>
                <td>
                    <input size="32" readonly type="text" name="descending" style="background-color: #BBFFFF;" value="<?php
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