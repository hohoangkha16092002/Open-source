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
        $indexReplaced = $_POST['indexReplaced'];
        $indexReplace = $_POST['indexReplace'];

        function PrintArray($array)
        { //Hàm in mảng
            $string = implode("  ", $array);
            return $string;
        }

        function Replace($indexReplace, $indexReplaced, $array)
        { //Hàm thay thế
            //$msg = "Không tìm thấy giá trị cần thay thế trong mảng";
            foreach ($array as &$value) {
                if ($value == $indexReplaced) {
                    $value = $indexReplace;
                }
            }
            return $array;
        }

        $input = str_replace(' ', '', $input);
        $array = explode(",", $input);
        $oldArray = PrintArray($array);
        $newArray = PrintArray(Replace($indexReplace, $indexReplaced, $array));

        
    }
    ?>
    <form action="" method="post" name="replace">
        <table align="center" style="background-color: #FFF0F5; border: 1px solid;">
            <tr>
                <th colspan="2" style="text-align: center; background-color: #CD5C5C; color: white">THAY THẾ</th>
            </tr>
            <tr style="background-color: #FFC0CB;">
                <td>Nhập các phần tử:</td>
                <td>
                    <input required type="text" name="input" , size="40" value="<?php
                    if (isset($input))
                        echo $input;
                    ?>">
                </td>
            </tr>
            <tr style="background-color: #FFC0CB;">
                <td>Giá trị cần thay thế:</td>
                <td>
                    <input required type="text" name="indexReplaced" step="any" value="<?php
                    if (isset($indexReplaced))
                        echo $indexReplaced;
                    ?>">
                </td>
            </tr>
            <tr style="background-color: #FFC0CB;">
                <td>Giá trị thay thế:</td>
                <td>
                    <input required type="text" step="any" name="indexReplace" value="<?php
                    if (isset($indexReplace))
                        echo $indexReplace;
                    ?>">
                </td>
            </tr>
            <tr style="background-color: #FFC0CB;">
                <td></td>
                <td>
                    <input style="background-color: yellow;" type="submit" name="replace" value="Thay thế">
                </td>
            </tr>
            <tr>
                <td>Mảng cũ:</td>
                <td>
                    <input readonly style="background-color: #FF7F50;" type="text" name="oldArray" size="40" value="<?php
                    if (isset($oldArray))
                        echo $oldArray;
                    ?>">
                </td>
            </tr>
            <tr>
                <td>Mảng mới:</td>
                <td>
                    <input readonly style="background-color: #FF7F50;" type="text" name="newArray" size="40" value="<?php
                    if (isset($newArray))
                        echo $newArray;
                    ?>">
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">(<strong style="color: red">Ghi chú:</strong> Các phần tử
                    trong mảng sẽ cách nhau bằng dấu ",")</td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center; color:red">
                    <?php
                    if (isset($msg))
                        echo $msg;
                    ?>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>