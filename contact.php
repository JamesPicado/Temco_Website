<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Asegúrate de haber corrido: composer require phpmailer/phpmailer

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = $_POST['name'] ?? '';
    $company = $_POST['company'] ?? '';
    $email   = $_POST['email'] ?? '';
    $phone   = $_POST['phone'] ?? '';
    $subject = $_POST['subject'] ?? '';
    $message = $_POST['message'] ?? '';

    $mail = new PHPMailer(true);

    try {
        // Configuración SMTP
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com'; // Cambia según tu proveedor
        $mail->SMTPAuth   = true;
        $mail->Username   = 'picadojames.jp@gmail.com'; // 🔹 Cambia esto
        $mail->Password   = 'hbwd lmul oufy aeag'; // 🔹 Cambia esto
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Remitente y destinatario
        $mail->setFrom($email, $name); 
        $mail->addAddress('picadojames.jp@gmail.com'); // 🔹 Donde quieres recibir los mensajes

        // Contenido del correo
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = "
            <h3>New message from contact form: </h3>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Company:</strong> $company</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Phone:</strong> $phone</p>
            <p><strong>Message:</strong><br>$message</p>
        ";

        $mail->send();
        echo "<script>alert('✅ Mensaje enviado correctamente.'); window.history.back();</script>";
    } catch (Exception $e) {
        echo "<script>alert('❌ Error al enviar: {$mail->ErrorInfo}'); window.history.back();</script>";
    }
}
