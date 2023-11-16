<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function sapXepTangDan($mang) {
            sort($mang);
            return $mang;
        }

        function sapXepGiamDan($mang) {
            rsort($mang);
            return $mang;
        }

        if(isset($_POST['submit'])){
            $mang = $_POST['mang'];
            $daySo = explode(",", $mang);
            //Loại bỏ khoảng trắng
            $mang = str_replace(' ', '', $mang);
            $tangDan = sapXepTangDan($daySo);
            $giamDan = sapXepGiamDan($daySo);

            $ketquaTangDan = implode(", ", $tangDan);
            //Loại bỏ khoảng trắng
            $ketquaTangDan = str_replace(' ', '', $ketquaTangDan);
            $ketquaGiamDan = implode(", ", $giamDan);
            //Loại bỏ khoảng trắng
            $ketquaGiamDan = str_replace(' ', '', $ketquaGiamDan);
        }
    ?>
    <form method="post" action="">
        <table style="background: lightblue">
            <tr style="background: #22a6b3">
                <th colspan="2">
                    SẮP XẾP MẢNG
                </th>
            </tr>
            <tr>
                <td>
                    Nhập mảng: 
                </td>
                <td>
                    <input type="text" name="mang" size="40" required value="<?php if(isset($mang)) echo $mang; ?>">
                </td>
            </tr>

            <tr>
                <td colspan="2" style="text-align: center">
                    <input type="submit" name="submit" value="Sắp xếp">
                </td>
            </tr>

            <tr>
                <td>
                    Mảng tăng dần: 
                </td>
                <td>
                    <input type="text" name="ketquaTangDan" readonly size="40" value="<?php if(isset($ketquaTangDan)) echo $ketquaTangDan; ?>">
                </td>
            </tr>

            <tr>
                <td>
                    Mảng giảm dần: 
                </td>
                <td>
                    <input type="text" name="ketquaGiamDan" readonly size="40" value="<?php if(isset($ketquaGiamDan)) echo $ketquaGiamDan; ?>">
                </td>
            </tr>

            <tr style = "background : #22a6b3">
                <th colspan="2" style="color: red">
                <?php
                    echo $msg = "(*) Các số được nhập cách nhau bằng dấu ',' ";
                ?>
            </tr>
        </table>
    </form>
</body>
</html>