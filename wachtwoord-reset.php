<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$email = $_POST["email"];
$token = bin2hex(random_bytes(16));
$token_hash = hash("sha256", $token);
$expiry = date("Y-m-d H:i:s", time() + 60 * 30); //
$database = require __DIR__ . "../gereedschap/database.php";
$sql = "UPDATE gebruiker
        SET reset_token_hash = ?,
            reset_token_expires_at = ?
        WHERE email = ?";
$stmt = $database->prepare($sql);

$stmt->bind_param("sss", $token_hash, $expiry, $email);
if ($stmt->execute()) {
    try {
        // Create PHPMailer instance
        $mail = new PHPMailer(true);
 
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = 'b194d2521afbbf'; // Replace with your Mailtrap username
        $mail->Password = '8d0acdb6c1a21b'; // Replace with your Mailtrap password
        var_dump($email);
        // Recipients
        $mail->setFrom('rijschoolanaarb@outlook.com', 'Your Name');
        $mail->addAddress($email); // Add recipient
 
        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Password Reset Instructions';
        $mail->Body    = "<p>Your password reset token is: $token</p>";
 
        $mail->send();
        echo 'E-mail reset instructions have been sent!';
    } catch (Exception $e) {
        echo "An error occurred while sending the email: {$mail->ErrorInfo}";
    }
} else {
    echo "An error occurred while updating the database.";
}
?>