<?php
unset($_SESSION['loggedin']);
unset($_SESSION['HoTenKH']);
unset($_SESSION['DiaChi']);
unset($_SESSION['Email']);
unset($_SESSION['NgaySinh']);
unset($_SESSION['SDT']);
header("Location: index.php");
?>