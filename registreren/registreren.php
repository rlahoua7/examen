<?php
include('../gereedschap/database.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {  
    $naam = $_POST['naam'];
    $achternaam = $_POST['achternaam'];
    $email = $_POST['email'];
    $wachtwoord = password_hash($_POST['wachtwoord'], PASSWORD_DEFAULT);
    $telefoon = $_POST['telefoon'];

    // Controleer of e-mail al in gebruik is
    $emailNum = "SELECT * FROM gebruiker WHERE email = '$email'"; 
    $getEmailNum = getData($emailNum, 'fetch'); 

    if ($getEmailNum > 1){
        session_start();
        $_SESSION['error_message'] = "Emailadres is al in gebruik";
        header("location: index.php");
    } else {
        try {
            // Gebruik de PDO-verbinding uit de database.php-file
            $sql = "INSERT INTO gebruiker (naam, achternaam, email, wachtwoord, telefoon) 
                    VALUES (:naam, :achternaam, :email, :wachtwoord, :telefoon)";
    
            $stmt = $conn->prepare($sql); 
            $stmt->bindParam(':naam', $naam);
            $stmt->bindParam(':achternaam', $achternaam);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':wachtwoord', $wachtwoord);
            $stmt->bindParam(':telefoon', $telefoon);

            if ($stmt->execute()) {
                echo "Registratie succesvol!";
                header("refresh: 2; url=../index.php");
            } else {
                echo "Fout bij registratie: " . $stmt->errorInfo()[2]; // Geeft de specifieke foutmelding van PDO terug
            }
        } catch (PDOException $e) {
            echo "Fout bij registratie: " . $e->getMessage(); // Geeft de algemene foutmelding van PDO terug. 
        }
    }
}
?>