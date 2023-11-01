<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_GET['page'])) {
        $tam = $_GET['page'];
    } else {
        $tam = '';
    }
    if ($tam == 'home') {
        include 'main/home.php';
    } elseif ($tam == 'cskh') {
        include 'main/send-mail/form-send-mail.php';
    } elseif ($tam == 'exercise') {
        include 'main/exercise-page.php';
    } elseif ($tam == 'login') {
        include 'main/login.php';
    } elseif ($tam == 'register') {
        include 'main/register.php'; 
    } elseif ($tam == 'search') {
        include 'main/search-page.php';
    } elseif ($tam == 'personal-information') {
        include 'main/personal-information.php';
    } elseif ($tam == 'register') {
        include 'main/register.php';
    } elseif ($tam == 'detail' && isset($_GET['maMH'])) {
        include 'main/detail.php';
    } elseif ($tam == 'cart-page') {
        include 'main/cart-page.php';
    } 
    elseif ($tam == 'consignee-information') {
        include 'main/consignee-information.php';
    } 
    elseif ($tam == 'address') {
        include 'main/address.php';
    }
     elseif ($tam == 'checkout') {
        include 'main/checkout.php';
    }
    elseif ($tam == 'confirm-logout') {
        include 'main/confirm-logout.php';
    }
    elseif ($tam == 'logout') {
        include 'main/logout.php';
    }
    else {
        include 'main/home.php';
    }
    ?>

</body>

</html>