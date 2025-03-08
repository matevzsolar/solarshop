<?php
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
    $ime = $_POST['ime'];
    $priimek = $_POST['priimek'];
    $gmail = $_POST['gmail'];
    $geslo = $_POST['geslo'];
    $username = $_POST['username'];

    // Preverjanje, ali Gmail vsebuje '@' in '.com' ali '.net'
    if (!filter_var($gmail, FILTER_VALIDATE_EMAIL) || !preg_match("/\.(com|net)$/", $gmail)) {
        die("Neveljaven Gmail.");
    }

    // Preverjanje, ali username in gmail še ne obstajata v bazi
    $sql = "SELECT * FROM uporabniki WHERE username='$username' OR gmail='$gmail'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        die("Username ali Gmail že obstaja.");
    }

    // Vstavljanje podatkov v bazo
    $sql = "INSERT INTO uporabniki (ime, priimek, gmail, geslo, username)
    VALUES ('$ime', '$priimek', '$gmail', '$geslo', '$username')";

    if ($conn->query($sql) === TRUE) {
        echo "Uspešno ste se prijavili!";
        // Preusmeritev na drugo spletno stran
        header("Location: homepage.php");
        exit();
    } else {
        echo "Napaka: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>