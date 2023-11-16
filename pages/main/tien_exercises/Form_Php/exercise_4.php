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
            $toan = $_POST['math'];
            $ly = $_POST['physics'];
            $hoa = $_POST['chemistry'];
            $diem_san = $_POST['benchmarks'];

            if($toan > 0 and $ly > 0 and $hoa > 0 and $toan <=10 and $ly <= 10 and $hoa <=10){
                $tong_diem = $toan + $ly + $hoa;
                if($tong_diem >= $diem_san)
                    $ketqua = "Đậu";
                else $ketqua = "Rớt";
            }
            if($toan > 10 or $ly > 10 or $hoa > 10) {
                $msg = "Điểm Toán, Lý, Hóa phải <= 10";
            }
            if($toan == 0 or $ly == 0 or $hoa == 0){
                $tong_diem = $toan + $ly + $hoa;
                $ketqua = "Rớt";
            }
            if($toan < 0 or $ly < 0 or $hoa < 0)
                $msg = "Điểm Toán, Lý, Hóa phải >=0";
        }
    ?>
    <form name="universityExam'sResult" action="" method="post">
        <table style="background: AntiqueWhite;" align="center">
            <tr>
                <th colspan="2" style="background: 	#ff1493; color: white">KẾT QUẢ THI ĐẠI HỌC</th>
            </tr>
            <tr>
                <td>Toán:</td>
                <td>
                    <input type="number" step="any" name="math" size="20" value="<?php 
                        if(isset($toan)) echo $toan;
                    ?>">
                </td>
            </tr>
            <tr>
                <td>Lý:</td>
                <td>
                    <input type="number" step="any" name="physics" size="20" value="<?php 
                        if(isset($ly)) echo $ly;
                    ?>">
                </td>
            </tr>
            <tr>
                <td>Hóa:</td>
                <td>
                    <input type="number" step="any" name="chemistry" size="20" value="<?php 
                        if(isset($hoa)) echo $hoa;
                    ?>">
                </td>
            </tr>
            <tr>
                <td>Điểm chuẩn:</td>
                <td>
                    <input style="color: red;" type="number" step="any" name="benchmarks" size="20" value="<?php 
                        if(isset($diem_san)) echo $diem_san;
                    ?>">
                </td>
            </tr>
            <tr>
                <td>Tổng điểm:</td>
                <td>
                    <input type="number" step="any" name="sumMarks" size="20" readonly value="<?php 
                        if(isset($tong_diem)) echo $tong_diem;
                    ?>">
                </td>
            </tr>
            <tr>
                <td>Kết quả thi:</td>
                <td>
                    <input style="color: red" type="text" name="examResult" size="20" readonly value="<?php 
                        if(isset($ketqua)) echo $ketqua;
                    ?>">
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <input type="submit" value="Xem kết quả" name="submit" size="20">
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center; color: red">
                    <?php
                        if(isset($msg)) echo $msg;
                    ?>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>