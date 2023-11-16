<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        function timKIem($daySo, $so){
            $vitri = array_search($so,$daySo);
            if($vitri !== false){
                return $ketqua = "Tìm thấy $so tại vị trí thứ $vitri của mảng";
            } else {
                return $ketqua = "Không tìm thấy $so trong mảng";
            }

        }
        if(isset($_POST['submit'])){
            $mang = $_POST['mang'];
            $daySo = explode(",", $mang);
            
            $so = $_POST['so'];
            $mang1 = $mang;

            //Loại bỏ khoảng trắng
            $mang1 = str_replace(' ', '', $mang1);
            
            $ketqua = timKIem($daySo,$so);
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
                    Nhập số cần tìm: 
                </td>
                <td>
                    <input type="text" name="so" size="20" required value="<?php
                    if(isset($so)) echo $so;

                    ?>">
                </td>
            </tr>

            <tr>
                <td colspan="2" style="text-align: center">
                    <input type="submit" name="submit" value="Tìm kiếm">
                </td>
            </tr>

            <tr>
                <td>
                    Mảng: 
                </td>
                <td>
                    <input type="text" name="mang1" readonly size="30"  value="<?php
                    if(isset($mang1)) echo $mang1;

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