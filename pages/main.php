<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/style_send-mail.css">
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
        include 'send-mail/form-send-mail.php';
    } elseif ($tam == 'exercise') {
        include 'main/bai-tap.php';
    } else {
        include 'main/home.php';
    }
    ?>
</body>

</html>