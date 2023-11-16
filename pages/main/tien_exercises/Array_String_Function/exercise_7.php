<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính năm âm lịch</title>
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
            $hinh_anh = "<img src='12con_giap/$hinh' alt='Hình con vật' width='200px' height='200px'>";
        } else {
            $msg = "Vui lòng nhập năm hợp lệ";
        }
    }
    ?>
    <form action="" name="lunarYear" method="post">
        <table align="center" style="background-color: #E6E6FA;">
            <tr>
                <th colspan="3" style="text-align: center; background-color: blue; color: white">TÍNH NĂM ÂM LỊCH</th>
            </tr>
            <tr>
                <td style="text-align: center; color: blue">Năm dương lịch</td>
                <td></td>
                <td style="text-align: center; color: blue">Năm dương lịch</td>
            </tr>
            <tr>
                <td align="center">
                    <input style="color: blue" type="number" name="year" value="<?php
                    if (isset($nam))
                        echo $nam;
                    ?>">
                </td>
                <td align="center">
                    <input type="submit" name="submit" value="=>" style="color: red; font-weight: bold;">
                </td>
                <td align="center">
                    <input readonly style="color: red; font-weight: bold;" type="text" name="lunarYear" value="<?php
                    if (isset($nam_al))
                        echo $nam_al;
                    ?>">
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <?php
                    if (isset($hinh_anh))
                        echo $hinh_anh;
                    ?>
                </td>
            </tr>

        </table>
    </form>
</body>

</html>