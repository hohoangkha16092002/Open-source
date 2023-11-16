<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_POST['submit'])) {
        $hd = $_POST['hd'];
        $so_thu_nhat = $_POST['so_thu_nhat'];
        $so_thu_hai = $_POST['so_thu_hai'];

        if ($so_thu_hai == 0 && $hd == 'chia') {
            header("Location: javascript://history.go(-1)");
            exit;
        }

        switch ($hd) {
            case 'cong':
                $ketqua = $so_thu_nhat + $so_thu_hai;
                $hd = "Cộng";
                break;
            case 'tru':
                $ketqua = $so_thu_nhat - $so_thu_hai;
                $hd = "Trừ";
                break;
            case 'nhan':
                $ketqua = $so_thu_nhat * $so_thu_hai;
                $hd = "Nhân";
                break;
            case 'chia':
                if ($so_thu_hai != 0) {
                    $ketqua = $so_thu_nhat / $so_thu_hai;
                    $hd = "Chia";
                } else {
                    $msg = "Không thể chia cho 0";
                    $hd = "Chia";
                }
                break;
            default:
                $msg = "Vui lòng chọn phép toán";
                break;
        }
    }
    ?>
    <form action="" method="post">
        <table>
            <tr style="color: blue;">
                <th colspan="2">PHÉP TÍNH TRÊN HAI SỐ</th>
            </tr>
            <tr style="color: red;">
                <td style="float: right;">Chọn phép tính:</td>
                <td>
                    <?php
                    if (isset($hd))
                        echo $hd;
                    ?>
                </td>
            </tr>
            <tr>
                <td style="color: blue; float: right">Số thứ nhất:</td>
                <td>
                    <input type="number" name="so_thu_nhat" readonly value="<?php
                    if (isset($so_thu_nhat))
                        echo $so_thu_nhat;
                    ?>">
                </td>
            </tr>
            <tr>
                <td style="color: blue; float: right">Số thứ hai:</td>
                <td>
                    <input type="number" name="so_thu_hai" readonly value="<?php
                    if (isset($so_thu_hai))
                        echo $so_thu_hai;
                    ?>">
                </td>
            </tr>
            <tr>
                <td style="color: blue; float: right">Kết quả:</td>
                <td>
                    <input type="number" name="ketqua" readonly value="<?php
                    if (isset($ketqua))
                        echo $ketqua;
                    ?>">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <a href="javascript:window.history.back(-1);">Quay lại trang trước</a>
                </td>
            </tr>
            <tr>
                <td style="text-align: center; color:red" colspan="2">
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