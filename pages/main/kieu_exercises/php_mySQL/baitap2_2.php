<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        tr:nth-child(odd) {
            background-color: white;
        }
        table, th, td {
            border: 1px solid black;
        }
        h2{
            color:black;
            font-family: Arial, Helvetica, sans-serif;

        }
        th{
            color:red;
        }
    </style>
</head>
<body>
    <form>
    <div class="container" align ="center">
    <h2>THÔNG TIN KHÁCH HÀNG</h2>
    <table style="background: #99FFFF;" align="center">
        <tr>
            <th>Mã khách hàng</th>
            <th>Tên khách hàng</th>
            <th>Phái</th>
            <th>Địa chỉ</th>
            <th>SĐT</th>
        </tr>
        </div>
        <?php
        //Ket noi CSDL
        include 'config.php';
        $sql = "SELECT * FROM khach_hang";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) <> 0) {
            while ($rows = mysqli_fetch_row($result)) {
                echo "<tr>";
                echo "<td>$rows[0]</td>";
                echo "<td>$rows[1]</td>";
                echo "<td style = 'text-align: center;'>$rows[2]</td>";
                echo "<td>$rows[3]</td>";
                echo "<td>$rows[4]</td>";
                echo "</tr>";
            }
        }
    
        echo "</table>"
            ?>
    </table>
    </form>
</body>
</html>