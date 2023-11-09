<!-- <?php
// include('../gereedschap/database.php');

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $naam = $_POST['naam'];
//     $achternaam = $_POST['achternaam'];
//     $email = $_POST['email'];
//     $wachtwoord = password_hash($_POST['wachtwoord'], PASSWORD_DEFAULT);
//     $telefoon = $_POST['telefoon'];
//     $rol = 1;
// }   
//     try {
//         $pdo = new PDO('mysql:host=localhost;dbname=database_name', 'gebruikersnaam', 'wachtwoord');
//         $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//     $sql = "INSERT INTO gebruiker (naam, achternaam, email, wachtwoord, telefoon, rol) 
//     VALUES ('$naam', '$achternaam','$email', '$wachtwoord','$telefoon','$rol')";
     
        

//     if ($conn->query($sql) === TRUE) {
//         echo "Registratie succesvol!";
//     } else {
//         echo "Fout bij registratie: " . $conn->error;
//     }
// }

// $conn->close();
// ?> -->




<!--juiste code!-->
<?php
include('../gereedschap/database.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $naam = $_POST['naam'];
    $achternaam = $_POST['achternaam'];
    $email = $_POST['email'];
    $wachtwoord = password_hash($_POST['wachtwoord'], PASSWORD_DEFAULT);
    $telefoon = $_POST['telefoon'];
    $rol = 1;

    $emailNum = "SELECT * FROM gebruiker WHERE email = '$email'";

    $getEmailNum = getData($emailNum, 'fetch');

    if ($getEmailNum > 1){
        session_start();
        $_SESSION['error_message'] = "email adress is al in gebruik";
        header("location: index.php");
    }

    

    try {
        // Gebruik de PDO-verbinding uit de database.php-file
        $sql = "INSERT INTO gebruiker (naam, achternaam, email, wachtwoord, telefoon, rol) 
        VALUES (:naam, :achternaam, :email, :wachtwoord, :telefoon, :rol)";

        $stmt = $conn->prepare($sql); // $conn is de PDO-verbinding uit de database.php-file
        $stmt->bindParam(':naam', $naam);
        $stmt->bindParam(':achternaam', $achternaam);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':wachtwoord', $wachtwoord);
        $stmt->bindParam(':telefoon', $telefoon);
        $stmt->bindParam(':rol', $rol);

        if ($stmt->execute()) {
            echo "Registratie succesvol!";
        } else {
            echo "Fout bij registratie: " . $stmt->errorInfo()[2]; // Geeft de specifieke foutmelding van PDO terug
        }
    } catch (PDOException $e) {
        echo "Fout bij registratie: " . $e->getMessage(); // Geeft de algemene foutmelding van PDO terug. catch zet je achter try 
    }
}
?>