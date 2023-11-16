<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function generateRandomUniqueNumbers($count, $min, $max)
    { //Prints the elements in the array according to count, min, max
        if ($count > ($max - $min + 1)) {
            return false; // Không đủ số để tạo ra số lượng yêu cầu
        }

        $uniqueNumbers = array();

        while (count($uniqueNumbers) < $count) {
            $randomNumber = rand($min, $max);

            if (!in_array($randomNumber, $uniqueNumbers)) {
                $uniqueNumbers[] = $randomNumber;
            }
        }

        return $uniqueNumbers;
    }

    function generateRandomNumbers($n)
    { //Prints the elements in the array according to count
        $randomNumbers = array();

        for ($i = 0; $i < $n; $i++) {
            $randomNumber = rand();
            $randomNumbers[] = $randomNumber;
        }

        return $randomNumbers;
    }

    function demPhanTuChiaHetCho2($array)
    { //Đếm số lượng các phần tử chẵn trong mảng
        $count = 0;
        foreach ($array as $value) {
            if ($value % 2 == 0)
                $count++;
        }
        return $count;
    }

    function demPhanTuItHon0($array)
    { //Đếm số lượng các phần tử < 0 trong mảng
        $count = 0;
        foreach ($array as $value) {
            if ($value < 0)
                $count++;
        }
        return $count;
    }

    function tongPTNhoHon0($array)
    { //Tổng các phần tử âm
        $sum = 0;
        foreach ($array as $value) {
            if ($value < 0)
                $sum += $value;
        }
        return $sum;
    }

    function tim0($array)
    { //In vị trí các phần tử có giá trị = 0
        $positions = array();
        foreach ($array as $key => $value) {
            if ($value === 0) {
                $positions[] = $key;
            }
        }
        return $positions;
    }

    if (isset($_POST['submit'])) {
        $input = $_POST['input'];
        if ($input > 0) {
            $mang2 = generateRandomUniqueNumbers($input, -100, 100);
            $mang_nn = generateRandomNumbers($input);
            $chia_het_cho_2 = demPhanTuChiaHetCho2($mang2);
            $nho_hon_0 = demPhanTuItHon0($mang2);
            $tong_pt_nho_hon_0 = tongPTNhoHon0($mang2);
            $vi_tri_0 = tim0($mang2);
        } else
            $msg = "n không phải là số nguyên dương";
    }
    ?>
    <form action="" method="post">
        <table>
            <tr>
                <th colspan="2">BÀI 1</th>
            </tr>
            <tr>
                <td>Nhập số n:</td>
                <td>
                    <input type="number" name="input" size="20" value="<?php
                    if (isset($input))
                        echo $input;
                    ?>">
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <input type="submit" name="submit" value="Thực hiện">
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center; color: red;">
                    <?php
                    if (isset($msg))
                        echo $msg;
                    ?>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <?php
                    if (isset($mang2)) {
                        echo "Mảng: " . implode(', ', $mang2);
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <?php
                    if (isset($$chia_het_cho_2))
                        echo "Số phần tử chãn trong mảng: " . $$chia_het_cho_2;
                    ?>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <?php
                    if (isset($nho_hon_0))
                        echo "Số phần tử < 0 trong mảng: " . $nho_hon_0;
                    ?>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <?php
                    if (isset($tong_pt_nho_hon_0))
                        echo "Tổng phần tử < 0 trong mảng: " . $tong_pt_nho_hon_0;
                    ?>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <?php
                    if (isset($vi_tri_0))
                        echo "Vị trí của các phần tử có giá trị bằng 0 là: " . implode(', ', $vi_tri_0);
                    ?>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <?php
                    if (isset($mang2)) {
                        sort($mang2);
                        echo "Mảng sau khi đã sắp xếp là: ";
                        foreach ($mang2 as $value) {
                            echo $value . " ";
                        }
                    }
                    ?>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>