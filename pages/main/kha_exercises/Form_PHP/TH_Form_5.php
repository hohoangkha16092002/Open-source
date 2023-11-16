<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="witth=device-witth, initial-scale=1.0">
  <title>Karaoke</title>
</head>

<body>
  <?php
  $bd = $kt = $totalCost = $tien10_17 = $tien17_24 ='';
  $gia10_17 = 20000; $gia17_24 = 45000;
  if (isset($_POST["submit"])) {
    $bd = isset($_POST['begin']) ? $_POST['begin'] : '';
    $kt = isset($_POST['end']) ? $_POST['end'] : '';
    if ($kt > $bd && $bd >= 10 && $kt <= 24) {
      if($bd < 17 && $kt > 17) {
        $tien10_17 = (17 - $bd) * $gia10_17;
        $tien17_24 = ($kt - 17) * $gia17_24;
        $totalCost = $tien10_17 + $tien17_24;
      }
      else {
        if ($kt <= 17) {
          $totalCost = ($kt -$bd)  * $gia10_17;
        }
        elseif ($bd >=17) {
          $totalCost = ($kt -$bd)  * $gia17_24;
        }
      }
    } else {
      $msg = 'Vui lòng kiểm tra giờ bắt đầu và giờ kết thúc. Chúng tôi chỉ phục vụ từ 10h đến 24h.';
    }
  }
  ?>
  <form method="post" action="TH_Form_5.php">
    <table style="background-color: #03b0b5; margin: 8% auto 0;">
      <tr style="background-color:#008b8e; font-size: larger; color: white">
        <th colspan="2">
          TÍNH TIỀN KARAOKE
        </th>
      </tr>
      <tr>
        <td>Giờ bắt đầu:</td>
        <td>
          <input type="number" name="begin" size="20" step="any" value="<?php echo $bd; ?>"> (h)
        </td>
      </tr>
      <tr>
        <td>Giờ kết thúc:</td>
        <td>
          <input type="number" name="end" size="20" step="any" value="<?php echo $kt; ?>"> (h)
        </td>
      </tr>
      <tr>
        <td>Tiền thanh toán:</td>
        <td>
          <input type="number" name="bill" size="20" style="background-color:#fafda4;" readonly value="<?php if (isset($totalCost)) echo $totalCost; ?>"> (VNĐ)
        </td>
      </tr>
      <tr>
        <td colspan="2" style="text-align: center;">
          <input type="submit" name="submit" value="Tính tiền">
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