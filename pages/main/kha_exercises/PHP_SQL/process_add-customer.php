<?php
session_start();

require('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $ma_khach_hang = $_POST['ma_khach_hang'];
  $ten_khach_hang = $_POST['ten_khach_hang'];
  $phai = $_POST['phai'];
  $dia_chi = $_POST['dia_chi'];
  $email = $_POST['email'];
  $dien_thoai = $_POST['dien_thoai'];

  $conn = mysqli_connect($servername, $username, $password, $dbname);
  mysqli_set_charset($conn, 'utf8');

  if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
  }

  $sql = "INSERT INTO khach_hang (Ma_khach_hang, Ten_khach_hang, Phai, Dia_chi, Email, Dien_thoai) 
            VALUES (?, ?, ?, ?, ?, ?)";

  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ssssss", $ma_khach_hang, $ten_khach_hang, $phai, $dia_chi, $email, $dien_thoai);

  if ($stmt->execute()) {
    $_SESSION['msg'] = "Customer added successfully.";
  } else {
    $_SESSION['msg'] = "Error: " . $stmt->error;
  }

  $stmt->close();
  $conn->close();
  header('Location: add-customer.php?msg=' . $_SESSION['msg']);
}
