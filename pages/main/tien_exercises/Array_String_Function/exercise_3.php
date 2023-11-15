<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phát sinh mảng và tính toán</title>
</head>

<body>
    <?php
    if (isset($_POST['submit'])) {
        $input = $_POST['input'];

        function CreateArray($input)
        { //Tạo mảng số ngẫu nhiên
            $array = array();
            for ($i = 0; $i < $input; $i++) {
                $array[] = rand(0, 20);
            }
            return $array;
        }

        function FindMax($array)
        {
            $max = $array[0];
            foreach ($array as $value) {
                if ($value > $max) {
                    $max = $value;
                }
            }
            return $max;
        }

        function FindMin($array)
        {
            $min = $array[0];
            foreach ($array as $value) {
                if ($value < $min) {
                    $min = $value;
                }
            }
            return $min;
        }

        function Sum($array)
        {
            $sum = 0;
            foreach ($array as $value) {
                $sum += $value;
            }
            return $sum;
        }

        if ($input > 0) {
            $createArray = CreateArray($input);
            $array = implode(" ", $createArray);
            $max = FindMax($createArray);
            $min = FindMin($createArray);
            $sumArray = Sum($createArray);
        } else {
            $msg = "(*)Số phần tử phải lớn hơn 0";
        }
    }
    ?>

    <form action="" method="post" name="exercise_3">
        <table align="center" style="border: 1px solid;">
            <tr>
                <th colspan="2" style="background-color: #993333; color: white; text-align: center">
                    PHÁT SINH MẢNG VÀ TÍNH TOÁN
                </th>
            </tr>
            <tr style="background-color: pink;">
                <td>Nhập số phần tử:</td>
                <td>
                    <input type="number" name="input" size="20" value="<?php
                    if (isset($input))
                        echo $input;
                    ?>">
                </td>
            </tr>
            <tr style="background-color: pink;">
                <td></td>
                <td>
                    <input size="16" style="background-color: yellow;" type="submit" name="submit"
                        value="Phát sinh và tính toán">
                </td>
            </tr>
            <tr>
                <td>Mảng:</td>
                <td>
                    <input size="30" style="background-color: #FF3366;" type="text" name="array" value="<?php
                    if (isset($array))
                        echo $array;
                    ?>">
                </td>
            </tr>
            <tr>
                <td>GTLN (MAX) trong mảng:</td>
                <td>
                    <input readonly size="12" style="background-color: #FF3366;" type="text" name="max" value="<?php
                    if (isset($max))
                        echo $max;
                    ?>">
                </td>
            </tr>
            <tr>
                <td>TTNN (MIN) trong mảng:</td>
                <td>
                    <input readonly size="12" style="background-color: #FF3366;" type="text" name="min" value="<?php
                    if (isset($min))
                        echo $min;
                    ?>">
                </td>
            </tr>
            <tr>
                <td>Tổng mảng:</td>
                <td>
                    <input readonly size="12" style="background-color: #FF3366;" type="text" name="sumArray" value="<?php
                    if (isset($sumArray))
                        echo $sumArray;
                    ?>">
                </td>
            </tr>
            <tr>
                <td style="text-align: center;" colspan="2">(<strong style="color: red;">Ghi chú:</strong> Các phần tử
                    trong mảng sẽ có giá trị từ 0 đến 20)</td>
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