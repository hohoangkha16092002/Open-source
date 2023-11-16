<?php
session_start();
require('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $ma_sua = $_POST['ma_sua'];
  $ten_sua = $_POST['ten_sua'];
  $ma_hang_sua = $_POST['ma_hang_sua'];
  $ma_loai_sua = $_POST['ma_loai_sua'];
  $trong_luong = $_POST['trong_luong'];
  $don_gia = $_POST['don_gia'];
  $tp_dinh_duong = $_POST['tp_dinh_duong'];
  $loi_ich = $_POST['loi_ich'];

  $target_dir = "";
  $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
  move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);

  $conn = mysqli_connect($servername, $username, $password, $dbname);
  mysqli_set_charset($conn, 'utf8');

  $sql = "  INSERT INTO `sua`(`Ma_sua`, `Ten_sua`, `Ma_hang_sua`, `Ma_loai_sua`, `Trong_luong`, `Don_gia`, `TP_Dinh_Duong`, `Loi_ich`, `Hinh`) VALUES ('$ma_sua','$ten_sua','$ma_hang_sua','$ma_loai_sua','$trong_luong','$don_gia','$tp_dinh_duong','$loi_ich','$target_file')";

  if (mysqli_query($conn, $sql)) {
    $_SESSION['msg'] = "Milk added successfully.";
  } else {
    $_SESSION['msg'] = "Error: " . mysqli_error($conn);
  }

  mysqli_close($conn);
  header('Location: add-milk.php?msg=' . $_SESSION['msg']);
}
?>
