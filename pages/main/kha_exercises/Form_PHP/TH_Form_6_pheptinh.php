<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculator</title>
</head>

<body>
  <form method="post" action="TH_Form_6_ketquapheptinh.php">
    <table style="margin: 8% auto 0;">
      <tr style="font-size: larger; color: #527da8">
        <th colspan="2">
          PHÉP TÍNH TRÊN 2 SỐ
        </th>
      </tr>
      <tr>
        <td style="color: brown;"><b>Chọn phép tính :</b></td>
        <td style="color: brown;">
          <input type="radio" id="add" name="operation" value="add" required>Cộng
          <input type="radio" id="subtract" name="operation" value="subtract">Trừ
          <input type="radio" id="multiply" name="operation" value="multiply">Nhân
          <input type="radio" id="divide" name="operation" value="divide">Chia
        </td>
      </tr>
      <tr>
        <td style="color: blue; text-align:end"><b>Số thứ nhất :</b></td>
        <td>
          <input type="number" id="num1" name="num1" required>
        </td>
      </tr>
      <tr>
        <td style="color: blue;  text-align:end"><b>Số thứ hai :</b></td>
        <td>
          <input type="number" id="num2" name="num2" required>
        </td>
      </tr>
      <tr>
        <td>
        </td>
        <td>
          <button type="submit">Calculate</button>
        </td>
      </tr>
      <tr>
        <td colspan="2" style="text-align: center;">
          <?php if (isset($msg)) echo "$msg" ?>
        </td>
      </tr>
    </table>

  </form>
</body>

</html>