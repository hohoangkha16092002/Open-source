<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Thông tin sữa</title>
    <style>
        /* odd lẻ
    even chẵn */
        tr:nth-child(odd) {
            background-color: lightgreen;
        }

        a {
            text-decoration: none;
            color: darkseagreen;
            padding: 0 10px;
        }

        a:hover {
            color: darkgreen;
        }
    </style>
</head>

<body>
    <?php
    $com = mysqli_connect('localhost', 'root', '', 'quanly_ban_sua');
    mysqli_set_charset($com, 'UTF8');
    $rowsPerPage = 2;
    if (!isset($_GET['page'])) {
        $_GET['page'] = 1;
    }
    $offset = ($_GET['page'] - 1) * $rowsPerPage;
    $result = mysqli_query($com, 'SELECT ten_sua,Ten_hang_sua,Ten_loai, Trong_luong,
Don_gia FROM sua 
join loai_sua on sua.Ma_loai_sua = loai_sua.Ma_loai_sua 
join hang_sua on sua.Ma_hang_sua = hang_sua.Ma_hang_sua  LIMIT ' . $offset . ', ' . $rowsPerPage);
    echo "<p align='center'><font face= 'Verdana, Geneva, sans-serif'
size='5' color='green'> THÔNG TIN SỮA</font></P>";
    echo "<table align='center' width='800px' border='1' cellpadding='2' cellspacing='2' style='border-collapse:collapse'>";
    echo '<tr>
        <th width="5%">STT</th>
        <th width="30%">Tên sữa</th>
        <th width="15%">Hãng sữa</th>
        <th width="10%">Loại sữa</th>
        <th width="15%">Trọng lượng</th>
        <th width="20%">Đơn giá</th>
        </tr>';
    if (mysqli_num_rows($result) <> 0) {
        $stt = 1;
        while ($rows = mysqli_fetch_row($result)) {
            echo "<tr>";
            echo "<td>$stt</td>";
            echo "<td>$rows[0]</td>";
            echo "<td>$rows[1]</td>";
            echo "<td>$rows[2]</td>";
            echo "<td>$rows[3]</td>";
            echo "<td>$rows[4]</td>";
            echo "</tr>";
            $stt += 1;
        } 
    }
    echo "</table>";
    echo "<p align='center'>";
    $re = mysqli_query($com, 'select * from sua');
    $numRows = mysqli_num_rows($re);
    //tổng số trang
    $maxPage = floor($numRows / $rowsPerPage) + 1;
    //gắn thêm nút Back
    if ($_GET['page'] > 1) {
        echo "<a href=" . $_SERVER['PHP_SELF'] . "?page=" . (1) . ">&#60&#60</a> ";
        echo "<a href=" . $_SERVER['PHP_SELF'] . "?page=" . ($_GET['page'] - 1) . ">&#60</a> ";
    }
    for ($i = 1; $i <= $maxPage; $i++)
    {
        if ($i == $_GET['page'])
            echo "<b style='padding:0 10px;'>" . $i . "</b> "; 
        else
            echo "<a href="
                . $_SERVER['PHP_SELF'] . "?page=" . $i . ">" . $i . "</a> ";
    }

    if ($_GET['page'] < $maxPage) {
        echo "<a href = " . $_SERVER['PHP_SELF'] . "?page=" . ($_GET['page'] + 1) . ">&#62</a>";
        echo "<a href = " . $_SERVER['PHP_SELF'] . "?page=" . ($maxPage) . ">&#62&#62</a>";
    }
    echo "</p>";
    ?>

</html>