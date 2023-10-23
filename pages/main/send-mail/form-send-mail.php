<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gửi Email</title>
  <link rel="stylesheet" href="style_send-mail.css">
  <style></style>
</head>

<body class="mail-body">
  <img src="https://lh3.googleusercontent.com/ehgxOrd1YTXwrYVlk_cdTJVrEEWca1EJsKsIoO0_YC6FgbCN5W_V2Nms8X7Plizd2M4F_1GNDj12CXlydc-VcRn_499fdJk=rw-w1921" alt="" decoding="async" class="lazyload mail-img" loading="lazy">
  
  <img src="img/cskh.png" alt="Chăm sóc khách hàng" style="margin-top: 2%;" class="mail-img">
  <form method="post" action="pages/main/send-mail/send-mail.php" enctype="multipart/form-data" class="mail-form">
    <label class="mail-label" for="from_email">Email người gửi:</label>
    <input class="mail-input" type="email" id="from_email" name="from_email" class="mail-input" required><br><br>

    <label class="mail-label" for="subject">Chủ đề:</label>
    <input class="mail-input" type="text" id="subject" name="subject" class="mail-input" required><br><br>

    <label class="mail-label" for="message">Nội dung:</label><br>
    <textarea class="mail-textarea" id="message" name="message" rows="5" class="mail-input" required></textarea><br><br>

    <label class="mail-label" for="attachment">Đính kèm tệp (nếu cần):</label>
    <input class="mail-input" type="file" id="attachment" name="attachment" class="mail-input"><br><br>

    <div class="mail-center-button">
      <input class="mail-input-submit" type="submit" value="Gửi Email">
    </div>
  </form>
  <img src="https://lh3.googleusercontent.com/UsEi_hesb8CfR7G0PQ6gPP4hT7oExxvLe-sADipaiY9qzGdq9K-LF_E0DYm6d6-NlLzWasC670gWcboz9L2EZtKogx2z0mOp=rw-w1233" alt="" decoding="async" class="lazyload mail-img" loading="lazy" style="margin: 1% auto;">
  <img src="https://lh3.googleusercontent.com/rOs33f5-oBSFhgbV_N8KHJ2SIGkQRXiRAymp9Q9DJFmq77uEyhf19UghdfUUQRh8kY5xyZI6QW-kw3xebo6bPnh_MjB3ygwh=rw-w1233" alt="" decoding="async" class="lazyload css-63903r mail-img" loading="lazy">
  <img src="https://lh3.googleusercontent.com/TPa_Y2rJGMVV_4W1SUIQDn-2q2jLu41yUUn4BZOp6jU_0nLxPm5WgPB1m8KewFU0JSA5baeL_qvaCgE6ZCWiBHElDZhA6JH7=rw-w1233" alt="" decoding="async" class="lazyload css-63903r mail-img" loading="lazy">
  <img src="https://lh3.googleusercontent.com/935_Rwng3W3dUQ-rvtqHWEVACdcCQOysJYFbn4pAceIzjw0DnA-DutdEEaPcXZ3hRquq5DafSNopGCKlMmrE5SvzwqAZKFOO=rw-w1233" alt="" decoding="async" class="lazyload css-63903r mail-img" loading="lazy">
</body>

</html>