<?php

include('../gereedschap/database.php');

$token = $_GET["token"]; // token wordt uit de url gehaald

$token_hash = hash("sha256", $token); // waarde token wordt gehasht
        
$userSql = "SELECT * FROM gebruiker WHERE reset_token_hash = '$token_hash'"; //zoekt welke gebruiker bij de token hoort

$user = getData($userSql, 'fetch'); //getdata word gerbuikt om de resultaten van de sql query op te halen. de parameter 'fetch' geeft aan dat de resultaten als een associtive array moeten worden opgehaald

if ($user === null) {
    die("token not found"); //als er geen overeenkomende gebruiker word gevonden krijg je foutmelding
}


?>
<!DOCTYPE html>
<html>

<head>
    <title>Reset Password</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>

<body>

    <h1>Reset Password</h1>

    <form method="post" action="process-reset-wachtwoord.php">

        <input type="hidden" name="token" value="<?= htmlspecialchars($token) ?>">  <!--verborgen veld bevat de geshate token voor het indentificeren van de gebruiker bij het verwerken van de formulier-->

        <label for="password">New password</label>
        <input type="password" id="password" name="password">

        <label for="password_confirmation">Repeat password</label>
        <input type="password" id="password_confirmation" name="password_confirmation">

        <button>Send</button>
    </form>

</body>

</html>
