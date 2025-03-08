<?php
session_start(); // Inicializacija seje

$servername = "localhost";
$username = "root"; // Vaše uporabniško ime za MySQL
$password = ""; // Vaše geslo za MySQL
$dbname = "zakljucna"; // Ime vaše podatkovne baze

// Ustvarjanje povezave
$conn = new mysqli($servername, $username, $password, $dbname);

// Preverjanje povezave
if ($conn->connect_error) {
    die("Povezava ni uspela: " . $conn->connect_error);
}

// Preverjanje, ali so podatki poslani
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $geslo = $_POST['geslo'];

    // Preverjanje, ali username obstaja v bazi
    $sql = "SELECT * FROM uporabniki WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Uporabnik obstaja, preverimo geslo
        $row = $result->fetch_assoc();
        if ($geslo == $row['geslo']) {
            // Shranimo uporabniško ime v sejo
            $_SESSION['username'] = $username;
            echo "Uspešno ste se prijavili!";
            // Preusmeritev na drugo spletno stran
            header("Location: homepage.php");
            exit();
        } else {
            echo "Napačno geslo.";
        }
    } else {
        echo "Uporabniško ime ne obstaja.";
    }
}

$conn->close();
?>