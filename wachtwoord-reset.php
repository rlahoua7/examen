<?php

$email = $_POST["email"];

$token = bin2hex(random_bytes(16));

$token_hash = hash("sha256", $token);

$expiry = date("Y-m-d H:i:s", time() + 60 * 30);

$mysqli = require __DIR__ . "../gereedschap/database.php";

$sql = "UPDATE gebruiker
        SET reset_token_hash = ?,
            reset_token_expires_at = ?
        WHERE email = ?";
$stmt = $mysqli->prepare($sql);

$stmt->bind_param("sss", $token_hash, $expiry, $email);

if ($stmt->execute()) {
    echo "E-mail resetinstructies zijn verzonden!";
} else {
    echo "Er is een fout opgetreden bij het updaten van de database.";
}

?>
