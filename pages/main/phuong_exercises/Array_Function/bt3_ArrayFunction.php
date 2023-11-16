<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function taoMang($soPhanTu) {
            $array = [];
            for ($i = 0; $i < $soPhanTu; $i++) {
                $array[] = rand(0, 20);
            }
            return $array;
        }
    
        function xuatMang($array) {
            $mang =  implode(' ', $array) . "<br>";
        }
    
        function tinhTong($array) {
            $tongMang = array_sum($array);
            return $tongMang;
        }
    
        function timMin($array) {
            $GTNN = min($array);
            return $GTNN;
        }
    
        function timMax($array) {
            $GTLN = max($array);
            return $GTLN;
        }
    
        if(isset($_POST['submit'])){
            $soPhanTu = $_POST['soPhanTu'];
            $tongMang = $_POST['tongMang'];
            $mang = $_POST['mang'];

            $msg = "";

            if(is_numeric($soPhanTu) && intval($soPhanTu) == $soPhanTu && $soPhanTu > 0){
                
                $array = taoMang($soPhanTu);
                $mang = implode(' ', $array);

                xuatMang($array);

                $tongMang = tinhTong($array);
                $GTNN = timMin($array);
                $GTLN = timMax($array);
            }
        }
    ?>
<form method="post" action="">
        <table style="background: lightblue" align="center">
            <tr style="background: #D980FA">
                <th colspan="2">
                    PHÁT SINH MẢNG VÀ TÍNH TOÁN
                </th>
            </tr>
            <tr>
                <td>
                    Nhập số phần tử
                </td>
                <td>
                    <input type="number" name="soPhanTu"  size="20" required value="<?php
                    if(isset($soPhanTu)) echo $soPhanTu;

                    ?>">
                </td>
            </tr>

            <tr>
                <td colspan="2" style="text-align: center">
                    <input type="submit" name="submit" value="Phát sinh và tính toán">
                </td>
            </tr>

            <tr>
                <td>
                    Mảng:
                </td>
                <td>
                    <input type="text" name="mang" size="20"  value="<?php
                    if(isset($mang)) echo $mang;

                    ?>">
                </td>
            </tr>

            <tr>
                <td>
                    GTLN (MAX) trong mảng:
                </td>
                <td>
                    <input type="text" name="GTLN" size="20" readonly value="<?php
                    if(isset($GTLN)) echo $GTLN;

                    ?>">
                </td>
            </tr>

            <tr>
                <td>
                    GTNN (MIN) trong mảng:
                </td>
                <td>
                    <input type="text" name="GTNN" size="20" readonly  value="<?php
                    if(isset($GTNN)) echo $GTNN;

                    ?>">
                </td>
            </tr>

            <tr>
                <td>
                    Tổng dãy số:
                </td>
                <td>
                    <input type="text" name="tongMang"  size="20" readonly value="<?php
                    if(isset($tongMang)) echo $tongMang;

                    ?>">
                </td>
            </tr>
            <tr>
            <th colspan="2" style="color: red">
            <?php
                echo $msg = "<u>Ghi chú:</u> Các phần tử trong mảng sẽ có giá trị từ 0 đến 20<br> ";
            ?>
            </tr>
</table>
</form>
</body>
</html>