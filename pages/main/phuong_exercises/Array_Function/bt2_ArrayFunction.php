<!DOCTYPE html>
<html>
<head>
    <title>Form tính tổng dãy số</title>
</head>
<body>
    <?php
    if(isset($_POST['submit'])){
        $daySo = $_POST["daySo"];
        $msg = "";
        //Loại bỏ khoảng trắng
        $daySo = str_replace(' ', '', $daySo);
        //Tách số thành 1 mảng
        $mang = explode(",", $daySo);
        
        $tong = 0;
        foreach($mang as $so){
            $tong += intval($so);
        }
        $tongDaySo = $tong;
    }
    ?>

    <form method="post" action="">
        <table style="background: lightblue">
            <tr style="background: #D980FA">
                <th colspan="2">
                    NHẬP VÀ TÍNH TRÊN DÃY SỐ
                </th>
            </tr>
            <tr>
                <td>
                    Nhập dãy số: 
                </td>
                <td>
                    <input type="text" name="daySo" id="daySo" size="20" required value="<?php
                    if(isset($daySo)) echo $daySo;

                    ?>">
                </td>
            </tr>

            <tr>
                <td colspan="2" style="text-align: center">
                    <input type="submit" name="submit" value="Tổng dãy số">
                </td>
            </tr>

            <tr>
                <td>
                    Tổng dãy số:
                </td>
                <td>
                    <input type="text" name="tongDaySo" id="tongDaySo" readonly size="20"  value="<?php
                    if(isset($tongDaySo)) echo $tongDaySo;

                    ?>">
                </td>
            </tr>

            <tr>
            <th colspan="2" style="color: red">
            <?php
                echo "(*) Các số được nhập cách nhau bằng dấu ','";
            ?>
            </tr>
</table>
</form>
</body>
</html>