<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tìm kiếm</title>
</head>

<body>
  <?php
  if (isset($_POST['submit'])) {
    function Search($soCanTim, $mang)
    {
      $ketQua = "Không tìm thấy $soCanTim trong mảng";
      for ($i = 0; $i < count($mang); $i++) {
        $pos = $i + 1;
        if ($soCanTim === $mang[$i]) {
          $ketQua = "Tìm thấy $soCanTim tại vị trí thứ $pos của mảng";
          break;
        }
      }
      return $ketQua;
    }

    if (isset($_POST['mangNhapVao']) && isset($_POST['soCanTim'])) {
      $mangNhapVao = $_POST['mangNhapVao'];
      $soCanTim = $_POST['soCanTim'];
      if (!empty($mangNhapVao) && !empty($soCanTim)) {
        $mangNhapVao = trim($mangNhapVao);
        $mangNhapVao = str_replace(' ', '', $mangNhapVao);
        $mang = explode(",", $mangNhapVao);
        $chuoi = implode(", ", $mang);
        $ketQua = Search($soCanTim, $mang);
      } elseif (empty($mangNhapVao)) {
        $msg = "Hãy nhập mảng.";
      } elseif (empty($soCanTim)) {
        $msg = "Hãy nhập số cần tìm.";
      }
    } else {
      $msg = "*Có lỗi xảy ra với dữ liệu đầu vào.";
    }
  }
  ?>
  <form action="" name="search" method="post">
    <table style="background: #d1ded4; margin: 8% auto 0; border: 1px solid;">
      <tr style="background: #2b9e96">
        <th colspan="2" style="color: aliceblue;">
          TÌM KIẾM
        </th>
      </tr>
      <tr>
        <td>Nhập mảng:</td>
        <td>
          <input type="text" name="mangNhapVao" size="28" value="<?php if (isset($mangNhapVao)) echo $mangNhapVao; ?>">
        </td>
      </tr>
      <tr>
        <td>Nhập số cần tìm:</td>
        <td>
          <input type="text" name="soCanTim" size="6" value="<?php if (isset($soCanTim)) echo $soCanTim; ?>">
        </td>
      </tr>
      <tr>
        <td></td>
        <td>
          <input style="background-color: #93ccfa" type="submit" name="submit" value="Tìm kiếm">
        </td>
      </tr>
      <tr>
        <td>Mảng:</td>
        <td>
          <input readonly type="text" name="mang" size="28" value="<?php if (isset($chuoi)) echo $chuoi; ?>">
        </td>
      </tr>
      <tr>
        <td>Kết quả tìm kiếm:</td>
        <td>
          <input style="color: red; font-weight:bold" readonly type="text" name="ketQua" size="28" value="<?php if (isset($ketQua)) echo $ketQua; ?>">
        </td>
      </tr>
      <tr style="background-color: #79CDCD">
        <td colspan="2" style="text-align: center">(Các phần tử trong mảng sẽ cách nhau bằng dấu ",")</td>
      </tr>
      <tr>
        <td colspan="2" style="text-align: center; color:red">
          <?php
          if (isset($msg)) echo $msg;
          ?>
        </td>
      </tr>
    </table>
  </form>
</body>

</html>