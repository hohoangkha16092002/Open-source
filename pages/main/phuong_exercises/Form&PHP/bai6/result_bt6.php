<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang kết quả</title>
</head>
<body>
<?php
if(isset($_POST['submit'])){
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $operator = $_POST['operator'];
    $ketqua = 0;
    $msg = "";


    if ($operator == 'add') {
        $ketqua = $number1 + $number2;
    } else {
        if ($operator == 'subtract') {
            $ketqua = $number1 - $number2;
        } else {
            if ($operator == 'multiply') {
                $ketqua = $number1 * $number2;
            } else {
                if ($operator == 'divide') {
                    if ($number2 != 0) {
                        $ketqua = $number1 / $number2;
                    } else {
                        $msg = "Không thể chia cho 0.";
                        $ketqua = "NOT VALUE";
                    }
                } else {
                    $msg = "Phép tính không hợp lệ.";
                   
                }
            }
        }
    }
}
?>

<form action="result_bt6.php" method="post">
        <table style="background: #dff9fb;">
            <tr style="background: #F5DEB3">
                <th colspan="2">
                    PHÉP TÍNH TRÊN HAI SỐ
                </th>
            </tr>

            <tr>
                <td style="color:red"><b>Chọn phép tính</b></td>
                <td style="color:red">
                <?php if(isset($operator)) echo $operator;
                ?>
                </td>
            </tr>

            <tr>
                <td style="color:blue"><b>Số thứ nhất</b></td>
                <td>
                    <input type="number" name="number1" size="20" value="<?php
                    if(isset($number1)) echo $number1;

                    ?>" required>
                </td>
            </tr>

            <tr>
                <td style="color:blue"><b>Số thứ hai</b></td>
                <td>
                    <input type="number" name="number2" size="20" value="<?php
                    if(isset($number2)) echo $number2;

                    ?>" required>
                </td>
            </tr>

            <tr>
                <td>Kết quả</td>
                <td>
                    <input type="text" name="ketqua" style="color: red;" size="20" value="<?php
                    if(isset($ketqua)) echo $ketqua;

                    ?>">
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

    <a href = "javascript:window.history.back(-1);">Trở về trang trc</a>
</body>
</html>