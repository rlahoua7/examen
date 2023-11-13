<?php
include('../gereedschap/database.php');

$token = $_POST["token"];
$newPassword = $_POST["password"];

$token_hash = hash("sha256", $token);

// Controleer of het resettoken geldig is
$userSql = "SELECT * FROM gebruiker WHERE reset_token_hash = ?";
$userStmt = $mysqli->prepare($userSql);
$userStmt->bind_param("s", $token_hash);
$userStmt->execute();
$userResult = $userStmt->get_result();
$user = $userResult->fetch_assoc();

if (!$user) {
    die("Ongeldig resettoken. Probeer het opnieuw.");
}

// Update het wachtwoord
$password_hash = password_hash($newPassword, PASSWORD_DEFAULT);
$id = $user['id'];

$sql = "UPDATE gebruiker
        SET wachtwoord = ?,
            reset_token_hash = NULL,
            reset_token_expires_at = NULL
        WHERE id = ?";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("si", $password_hash, $id);
$stmt->execute();

echo "Wachtwoord bijgewerkt. U kunt nu inloggen.";
?>
