<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function inMangNgauNhien($count, $min, $max)
    {
        if ($count > ($max - $min + 1))
            return false;
        $mang = array();
        while (count($mang) < $count) {
            $so_ngau_nhien = rand($min, $max);
            if (!in_array($so_ngau_nhien, $mang)) {
                $mang[] = $so_ngau_nhien;
            }
        }
        return $mang;
    }

    function taoMangNgauNhien($n)
    {
        $so_ngau_nhiens = array();
        for ($i = 0; $i < $n; $i++) {
            $so_ngau_nhien = rand();
            $so_ngau_nhiens[] = $so_ngau_nhien;
        }
        return $so_ngau_nhiens;
    }

    function demPhanTuChiaHetCho2($mang)
    {
        $count = 0;
        foreach ($mang as $gia_tri) {
            if ($gia_tri % 2 == 0)
                $count++;
        }
        return $count;
    }

    function demPhanTuItHon0($mang)
    {
        $count = 0;
        foreach ($mang as $gia_tri) {
            if ($gia_tri < 0)
                $count++;
        }
        return $count;
    }

    function tongPTNhoHon0($mang)
    { 
        $tong = 0;
        foreach ($mang as $gia_tri) {
            if ($gia_tri < 0)
                $tong += $gia_tri;
        }
        return $tong;
    }

    function tim0($mang)
    {
        $vi_tri = array();
        foreach ($mang as $key => $gia_tri) {
            if ($gia_tri === 0) {
                $vi_tri[] = $key;
            }
        }
        return $vi_tri;
    }

    if (isset($_POST['submit'])) {
        $input = $_POST['input'];
        if ($input > 0) {
            $mang2 = inMangNgauNhien($input, -100, 100);
            $mang_nn = taoMangNgauNhien($input);
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