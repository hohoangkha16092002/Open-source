<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rectangle</title>
</head>
<body>
    <?php
        if(isset($_POST['submit'])){
            $length = $_POST['length'];
            $width = $_POST['width'];
            
            if($length >0 and $width>0){
                if($length >= $width)
                    $area = $length*$width;
                else $msg ="Chiều dài phải > chiều rộng";
            } else $msg="Chiều dài hoặc chiều rộng phải > 0";

            
        }
    ?>
    <form name="rectangle" action="" method="post">
        <table style="background: beige;">
            <tr style="background: orange;">
                <th colspan="2">DIỆN TÍCH HÌNH CHỮ NHẬT</th>
            </tr>
            <tr>
                <td>Chiều dài: </td>
                <td>
                    <input type="number" name="length" size="10" step="any" value="<?php 
                        if(isset($length)) echo $length;
                    ?>">
                </td>
            </tr>
            <tr>
                <td>Chiều rộng: </td>
                <td>
                    <input type="number" name="width" size="10" step="any" value="<?php 
                        if(isset($width)) echo $width;
                    ?>">
                </td>
            </tr>
            <tr>
                <td>Diện tích: </td>
                <td>
                    <input type="text" name="area" size="10" readonly value="<?php 
                        if(isset($area)) echo $area;
                    ?>">
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <input type="submit" name="submit" value="Tính">
                </td>
            </tr>
            <tr>
                <td colspan="2" style="color: red; text-align:center">
                    <?php
                        if(isset($msg)) echo $msg;
                    ?>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>