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
        
    </style>
</head>
<body>
    <form>
    <div class="container" align ="center">
    <h2>THÔNG TIN HÃNG SỮA</h2>
    <table align="center" style="background: #99FFFF;">
        <tr>
            <th>Mã HS</th>
            <th>Tên hãng sữa</th>
            <th>Địa chỉ</th>
            <th>SĐT</th>
            <th>Email</th>
        </tr>
        </div>
        <?php
        //Ket noi CSDL
        include 'config.php';
        $sql = "SELECT * FROM hang_sua";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) <> 0) {
            while ($rows = mysqli_fetch_row($result)) {
                echo "<tr>";
                echo "<td>$rows[0]</td>";
                echo "<td>$rows[1]</td>";
                echo "<td>$rows[2]</td>";
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