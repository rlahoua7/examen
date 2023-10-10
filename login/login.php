<?php
include('../gereedschap/database.php');


//
session_start();

// Controleer of het formulier is ingediend
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ontvang de ingevoerde gegevens van het formulier
    $email = $_POST["email"];
    $password = $_POST["wachtwoord"];

    // Haal gebruikersgegevens op uit de database
    $sql = "SELECT * FROM gebruiker WHERE email = :email";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":email", $email);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    //checkt of de gegevens overeenkomen met die van de database
    // Controleer of het wachtwoord overeenkomt
    if ($user && password_verify($password, $user["wachtwoord"])) {
        // Inloggen gelukt, sla gebruikersgegevens op in sessie
        $_SESSION["user_id"] = $user["id"];
        $_SESSION["user_email"] = $user["email"];
        header("Location: index.html"); // Stuur gebruiker naar welkomstpagina of een andere beveiligde pagina
        exit();
    } else {
        // Inloggen mislukt, toon foutmelding
        echo "Ongeldige e-mail of wachtwoord.";
    }
}
?>
