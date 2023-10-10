<?php    session_start(); // Start de sessie

    // Controleer of er een foutmelding is ingesteld   
    
    if(isset($_SESSION['error_message'])) {

        $error_message = $_SESSION['error_message'];

        unset($_SESSION['error_message']); // Verwijder het bericht om herhaling te voorkomen

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inloggen en registreren</title>
</head>
<body>
    <h1>Registreren</h1>
    <form action="registreren.php" method="post">
        naam: <input type="text" name="naam" required><br>
        achternaam: <input type="text" name="achternaam" required><br>
        <!-- laat de error zien van dat er al een email is -->
            <?php if(isset($error_message)): ?>    
                <div style="color: red;"><?php echo $error_message; ?></div>
            <?php endif; ?>
        email: <input type="email" name="email" required><br>
        wachtwoord: <input type="password" name="wachtwoord" required><br>
        telefoon: <input type="number" name="telefoon" required><br>
        <input type="submit" value="Registreren">
    </form>

</body>
</html>
