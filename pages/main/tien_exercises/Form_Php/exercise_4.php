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
            $math = $_POST['math'];
            $physics = $_POST['physics'];
            $chemistry = $_POST['chemistry'];
            $benchmarks = $_POST['benchmarks'];

            if($math > 0 and $physics > 0 and $chemistry > 0 and $math <=10 and $physics <= 10 and $chemistry <=10){
                $sumMarks = $math + $physics + $chemistry;
                if($sumMarks >= $benchmarks)
                    $examResult = "Đậu";
                else $examResult = "Rớt";
            }
            if($math > 10 or $physics > 10 or $chemistry > 10) {
                $msg = "Điểm Toán, Lý, Hóa phải <= 10";
            }
            if($math == 0 or $physics == 0 or $chemistry == 0){
                $sumMarks = $math + $physics + $chemistry;
                $examResult = "Rớt";
            }
            if($math < 0 or $physics < 0 or $chemistry < 0)
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
                        if(isset($math)) echo $math;
                    ?>">
                </td>
            </tr>
            <tr>
                <td>Lý:</td>
                <td>
                    <input type="number" step="any" name="physics" size="20" value="<?php 
                        if(isset($physics)) echo $physics;
                    ?>">
                </td>
            </tr>
            <tr>
                <td>Hóa:</td>
                <td>
                    <input type="number" step="any" name="chemistry" size="20" value="<?php 
                        if(isset($chemistry)) echo $chemistry;
                    ?>">
                </td>
            </tr>
            <tr>
                <td>Điểm chuẩn:</td>
                <td>
                    <input style="color: red;" type="number" step="any" name="benchmarks" size="20" value="<?php 
                        if(isset($benchmarks)) echo $benchmarks;
                    ?>">
                </td>
            </tr>
            <tr>
                <td>Tổng điểm:</td>
                <td>
                    <input type="number" step="any" name="sumMarks" size="20" readonly value="<?php 
                        if(isset($sumMarks)) echo $sumMarks;
                    ?>">
                </td>
            </tr>
            <tr>
                <td>Kết quả thi:</td>
                <td>
                    <input style="color: red" type="text" name="examResult" size="20" readonly value="<?php 
                        if(isset($examResult)) echo $examResult;
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