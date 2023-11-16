<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Phát sinh mảng và tính toán</title>
</head>

<body>

  <?php
  if (isset($_POST['submit'])) {
    $n = $_POST['sophantu'];
    if (is_numeric($n) && $n > 0 && intval($n) == $n) {
      function tao_mang($n)
      {
        for ($i = 0; $i < $n; $i++) {
          $m[] = rand(0, 20);
        }
        return $m;
      }
      function xuat_mang($mang)
      {
        return implode(' ', $mang);
      }
      function tim_max($mang)
      {
        $max = $mang[0];
        foreach ($mang as $phan_tu) {
          if ($phan_tu > $max) {
            $max = $phan_tu;
          }
        }
        return $max;
      }
      function tim_min($mang)
      {
        $min = $mang[0];
        foreach ($mang as $phan_tu) {
          if ($phan_tu < $min) {
            $min = $phan_tu;
          }
        }
        return $min;
      }
      function tinh_tong($mang)
      {
        $tong = 0;
        foreach ($mang as $phan_tu) {
          $tong += $phan_tu;
        }
        return $tong;
      }
      $mang = tao_mang($n);
      $mang_kq = xuat_mang($mang);
      $tong = tinh_tong($mang);
      $max = tim_max($mang);
      $min = tim_min($mang);
    } else {
      $msg = "Vui lòng nhập số tự nhiên nguyên dương.";
    }
  }
  ?>
  <form method="post" name="tiendien">
    <table style="background: #fffbff; margin: 8% auto 0; border: solid 1px">
      <tr style="background: #ed4981; font-size: larger; color: white">
        <th colspan="2">
          PHÁT SINH MẢNG VÀ TÍNH TOÁN
        </th>
      </tr>

      <tr style="background: #fed8f3;">
        <td>Nhập số phần tử:</td>
        <td>
          <input type="text" name="sophantu" size="20" value="<?php if (isset($n)) echo $n; ?>">
        </td>
      </tr>

      <tr style="background: #fed8f3;">
        <td>
        </td>
        <td>
          <input style="background: #fffeab" type="submit" name="submit" value="Phát sinh và tính toán">
        </td>
      </tr>

      <tr>
        <td>Mảng:</td>
        <td>
          <input type="text" name="mangketqua" readonly style="background: #fda8a6" size="20" value="<?php if (isset($mang_kq)) echo $mang_kq; ?>">
        </td>
      </tr>

      <tr>
        <td>GTLL (MAX) trong mảng:</td>
        <td>
          <input type="text" name="lonnhat" readonly style="background: #fda8a6" size="20" value="<?php if (isset($max)) echo $max; ?>">
        </td>
      </tr>

      <tr>
        <td>GTNN (MIN) trong mảng:</td>
        <td>
          <input type="text" name="nhonhat" readonly style="background: #fda8a6" size="20" value="<?php if (isset($min)) echo $min; ?>">
        </td>
      </tr>

      <tr>
        <td>Tổng mảng:</td>
        <td>
          <input type="text" name="tongmang" size="20" readonly style="background: #fda8a6" value="<?php if (isset($tong)) echo $tong; ?>">
        </td>
      </tr>
      <tr>
        <td colspan="2" >
          (<b style="color: red">Ghi chú:</b> Các phần tử trong mảng sẽ có giá trị từ 0 đến 20)
        </td>
      </tr>
      <tr>
        <th colspan="2" style="color: red">
          <?php
          if (isset($msg)) echo $msg;
          ?>
      </tr>

    </table>
  </form>
</body>

</html>