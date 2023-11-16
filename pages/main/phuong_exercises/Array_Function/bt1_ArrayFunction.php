<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhập số tự nhiên</title>
</head>
<body>

<?php
if (isset($_POST['submit'])) {
    $number = $_POST['number'];
    $msg = "";

    if (is_numeric($number) && intval($number) == $number && $number > 0) {
        // Tạo mảng phát sinh ngẫu nhiên
        $array = [];
        for ($i = 0; $i < $number; $i++) {
            $array[] = rand(1,100);
        }

        // Hiển thị mảng phát sinh ngẫu nhiên
        $msg .= "$number là số nguyên dương<br>";
        $msg .= "<h3>Mảng phát sinh ngẫu nhiên:</h3>".  "<pre>". print_r($array,true) . "</pre>";
        

        // Đếm số phần tử chẵn
        $evenCount = 0;
        foreach ($array as $element) {
            if ($element % 2 == 0) {
                $evenCount++;
            }
        }
        $msg .= "<p>Số phần tử chẵn: $evenCount</p>";

        // Đếm số phần tử nhỏ hơn 100
        $lessThan100Count = 0;
        foreach ($array as $element) {
            if ($element < 100) {
                $lessThan100Count++;
            }
        }
        $msg .= "<p>Số phần tử nhỏ hơn 100: $lessThan100Count</p>";

        // Tính tổng các phần tử âm
        $negativeSum = 0;
        foreach ($array as $element) {
            if ($element < 0) {
                $negativeSum += $element;
            }
        }
        $msg .= "<p>Tổng các phần tử âm: $negativeSum</p>";

        // In ra vị trí các phần tử bằng 0
        $zeroIndices = [];
        foreach ($array as $index => $element) {
            if ($element == 0) {
                $zeroIndices[] = $index;
            }
        }
        $msg .= "<p>Vị trí các phần tử bằng 0:  ";
        if (empty($zeroIndices)) {
            $msg .= "Không có";
        } else {
            $msg .= implode(", ", $zeroIndices);
        }
        $msg .= "</p>";

        // Sắp xếp mảng theo thứ tự tăng dần
        sort($array);

        // In mảng sau khi sắp xếp
        $msg .= "<h3>Mảng sau khi sắp xếp:</h3>". "<pre>". print_r($array,true). "</pre>" ;
    } else {
        $msg .= "<p>Vui lòng nhập một số nguyên dương.</p>";
    }
}
?>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"];
?>">
        <table style="background: lightblue">
            <tr style="background: #D980FA">
                <th colspan="2">
                    FORM KIỂM TRA VÀ TÍNH TOÁN VỚI N
                </th>
            </tr>
            <tr>
                <td>
                    Nhập n: 
                </td>
                <td>
                    <input type="number" name="number" size="20" value="<?php
                    if(isset($number)) echo $number;

                    ?>">
                </td>
            </tr>

            <tr>
                <td colspan="2" style="text-align: center">
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