<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm kiếm</title>
</head>

<body>
    <?php
    if (isset($_POST['search'])) {
        function Search($inputIndexSearch, $array)
        {
            $result = "Không tìm thấy $inputIndexSearch trong mảng";
            for ($i = 0; $i < count($array); $i++) {
                $pos = $i + 1;
                if ($inputIndexSearch === $array[$i]) {
                    $result = "Tìm thấy $inputIndexSearch tại vị trí thứ $pos của mảng";
                    break;
                }
            }

            return $result;
        }

        if (isset($_POST['inputArray']) && isset($_POST['inputIndexSearch'])) {
            $inputArray = $_POST['inputArray'];
            $inputIndexSearch = $_POST['inputIndexSearch'];

            if (!empty($inputArray) && !empty($inputIndexSearch)) {
                $inputArray = trim($inputArray);
                $inputArray = str_replace(' ', '', $inputArray);
                $array = explode(",", $inputArray);
                $string = implode("  ", $array);
                $result = Search($inputIndexSearch, $array);

            } elseif (empty($inputArray)) {
                $msg = "*Vui lòng nhập mảng.";
            } elseif (empty($inputIndexSearch)) {
                $msg = "*Vui lòng nhập số cần tìm.";
            }
        } else {
            $msg = "*Có lỗi xảy ra với dữ liệu đầu vào.";
        }
    }
    ?>
    <form action="" name="search" method="post">
        <table align="center" style="background-color: #E0EEEE; border: 1px solid;">
            <tr>
                <th colspan="2" style="background-color: #79CDCD; color: white">TÌM KIẾM</th>
            </tr>
            <tr>
                <td>Nhập mảng:</td>
                <td>
                    <input type="text" name="inputArray" size="28" value="<?php
                    if (isset($inputArray))
                        echo $inputArray;
                    ?>" required>
                </td>
            </tr>
            <tr>
                <td>Nhập số cần tìm:</td>
                <td>
                    <input step="any" type="number" name="inputIndexSearch" size="6" value="<?php
                    if (isset($inputIndexSearch))
                        echo $inputIndexSearch;
                    ?>">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="search" style="background-color: blue;" value="Tìm kiếm ">
                </td>
            </tr>
            <tr>
                <td>Mảng:</td>
                <td>
                    <input readonly type="text" name="array" size="28" value="<?php
                    if (isset($string))
                        echo $string;
                    ?>">
                </td>
            </tr>
            <tr>
                <td>Kết quả tìm kiếm:</td>
                <td>
                    <input style="color: red;" readonly type="text" name="result" size="28" value="<?php
                    if (isset($result))
                        echo $result;
                    ?>">
                </td>
            </tr>
            <tr style="background-color: #79CDCD">
                <td colspan="2" style="text-align: center">(Các phần tử trong mảng sẽ cách nhau bằng dấu ",")</td>
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