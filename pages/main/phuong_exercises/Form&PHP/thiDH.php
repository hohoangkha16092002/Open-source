<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết quả thi đại học</title>
</head>
<body>

<?php
        if(isset($_POST['submit'])){
            $toan = $_POST['toan'];
            $ly = $_POST['ly'];
            $hoa = $_POST['hoa'];
            $diemchuan = $_POST['diemchuan'];
            $tong = $_POST['tong'];
            if(is_numeric(($toan)) and is_numeric($ly) and is_numeric($hoa))
                if($toan <=  10 and $ly <= 10 and $hoa <= 10)
                    if($toan > 0 and $ly > 0 and $hoa > 0)
                        $tong = ($toan + $ly + $hoa);
                    else $msg = "Điểm toán hoặc lý hoặc hóa không được <=0";
                else $msg = "Điểm toán, lý, hóa không được lớn hơn 10";
            else $msg = "Điểm toán hoặc lý hoặc hóa  ko phải số";

            if($tong >= $diemchuan)
                $ketqua = "Đậu";
            else $ketqua = "Rớt";
        }
    ?>
<form method="post" name="tiendien">
        <table style="background: lightpink;">
            <tr style="background: pink">
                <th colspan="2">
                    THANH TOÁN TIỀN ĐIỆN
                </th>
            </tr>

            <tr>
                <td>Toán:</td>
                <td>
                    <input type="text" name="toan"  size="20" value="<?php
                    if(isset($toan)) echo $toan;
                    ?>">
                </td>
            </tr>

            <tr>
                <td>Lý:</td>
                <td>
                    <input type="text" name="ly" size="20" value="<?php
                    if(isset($ly)) echo $ly;

                    ?>">
                </td>
            </tr>

            <tr>
                <td>Hóa:</td>
                <td>
                    <input type="text" name="hoa" size="20" value="<?php
                    if(isset($hoa)) echo $hoa;

                    ?>">
                </td>
            </tr>

            <tr>
                <td>Điểm chuẩn:</td>
                <td>
                    <input type="text" name="diemchuan" size="20" style="color: red;" value="<?php
                    if(isset($diemchuan)) echo $diemchuan;

                    ?>">
                </td>
            </tr>

            <tr>
                <td>Tổng điểm:</td>
                <td>
                    <input type="text" name="tong" size="20" readonly style="background: pink"
                    value="<?php
                    if(isset($tong)) echo $tong;

                    ?>">
                </td>
            </tr>

            <tr>
                <td>Kết quả thi:</td>
                <td>
                    <input type="text" name="ketqua" size="20" readonly style="background: pink"
                    value="<?php
                    if(isset($ketqua)) echo $ketqua;

                    ?>">
                </td>
            </tr>

            <tr>
                <td colspan="2" style="text-align: center">
                    <input type="submit" name="submit" value="Xem kết quả">
                </td>
            </tr>

            <tr>
                <th colspan="2" style="color: red">
                <?php
                    if(isset($msg)) echo $msg;
                ?>
            </tr>

        </table>
    </form>
</body>
</html>