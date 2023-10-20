<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gửi Email</title>
  <link rel="stylesheet" href="style_send-mail.css">
  <link rel="stylesheet" href="../header-footer-navigator/css/header.css">
  <link rel="stylesheet" href="../header-footer-navigator/css/navigator.css">
  <link rel="stylesheet" href="../header-footer-navigator/css/footer.css">
</head>
<?php include '../header-footer-navigator/header.php'; ?>
<?php include '../header-footer-navigator/navigator.php'; ?>

<body>

  <img src="cskh.png" alt="Chăm sóc khách hàng">
  <form method="post" action="form-send-mail.php" enctype="multipart/form-data">
    <label for="from_email">Email người gửi:</label>
    <input type="email" id="from_email" name="from_email" required><br><br>

    <label for="subject">Chủ đề:</label>
    <input type="text" id="subject" name="subject" required><br><br>

    <label for="message">Nội dung:</label><br>
    <textarea id="message" name="message" rows="5" required></textarea><br><br>

    <label for="attachment">Đính kèm tệp (nếu cần):</label>
    <input type="file" id="attachment" name="attachment"><br><br>

    <input type="submit" value="Gửi Email">
  </form>

</body>
<?php include '../header-footer-navigator/footer.php'; ?>
</html>