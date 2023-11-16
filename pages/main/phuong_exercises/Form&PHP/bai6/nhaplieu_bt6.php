<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input[type="number"]{
            color:blue;
            text-align: right;
        }

        input[type="radio"]{
            color: red;
            text-align: 5px;
        }
        td{
            color: red;
        }
        input[type="submit"]{
            
            text-align: center;
        }
    </style>
</head>
<body>
<form action="result_bt6.php" method="post">
        <table style="background: #dff9fb;">
            <tr style="background: #F5DEB3">
                <th colspan="2">
                    PHÉP TÍNH TRÊN HAI SỐ
                </th>
            </tr>

            <tr>
                <td style = "color: blue"><b>Chọn phép tính</b></td>
                <td>
                <input type="radio" name="operator" value="add">Cộng  
                <input type="radio" name="operator" value="subtract">Trừ
                <input type="radio"  name="operator" value="multiply">Nhân
                <input type="radio"  name="operator" value="divide">Chia
                </td>
            </tr>

            <tr>
                <td><b>Số thứ nhất</b></td>
                <td>
                    <input type="number" name="number1" size="20" value="<?php
                    if(isset($number1)) echo $number1;

                    ?>" required>
                </td>
            </tr>

            <tr>
                <td><b>Số thứ hai</b></td>
                <td>
                    <input type="number" name="number2" size="20" value="<?php
                    if(isset($number2)) echo $number2;

                    ?>" required>
                </td>
            </tr>

            <tr>
                <td  style="text-align: center" >
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