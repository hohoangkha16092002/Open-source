<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- FILE CSS -->
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/navigator.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/home-page.css">
    <link rel="stylesheet" href="send-mail/style_send-mail.css">

    <!-- Tải các tệp CSS của Bootstrap từ CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php
    include 'pages/header.php';
    include 'pages/navigator.php';
    include 'pages/main.php';
    include 'pages/footer.php';
    ?>
</body>\
<!-- Tải các tệp JavaScript của Bootstrap từ CDN (đặt nó trước đó trước thẻ đóng </body>) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

</html>