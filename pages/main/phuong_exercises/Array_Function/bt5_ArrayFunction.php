<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    function xuatMang($array) {
        $mang = implode(", ", $array);
        echo $mang;
    }

    function thayThe($mang, $needChange, $change){
        $ketqua = str_replace($needChange,$change,$mang,$count);
        if($count > 0){
            return $ketqua;
        } else {
            return $msg = "Không tìm thấy $needChange trong mảng";
        }

    }
        if(isset($_POST['submit'])){
            $mang = $_POST['mang'];
            $daySo = explode(" , ", $mang);
            //Loại bỏ khoảng trắng
            $mang = str_replace(' ', '', $mang);
            $msg = "";
            $mang1 = $_POST['mang1'];
            
            $needChange = $_POST['needChange'];
            $change = $_POST['change'];
            $ketqua = thayThe($mang , $needChange , $change);
            
        }
    ?>
<form method="post" action="">
        <table style="background: lightblue" align="center">
            <tr style="background: #22a6b3">
                <th colspan="2">
                    TÌM KIẾM
                </th>
            </tr>
            <tr>
                <td>
                    Nhập mảng: 
                </td>
                <td>
                    <input type="text" name="mang" size="30" required value="<?php
                    if(isset($mang)) echo $mang;

                    ?>">
                </td>
            </tr>

            <tr>
                <td>
                    Giá trị cần thay thế: 
                </td>
                <td>
                    <input type="text" name="needChange" size="20" required value="<?php
                    if(isset($needChange)) echo $needChange;

                    ?>">
                </td>
            </tr>

            <tr>
                <td>
                    Giá trị thay thế: 
                </td>
                <td>
                    <input type="text" name="change" size="20" required value="<?php
                    if(isset($change)) echo $change;

                    ?>">
                </td>
            </tr>

            <tr>
                <td colspan="2" style="text-align: center">
                    <input type="submit" name="submit" value="Thay thế">
                </td>
            </tr>

            <tr>
                <td>
                    Mảng cũ: 
                </td>
                <td>
                    <input type="text" name="mang1" readonly size="30"  value="<?php
                    if(isset($mang1)) xuatMang($daySo);

                    ?>">
                </td>
            </tr>

            <tr>
                <td>
                    Kết quả tìm kiếm: 
                </td>
                <td>
                    <input type="text" name="ketqua"  readonly size="30"  value="<?php
                    if(isset($ketqua)) echo $ketqua;

                    ?>">
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