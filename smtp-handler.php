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
    $mail->Host       = 'box5573.bluehost.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'query@buzzlinedigital.com';
    $mail->Password   = 'Admin123!@#';
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;

    $mail->setFrom('info@buzzlinedigital.com', 'Website Form');
    $mail->addAddress('receiver@email.com');

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
    echo "Thank you! Your message has been sent.";
} catch (Exception $e) {
    echo "Mailer Error: {$mail->ErrorInfo}";
}
