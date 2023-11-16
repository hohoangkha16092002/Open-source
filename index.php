<?php
session_start();
?>
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
    <link rel="stylesheet" href="css/style_send-mail.css">
    <link rel="stylesheet" href="css/login-page.css">
    <link rel="stylesheet" href="css/cart-page.css">
    <link rel="stylesheet" href="css/personal-information.css">
    <link rel="stylesheet" href="css/detail.css">
    <link rel="stylesheet" href="css/checkout.css">
    <link rel="stylesheet" href="css/search-page.css">
    <link rel="stylesheet" href="css/adress.css">
    <link rel="stylesheet" href="css/consignee-information.css">
    <link rel="stylesheet" href="css/confirm-logout.css">
    <link rel="stylesheet" href="css/order-management.css">
    <link rel="stylesheet" href="css/order-detail.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@glidejs/glide@3.4.1/dist/css/glide.core.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide@3.4.1/dist/glide.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.js"></script>
    <script src="js/home-page.js"></script>
    <script src="js/consignee-information.js"></script>

    <!-- Tải các tệp CSS của Bootstrap từ CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
</head>

<body>
    <?php
    include 'pages/config.php';
    include 'pages/header.php';
    include 'pages/navigator.php';
    include 'pages/main.php';
    include 'pages/footer.php';
    ?>
</body>
<!-- Tải các tệp JavaScript của Bootstrap từ CDN (đặt nó trước đó trước thẻ đóng </body>) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script>
    new Glide('.glide', {
        perView: 5
    }).mount()
</script>

</html>