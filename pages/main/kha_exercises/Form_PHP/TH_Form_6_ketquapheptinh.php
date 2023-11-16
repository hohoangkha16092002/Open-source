<?php
$operation = $_POST["operation"];
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];

if (!is_numeric($num1) || !is_numeric($num2) || ($operation == "divide" && $num2 == 0)) {
  // Kiểm tra dữ liệu đầu vào và quay lại trang nhập liệu nếu không hợp lệ.
  header("Location: TH_Form_6_pheptinh.php");
  exit;
}

switch ($operation) {
  case "add":
    $result = $num1 + $num2;
    $operationText = "Cộng";
    break;
  case "subtract":
    $result = $num1 - $num2;
    $operationText = "Trừ";
    break;
  case "multiply":
    $result = $num1 * $num2;
    $operationText = "Nhân";
    break;
  case "divide":
    $result = $num1 / $num2;
    $operationText = "Chia";
    break;
  default:
    $result = "Chọn phép tính không hợp lệ";
    $operationText = "Phép tính không hợp lệ";
    break;
}

if (is_float($result)) {
  $result = number_format($result, 2); // Định dạng kết quả với 2 chữ số thập phân.
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Result</title>
</head>

<body>
  <table style="margin: 8% auto 0;">
    <tr style="font-size: larger; color: #527da8">
      <th colspan="2">
        PHÉP TÍNH TRÊN 2 SỐ
      </th>
    </tr>
    <tr style="color: brown;">
      <th>Chọn phép tính :</th>
      <td><b><?php echo $operationText; ?></b></td>
    </tr>
    <tr>
      <th style="color: blue; text-align:end">Số thứ nhất :</th>
      <td><input type="number" id="num1" name="num1" value="<?php echo $num1; ?>"></td>
    </tr>
    <tr>
      <th style="color: blue; text-align:end">Số thứ hai :</th>
      <td><input type="number" id="num2" name="num2" value="<?php echo $num2; ?>"></td>
    </tr>
    <tr>
      <th style="color: blue; text-align:end">Kết quả :</th>
      <td><input type="number" id="result" name="result" readonly value="<?php echo $result; ?>"></td>
    </tr>
    <tr>
      <td colspan="2" style="text-align: center;"><a href="javascript:window.history.back(-1);">Quay lại trang trước</a></td>
    </tr>

  </table>

</body>

</html>