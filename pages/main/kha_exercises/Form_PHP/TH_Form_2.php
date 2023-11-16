<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DIỆN TÍCH và CHU VI HÌNH TRÒN</title>
</head>

<body>
  <?php
  define("PI", 3.14);
  $bk = $dt = $cv = '';
  $msg = '';

  if (isset($_POST["submit"])) {
    $bk = isset($_POST['bankinh']) ? $_POST['bankinh'] : '';
    if (is_numeric($bk)) {
      if ($bk > 0) {
        $dt = PI * Pow($bk, 2);
        $cv = 2 * PI * $bk;
      } else {
        $msg = 'Bán kính phải lớn hơn 0.';
      }
    } else {
      $msg = 'Hãy nhập số hợp lệ cho bán kính.';
    }
  }
  ?>
  <form method="post" action="">
    <table style="background-color: #fffada; margin: 8% auto 0;">
      <tr style="background-color:#ffda77; color: #a97025; font-size: larger;">
        <th colspan="2">
          DIỆN TÍCH và CHU VI HÌNH TRÒN
        </th>
      </tr>
      <tr>
        <td>Bán kính:</td>
        <td>
          <input type="number" name="bankinh" size="20" step="any" value="<?php echo $bk; ?>">
        </td>
      </tr>
      <tr>
        <td>Diện tích:</td>
        <td>
          <input type="number" name="dientich" size="20" readonly style="background-color:#fed7db;" value="<?php echo is_numeric($dt) ? $dt : ''; ?>">
        </td>
      </tr>
      <tr>
        <td>Chu vi:</td>
        <td>
          <input type="number" name="chuvi" size="20" readonly style="background-color:#fed7db;" value="<?php echo is_numeric($cv) ? $cv : ''; ?>">
        </td>
      </tr>
      <tr>
        <td colspan="2" style="text-align: center;">
          <input type="submit" name="submit" value="Tính">
        </td>
      </tr>
      <tr>
        <td colspan="2" style="text-align: center;">
          <?php if (isset($msg)) echo "<span style='color:red;'>$msg</span>" ?>
        </td>
      </tr>
    </table>
  </form>
</body>

</html>