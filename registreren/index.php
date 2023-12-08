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
    <link rel="stylesheet" href="registreren.css">
    <title>Inloggen en registreren</title>
</head>

<body>
    <nav>
        <div class="navbar">
            <img src="../images/logo.png" class="logo">
            <ul>
                <li><a href="../index.php">home</a></li>
                <li><a href="../login/index.php">Inloggen</a></li>
                <li><a href="../overons.php">Over ons</a></li>
                <li><a href="../contact.php">Contact</a></li>

            </ul>
        </div>
    </nav>

    <h1>Registreren</h1>
    <form action="registreren.php" method="post">
        naam: <input type="text" name="naam" required><br>
        achternaam: <input type="text" name="achternaam" required><br>
        <!-- laat de error zien van dat er al zelfde email is -->
        <?php if(isset($error_message)): ?>
        <div style="color: red;"><?php echo $error_message; ?></div>
        <?php endif; ?>
        email: <input type="email" name="email" required><br>
        wachtwoord: <input type="password" name="wachtwoord" required><br>
        telefoon: <input type="number" name="telefoon" required><br>
        <input type="submit" value="Registreren">
    </form>
    <main>
        <div class="main-text">
            <h1>Rijsschool A naar B</h1>
        </div>
    </main>
    <footer>
        <ul class="footer-list">
            <li><a href="contact.html">Contact</a></li>
            <li><a href="overons.html">over ons</i></a></li>
            <li><a href="#">hulp</a></li>
        </ul>
        <p>copyright &copy;2023 Rijsschool A naar B. designed by <span>Rayan Lahoua</span></p>
    </footer>
</body>

</html>