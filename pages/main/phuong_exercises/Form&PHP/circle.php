<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chu vi và diện tích hình tròn</title>
</head>
<body>

<?php
        if(isset($_POST['submit'])){
            $bankinh = $_POST['bankinh'];
            $PI = 3.14;
            if(is_numeric($bankinh)){
                if($bankinh > 0) {
                    $chuvi = 2 * $PI * $bankinh;
                    $dientich = $PI * $bankinh * $bankinh;
                } else $msg =  "Bán kính phải lớn hơn 0";
            } else $msg = "Bán kính phải là số!!!";
        }
?>
<form method="post" name="HCM">
        <table style="background: yellow">
            <tr style="background: orange">
                <th colspan="2">
                    CHU VI VÀ DIỆN TÍCH HÌNH TRÒN
                </th>
            </tr>
            <tr>
                <td>
                    Bán kính:
                </td>
                <td>
                    <input type="text" name="bankinh" size="20" value="<?php
                    if(isset($bankinh)) echo $bankinh;

                    ?>">
                </td>
            </tr>

            <tr>
                <td>
                    Chu vi:
                </td>
                <td>
                    <input type="text" name="chuvi" size="20" value="<?php
                    if(isset($chuvi)) echo $chuvi;

                    ?>">
                </td>
            </tr>

            <tr>
                <td>
                    Diện tích:
                </td>
                <td>
                    <input type="text" name="dientich" size="20" value="<?php
                    if(isset($dientich)) echo $dientich;

                    ?>">
                </td>
            </tr>

            <tr>
                <td colspan="2" style="text-align: center">
                    <input type="submit" name="submit" value="Tính">
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