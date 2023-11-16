<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 2.8</title>
</head>

<body>
    <?php
    include("config.php");
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
    }
    $rowsPerPage = 2; //số mẩu tin trên mỗi trang, giả sử là 2
    if (!isset($_GET['page'])) {
        $_GET['page'] = 1;
    }
    //vị trí của mẩu tin đầu tiên trên mỗi trang
    $offset = ($_GET['page'] - 1) * $rowsPerPage;
    $sql = "SELECT Ten_sua, hang_sua.Ten_hang_sua, Hinh, TP_Dinh_Duong, Loi_ich, Trong_luong, Don_gia 
    FROM sua 
    JOIN hang_sua ON sua.Ma_hang_sua = hang_sua.Ma_hang_sua 
    LIMIT  $offset, $rowsPerPage";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_row($result)) {
            echo "<div>
            <table border = 1 align='center' style = 'width: 600px'>";
            //$row = mysqli_fetch_array($result);
            $formattedPrice = number_format($row[6], 0, '.', '.');
            echo "<tr bgcolor='lightyellow'>
                <th style = 'color: orange' colspan='2'><h2>$row[0] - $row[1]</h2></th>
            </tr>
            <tr>
                <td style = 'width: 200px'><img src='./img/Hinh_sua/$row[2] ' width= 200px height= 270/></td>
                <td>
                    <div>
                        <p><i><b>Thành phần dinh dưỡng:</b></i> <br>
                        $row[3]</p>
                        <p><i><b>Lợi ích:</b></i> <br>
                        $row[4]</p>
                        <p style = 'color: red'><i><b style = 'color: black'>Trọng lượng: </b></i>$row[5] gr  -  <i><b style = 'color: black'>Đơn giá: </b></i>$formattedPrice VNĐ</p>
                    </div>
                </td>
            </tr>
            </table>
        </div>";
        }
    }
    echo "</table>";
    echo "<p align='center'>";
    $sql_products = "SELECT * FROM sua";
    $result_products = mysqli_query($conn, $sql_products);
    $numRows = mysqli_num_rows($result_products);
    $maxPage = floor($numRows / $rowsPerPage) + 1;
    //gắn thêm nút Back
    if ($_GET['page'] > 1) {
        echo "<a href=" . $_SERVER['PHP_SELF'] . "?page=" . (1) . ">&#60&#60</a> ";
        echo "<a href=" . $_SERVER['PHP_SELF'] . "?page=" . ($_GET['page'] - 1) . ">&#60</a> ";
    }
    for ($i = 1; $i <= $maxPage; $i++) //tạo link tương ứng tới các trang
    {
        if ($i == $_GET['page'])
            echo "<b style='padding:0 10px;'>" . $i . "</b> "; //trang hiện tại sẽ được bôi đậm
        else
            echo "<a href="
                . $_SERVER['PHP_SELF'] . "?page=" . $i . ">" . $i . "</a> ";
    }
    //gắn thêm nút Next
    if ($_GET['page'] < $maxPage) {
        echo "<a href = " . $_SERVER['PHP_SELF'] . "?page=" . ($_GET['page'] + 1) . ">&#62</a>";
        echo "<a href = " . $_SERVER['PHP_SELF'] . "?page=" . ($maxPage) . ">&#62&#62</a>";
    }
    echo "</p>";
    ?>

</body>

</html>