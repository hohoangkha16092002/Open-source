<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gửi Email</title>
  <link rel="stylesheet" href="style_send-mail.css">
  <style></style>
</head>

<body>
  <img src="img/cskh-banner.png" width="100%" alt="Chăm sóc khách hàng">
  <img src="img/cskh.png" alt="Chăm sóc khách hàng">
  <form method="post" action="pages/send-mail/send-mail.php" enctype="multipart/form-data">
    <label for="from_email">Email người gửi:</label>
    <input type="email" id="from_email" name="from_email" class="mail-input" required><br><br>

    <label for="subject">Chủ đề:</label>
    <input type="text" id="subject" name="subject" class="mail-input" required><br><br>

    <label for="message">Nội dung:</label><br>
    <textarea id="message" name="message" rows="5" class="mail-input" required></textarea><br><br>

    <label for="attachment">Đính kèm tệp (nếu cần):</label>
    <input type="file" id="attachment" name="attachment" class="mail-input"><br><br>

    <div class="center-button">
      <input type="submit" value="Gửi Email">
    </div>
  </form>
  <img src="https://lh3.googleusercontent.com/UsEi_hesb8CfR7G0PQ6gPP4hT7oExxvLe-sADipaiY9qzGdq9K-LF_E0DYm6d6-NlLzWasC670gWcboz9L2EZtKogx2z0mOp=rw-w1233" alt="" decoding="async" class="lazyload" loading="lazy">
  <img src="https://lh3.googleusercontent.com/rOs33f5-oBSFhgbV_N8KHJ2SIGkQRXiRAymp9Q9DJFmq77uEyhf19UghdfUUQRh8kY5xyZI6QW-kw3xebo6bPnh_MjB3ygwh=rw-w1233" alt="" decoding="async" class="lazyload css-63903r" loading="lazy">
  <img src="https://lh3.googleusercontent.com/TPa_Y2rJGMVV_4W1SUIQDn-2q2jLu41yUUn4BZOp6jU_0nLxPm5WgPB1m8KewFU0JSA5baeL_qvaCgE6ZCWiBHElDZhA6JH7=rw-w1233" alt="" decoding="async" class="lazyload css-63903r" loading="lazy">
  <img src="https://lh3.googleusercontent.com/935_Rwng3W3dUQ-rvtqHWEVACdcCQOysJYFbn4pAceIzjw0DnA-DutdEEaPcXZ3hRquq5DafSNopGCKlMmrE5SvzwqAZKFOO=rw-w1233" alt="" decoding="async" class="lazyload css-63903r" loading="lazy">
</body>

</html>