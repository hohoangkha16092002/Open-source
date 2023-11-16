<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính năm âm lịch</title>
    <style>
        th {
            text-align: center;
            background-color: #0b63cb;
            color: white;
        }

        td {
            text-align: center;
        }
        input[type="number"],[type="text"] {
            width: 80px; 
        }
        table {
            width: 40%;
        }
    </style>

</head>

<body>
    <?php
    if (isset($_POST['submit'])) {
        $mang_can = array("Quý", "Giáp", "Ất", "Binh", "Đinh", "Mậu", "Ký", "Canh", "Tân", "Nhâm");
        $mang_chi = array("Hợi", "Tý", "Sửu", "Dần", "Mão", "Thìn", "Tỵ", "Ngọ", "Mùi", "Thân", "Dậu", "Tuất");
        $mang_hinh = array("hoi.jpg", "ty.jpg", "suu.jpg", "dan.jpg", "mao.jpg", "thin.jpg", "ran.jpg", "ngo.jpg", "mui.jpg", "than.jpg", "dau.jpg", "tuat.jpg");
        $nam = $_POST['year'];

        if ($nam > 0) {
            $year = $nam - 3;
            $can = $year % 10;
            $chi = $year % 12;
            $nam_al = $mang_can[$can];
            $nam_al = $nam_al . " " . $mang_chi[$chi];
            $hinh = $mang_hinh[$chi];
            $hinh_anh = "<img style='height: 500px; width: 300px' src='12con_giap/$hinh' alt='Hình con giáp' >";
        } else {
            $msg = "Vui lòng nhập năm hợp lệ";
        }
    }
    ?>
    <form action="" name="lunarYear" method="post">
        <table style="background-color: #b9eeff; margin: 5% auto 0;">
            <tr>
                <th colspan="3" style="text-align: center; background-color: #0b63cb; color: white">TÍNH NĂM ÂM LỊCH</th>
            </tr>
            <tr>
                <td style="text-align: center;">Năm dương lịch</td>
                <td></td>
                <td style="text-align: center;">Năm âm lịch</td>
            </tr>
            <tr>
                <td>
                    <input type="number" name="year" width="100px" value="<?php
                    if (isset($nam))
                        echo $nam;
                    ?>">
                </td>
                <td>
                    <input style="background-color: #faffd7;" type="submit" name="submit" value="=>" style="color: red; font-weight: bold;">
                </td>
                <td>
                    <input readonly style="background-color: #faffd7; color: red; font-weight: bold;" type="text" name="lunarYear" value="<?php
                    if (isset($nam_al))
                        echo $nam_al;
                    ?>">
                </td>
            </tr>
            <tr>
                <td align="center" colspan="3">
                    <img></img> <?php 
                    if (isset($hinh_anh))
                        echo $hinh_anh;
                    ?>
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