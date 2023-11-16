<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thay thế</title>
</head>

<body>
    <?php
    if (isset($_POST['replace'])) {
        $input = $_POST['input'];
        $giaTriCanThayThe = $_POST['indexReplaced'];
        $giaTriThayThe = $_POST['indexReplace'];

        function PrintArray($array)
        {
            $string = implode("  ", $array);
            return $string;
        }

        function Replace($giaTriThayThe, $giaTriCanThayThe, $array)
        {
            $msg = "Không tìm thấy giá trị cần thay thế trong mảng";
            foreach ($array as &$value) {
                if ($value == $giaTriCanThayThe) {
                    $value = $giaTriThayThe;
                }
            }
            return $array;
        }
        $input_nospace = str_replace(' ', '', $input);
        $array = explode(",", $input_nospace);
        $oldArray = PrintArray($array);
        $newArray = PrintArray(Replace($giaTriThayThe, $giaTriCanThayThe, $array));
    }
    ?>
    <form action="" method="post" name="replace">
        <table align="center" style="background-color: #FFF0F5; border: 1px solid; margin: 8% auto 0;">
            <tr>
                <th colspan="2" style="text-align: center; background-color: #a10b6d; color: white">THAY THẾ</th>
            </tr>
            <tr style="background-color: #fed6f1;">
                <td>Nhập các phần tử:</td>
                <td>
                    <input required type="text" name="input" , size="40" value="<?php if (isset($input)) echo $input; ?>">
                </td>
            </tr>
            <tr style="background-color: #fed6f1;">
                <td>Giá trị cần thay thế:</td>
                <td>
                    <input required type="number" name="indexReplaced" value="<?php if (isset($giaTriCanThayThe)) echo $giaTriCanThayThe; ?>">
                </td>
            </tr>
            <tr style="background-color: #fed6f1;">
                <td>Giá trị thay thế:</td>
                <td>
                    <input required type="number" name="indexReplace" value="<?php if (isset($giaTriThayThe)) echo $giaTriThayThe; ?>">
                </td>
            </tr>
            <tr style="background-color: #fed6f1;">
                <td></td>
                <td>
                    <input style="background-color: #feff9a;" type="submit" name="replace" value="Thay thế">
                </td>
            </tr>
            <tr>
                <td>Mảng cũ:</td>
                <td>
                    <input readonly style="background-color: #fba6a1;" type="text" name="oldArray" size="40" value="<?php if (isset($oldArray)) echo $oldArray; ?>">
                </td>
            </tr>
            <tr>
                <td>Mảng mới:</td>
                <td>
                    <input readonly style="background-color: #fba6a1;" type="text" name="newArray" size="40" value="<?php if (isset($newArray)) echo $newArray; ?>">
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">(<strong style="color: red">Ghi chú:</strong> Các phần tử trong mảng sẽ cách nhau bằng dấu ",")</td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center; color:red">
                    <?php
                    if (isset($msg)) echo $msg;
                    ?>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>