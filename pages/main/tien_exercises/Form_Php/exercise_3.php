<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh toán tiền điện</title>
</head>
<body>
    <?php
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $oldIndex = $_POST['oldIndex'];
            $newIndex = $_POST['newIndex'];
            $price = $_POST['price'];

            if($oldIndex >= 0 and $newIndex > 0){
                if($newIndex > $oldIndex){
                    $sumMoney = ($newIndex - $oldIndex) * $price;
                    $sumMoney = round($sumMoney,2);
                }
                else $msg = "Chỉ số mới phải > chỉ số cũ";
            }
            else $msg = "Chỉ số cũ và chỉ số mới phải > 0";
        }
    ?>
    <form name="electricity" action="" method="post">
        <table style="background: beige" align="center">
            <tr style="background: orange">
                <th colspan="2">THANH TOÁN TIỀN ĐIỆN</th>
            </tr>
            <tr>
                <td>Tên chủ hộ:</td>
                <td>
                    <input type="text" name="name" size="20" value="<?php 
                        if(isset($name)) echo $name;
                    ?>" pattern="[A-Za-zÀ-ỹẠ-ỹ\s]+" title="Chỉ nhập chữ (ký tự)" required>
                </td>
            </tr>
            <tr>
                <td>Chỉ số cũ:</td>
                <td>
                    <input type="number" name="oldIndex" size="20" value="<?php 
                        if(isset($oldIndex)) echo $oldIndex;
                    ?>" step="any">
                    <span>(Kw)</span>
                </td>
            </tr>
            <tr>
                <td>Chỉ số mới:</td>
                <td>
                    <input type="number" name="newIndex" size="20" value="<?php 
                        if(isset($newIndex)) echo $newIndex;
                    ?>" step="any">
                    <span>(Kw)</span>
                </td>
            </tr>
            <tr>
                <td>Đơn giá:</td>
                <td>
                    <input type="number" name="price" size="20" value="<?php 
                        if(isset($price)) echo $price;
                    ?>" step="any" required>
                    <span>(VNĐ)</span>
                </td>
            </tr>
            <tr>
                <td>Số tiền thanh toán:</td>
                <td>
                    <input readonly type="number" name="sumMoney" size="20" style="background: pink" value="<?php 
                        if(isset($sumMoney)) echo $sumMoney;
                    ?>" step="any">
                    <span>(VNĐ)</span>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <input type="submit" name="submit" value="Tính">
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center; color: red">
                    <?php
                        if(isset($msg)) echo $msg;
                    ?>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>