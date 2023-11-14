<?php
include('../gereedschap/database.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $nummer = $_POST['number'];
    $date = $_POST['date'];
    $text = $_POST['text'];

    try {
        // Gebruik de PDO-verbinding uit de database.php-file
        $sql = "INSERT INTO afspraak (email, number, date, text) 
                VALUES (:email, :number, :date, :text)";

        $stmt = $conn->prepare($sql); // $conn is de PDO-verbinding uit de database.php-file
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':number', $nummer); // Corrected variable name to $nummer
        $stmt->bindParam(':date', $date);
        $stmt->bindParam(':text', $text);

        if ($stmt->execute()) {
            echo "Registratie succesvol!";
        } else {
            echo "Fout bij registratie: " . $stmt->errorInfo()[2]; // Geeft de specifieke foutmelding van PDO terug
        }

        header("refresh: 2; url=../index.php");
    } catch (PDOException $e) {
        echo "Fout bij registratie: " . $e->getMessage();
    }

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

        // Recipients
        $mail->setFrom('rijschoolanaarb@outlook.com', 'Your Name');
        $mail->addAddress($email); // Add recipient

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Subject of the Email';
        $mail->Body    = 'Uw afspraak is gemaakt, de instructeur neemt contact met u op ';

        $mail->send();
        echo 'E-mail is verzonden!';
        header('url=index.php');
    } catch (Exception $e) {
        echo "An error occurred while sending the email: {$mail->ErrorInfo}";
    }
} else {
    echo "An error occurred while updating the database.";
}
?>
