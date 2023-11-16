<body>
  <?php
  $bd = $kt = $totalCost = $tien10_17 = $tien17_24 = '';
  $gia10_17 = 20000;
  $gia17_24 = 45000;

  if (isset($_POST["submit"])) {
    $bd_input = isset($_POST['begin']) ? $_POST['begin'] : '';
    $kt_input = isset($_POST['end']) ? $_POST['end'] : '';

    // Chuyển đổi kiểu dữ liệu của $bd và $kt thành thời gian (time)
    $bd = strtotime($bd_input);
    $kt = strtotime($kt_input);

    $bd_minute = date("i", $bd); // Lấy phút của giờ bắt đầu
    $kt_minute = date("i", $kt); // Lấy phút của giờ kết thúc

    if ($bd_minute < 30) {
      if ($bd_minute < 15) {
        $bd = strtotime(date('H', $bd) . ':00:00');
      } else {
        $bd = strtotime(date('H', $bd) . ':30:00');
      }
    } else {
      if ($bd_minute < 45) {
        $bd = strtotime(date('H', $bd) . ':30:00');
      } else {
        $bd = strtotime(date('H', $bd) + 1 . ':00:00');
      }
    }

    if ($kt_minute < 30) {
      if ($kt_minute < 15) {
        $kt = strtotime(date('H', $kt) . ':00:00');
      } else {
        $kt = strtotime(date('H', $kt) . ':30:00');
      }
    } else {
      if ($kt_minute < 45) {
        $kt = strtotime(date('H', $kt) . ':30:00');
      } else {
        $kt = strtotime(date('H', $kt) + 1 . ':00:00');
      }
    }

    if ($kt > $bd && $bd >= strtotime('10:00:00') && $kt <= strtotime('24:00:00')) {
      if ($bd < strtotime('17:00:00') && $kt > strtotime('17:00:00')) {
        $tien10_17 = (strtotime('17:00:00') - $bd) / 3600 * $gia10_17; // Chuyển đổi lại thành giờ
        $tien17_24 = ($kt - strtotime('17:00:00')) / 3600 * $gia17_24; // Chuyển đổi lại thành giờ
        $totalCost = round($tien10_17 + $tien17_24);
      } else {
        if ($kt <= strtotime('17:00:00')) {
          $totalCost = round(($kt - $bd) / 3600 * $gia10_17); // Chuyển đổi lại thành giờ
        } elseif ($bd >= strtotime('17:00:00')) {
          $totalCost = round(($kt - $bd) / 3600 * $gia17_24); // Chuyển đổi lại thành giờ
        }
      }
    } elseif (($kt_minute - $bd_minute) < 15) {
      $totalCost = 10000;
    } else {
      $msg = 'Vui lòng kiểm tra giờ bắt đầu và giờ kết thúc. Chúng tôi chỉ phục vụ từ 10h đến 24h.';
    }
  }
  ?>
  <form method="post" action="TH_Form_5_Time.php">
    <table style="background-color: #03b0b5; margin: 8% auto 0;">
      <tr style="background-color:#008b8e; font-size: larger; color: white">
        <th colspan="2">
          TÍNH TIỀN KARAOKE
        </th>
      </tr>
      <tr>
        <td>Giờ bắt đầu:</td>
        <td>
          <input type="time" name="begin" value="<?php echo $bd_input; ?>">
        </td>
      </tr>
      <tr>
        <td>Giờ kết thúc:</td>
        <td>
          <input type="time" name="end" value="<?php echo $kt_input; ?>">
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