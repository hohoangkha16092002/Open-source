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
            $operation = $_POST['operation'];
            $index1 = $_POST['index1'];
            $index2 = $_POST['index2'];

            if ($index2 == 0 && $operation == 'divide') {
                // Dữ liệu không hợp lệ, quay lại trang trước
                header("Location: javascript://history.go(-1)");
                exit;
        }

            switch($operation){
                case 'add':
                    $result = $index1 + $index2;
                    $operation = "Cộng";
                    break;
                case 'subtract':
                    $result = $index1 - $index2;
                    $operation = "Trừ";
                    break;
                case 'multiply':
                    $result = $index1 * $index2;
                    $operation = "Nhân";
                    break;
                case 'divide':
                    if($index2!=0){
                        $result = $index1/$index2;
                        $operation = "Chia";
                    }
                    else {
                        $msg = "Không thể chia cho 0";
                        $operation = "Chia";
                    }
                    break;
                default:
                    $msg = "Vui lòng chọn phép toán";
                    break;
            }
        }
    ?>
    <form action="" method="post">
        <table align="center">
            <tr style="color: blue;">
                <th colspan="2">PHÉP TÍNH TRÊN HAI SỐ</th>
            </tr>
            <tr style="color: red;">
                <td style="float: right;">Chọn phép tính:</td>
                <td>
                    <?php
                        if(isset($operation))   echo $operation;
                    ?>
                </td>
            </tr>
            <tr>
                <td style="color: blue; float: right">Số thứ nhất:</td>
                <td>
                    <input type="number" name="index1" readonly value="<?php
                        if(isset($index1))  echo $index1;
                    ?>">
                </td>
            </tr>
            <tr>
                <td style="color: blue; float: right">Số thứ hai:</td>
                <td>
                    <input type="number" name="index2" readonly value="<?php
                        if(isset($index2))  echo $index2;
                    ?>">
                </td>
            </tr>
            <tr>
                <td style="color: blue; float: right">Kết quả:</td>
                <td>
                    <input type="number" name="result" readonly value="<?php
                        if(isset($result))  echo $result;
                    ?>">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <a href="javascript:window.history.back(-1);">Tro ve trang truoc</a>
                </td>
            </tr>
            <tr>
                <td style="text-align: center; color:red" colspan="2">
                    <?php
                        if(isset($msg)) echo $msg;
                    ?>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>