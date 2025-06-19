<?php
require __DIR__.'/php_mailer/src/PHPMailer.php';
require __DIR__.'/php_mailer/src/SMTP.php';
require __DIR__.'/php_mailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$name     = $_POST['name'] ?? '';
$email    = $_POST['email'] ?? '';
$phone    = $_POST['phone'] ?? '';
$message  = $_POST['message'] ?? ($_POST['brief'] ?? '');
$services = isset($_POST['services']) ? implode(', ', $_POST['services']) : 'N/A';

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = 'mail.buzzlinedigital.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'info@buzzlinedigital.com';
    $mail->Password   = 'R0$3P3t@l';
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;

    $mail->setFrom('info@buzzlinedigital.com', 'Website Form');
    $mail->addAddress('info@buzzlinedigital.com');

    $mail->isHTML(true);
    $mail->Subject = 'New Website Form Submission';
    $mail->Body    = "
        <strong>Name:</strong> $name<br>
        <strong>Email:</strong> $email<br>
        <strong>Phone:</strong> $phone<br>
        <strong>Services:</strong> $services<br>
        <strong>Message:</strong><br>$message
    ";

    $mail->send();

    // ✅ Redirect after successful email send
    header("Location: /thankyou/");
    exit;

} catch (Exception $e) {
    echo "Mailer Error: {$mail->ErrorInfo}";
}
