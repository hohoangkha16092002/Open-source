<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diện tích và chu vi hình tròn</title>
</head>
<body>
    <?php
        if(isset($_POST['submit'])){
            $radius = $_POST['radius'];
            $pi = 3.14;

            if($radius >= 0){
                $area = $pi * $radius * $radius;
                $diameter = $pi * $radius * 2;
            }
            else $msg = "Bán kính hình tròn không được âm";
        }
    ?>
    <form action="" name="circle" method="post">
        <table style="background: beige;">
            <tr style="background: orange;">
                <th colspan="2">DIỆN TÍCH và CHU VI HÌNH TRÒN</th>
            </tr>
            <tr>
                <td>Bán kính: </td>
                <td>
                    <input type="number" name="radius" size="20" value="<?php 
                        if(isset($radius)) echo $radius;
                    ?>" step="any">
                </td>
            </tr>
            <tr>
                <td>Diện tích:</td>
                <td>
                    <input type="text" name="area" size="20" style="background: pink;" readonly value="<?php 
                        if(isset($area)) echo $area;
                    ?>">
                </td>
            </tr>
            <tr>
                <td>Chu vi:</td>
                <td>
                    <input type="text" name="diameter" size="20" style="background: pink;" readonly value="<?php 
                        if(isset($diameter)) echo $diameter;
                    ?>">
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <input type="submit" name="submit" value="Tính">
                </td>
            </tr>
            <tr>
                <td colspan="2" style="color: red; text-align: center">
                    <?php
                        if(isset($msg)) echo $msg;
                    ?>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>