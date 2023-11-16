<?php
unset($_SESSION['loggedin_customer']);
unset($_SESSION['loggedin_employee']);
header("Location: index.php");
?>