<?php

include "PHPMailer/src/DSNConfigurator.php";
include "PHPMailer/src/PHPMailer.php";
include "PHPMailer/src/Exception.php";

include "PHPMailer/src/POP3.php";
include "PHPMailer/src/SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $from_email = $_POST["from_email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    
    $mail = new PHPMailer(true);

    try {
        // Cài đặt máy chủ SMTP và thông tin tài khoản email

        $mail->SMTPDebug = 0; // chế độ debug
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'kha.hh.62cntt@ntu.edu.vn'; // SMTP username
        $mail->Password = 'bkgq atpw qqab tvyv';   
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->CharSet = 'UTF-8';

        $mail->setFrom($from_email, 'Phong Vũ - Chăm sóc khách hàng');
        $mail->addAddress('kha.hh.62cntt@ntu.edu.vn', 'Hoàng Kha');
        $mail->addAddress('tien.pm.62cntt@ntu.edu.vn', 'Minh Tiến');
        
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = "Email người gửi: " . $from_email . " - Nội dung: " . $message;
        
        // Xử lý tệp đính kèm nếu được chọn
        if (!empty($_FILES['attachment']['name'])) {
            $attachment = $_FILES['attachment']['tmp_name'];
            $mail->addAttachment($attachment, $_FILES['attachment']['name']);
        }

        $mail->send();
        echo 'Email đã được gửi thành công!';
    } catch (Exception $e) {
        echo 'Không thể gửi email. Lỗi: ' . $mail->ErrorInfo;
    }
}
?>
