<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_POST['submit'])){
        $chieudai = $_POST['dai'];
        $chieurong = $_POST['rong'];
        if(is_numeric(($chieudai)) and is_numeric($chieurong))
            if($chieudai > 0 and $chieurong > 0)
                if($chieudai>=$chieurong)
                    $dientich = $chieudai * $chieurong;
                else $msg = "Chiều dài không được nhỏ hơn chiều rộng";
            else $msg = "Chiều dài và chiều rộng không được <=0";
        else $msg = "Chiều dài hoặc chiều rộng ko phải số";

        }
    ?>

    <form method="post" name="HCM">
        <table style="background: beige">
            <tr style="background: pink">
                <th colspan="2">
                    DIEN TICH HINH CHU NHAT
                </th>
            </tr>
            <tr>
                <td>
                    Chieu dai:
                </td>
                <td>
                    <input type="text" name="dai" size="20" value="<?php
                    if(isset($chieurong)) echo $chieudai;

                    ?>">
                </td>
            </tr>
            <tr>
                <td>
                    Chieu rong:
                </td>
                <td>
                    <input type="text" name="rong" size="20" value="<?php
                    if(isset($chieurong)) echo $chieurong;

                    ?>">
                </td>
            </tr>
            <tr>
                <td>
                    Dien tich:
                </td>
                <td>
                    <input type="text" name="dientich" size="20" readonly style="background: pink"
                    value="<?php
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