<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title> Login</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <?php
  if (isset($_POST['submit-register'])) {

    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $options = [
      'cost' => 12,
    ];

    if (preg_match("/^[a-zA-Z0-9.-_]+@[a-zA-Z]+\.[a-zA-Z]{2,}$/", $email)) {
      if (preg_match("/^(?=.*[A-Z])(?=.*[a-z]).{8,}$/", $password)) {
        if ($password == $confirm_password) {
          $emailAlready = "SELECT * FROM `khachhang` WHERE email = '$email'";
          $result = mysqli_query($conn, $emailAlready);

          if (mysqli_num_rows($result) > 0) {
            $msg = "Email đã tồn tại";
          } else {
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT, $options);
            $sql = "INSERT INTO `khachhang`(`HoTenKH`,`Email`,  `MatKhau`) 
                        VALUES ('$full_name','$email','$hashedPassword')";
            if (mysqli_query($conn, $sql)) {
              $msg = "Đăng ký thành công!";
            } else {
              $msg = "Lỗi" . mysqli_error($conn);
            }
          }
        } else {
          $msg = "Mật khẩu không khớp";
        }
      } else {
        $msg = "Mật khẩu không hợp lệ";
      }
    } else {
      $msg = "Email không hợp lệ";
    }
  }
  ?>
  <div class="container">
    <div class="container-login-signin">
      <form action="#" method="post">
        <div class="title">Đăng Ký</div>
        <div align=center>
          <?php
          if (isset($msg))
            echo $msg;
          ?>
        </div>
        <div class="input-box underline">
          <input type="text" name="full_name" placeholder="Họ và tên của bạn" required value="<?php
          if (isset($full_name))
            echo $full_name
              ?>">
            <div class="underline"></div>
          </div>
          <div class="input-box underline">
            <input type="text" name="email" placeholder="Nhập email của bạn" required value="<?php
          if (isset($email))
            echo $email
              ?>">
            <div class="underline"></div>
          </div>
          <div class="input-box underline">
            <input type="password" name="password" placeholder="Mật khẩu" required value="<?php
          if (isset($password))
            echo $password
              ?>">
            <div class="underline"></div>
          </div>
          <div class="input-box">
            <input type="password" name="confirm_password" placeholder="Nhập lại mật khẩu" required value="<?php
          if (isset($confirm_password))
            echo $confirm_password
              ?>">
            <div class="underline"></div>
          </div>
          <div class="input-box button">
            <input type="submit" name="submit-register" value="ĐĂNG KÝ">
          </div>

          <div class="option">Bạn dã có tài khoản? Hãy đăng nhập tại <a href="?page=login">đây</a></div>
          <div class="twitter">
            <a href="#"><i class="fab fa-google"></i>Đăng nhập với Google</a>
          </div>
          <div class="facebook">
            <a href="#"><i class="fab fa-facebook-f"></i>Đăng nhập với Facebook</a>
          </div>
        </form>
      </div>
    </div>
  </body>

  </html>