<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "zakljucna";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Povezava ni uspela: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION['username'])) {
    $productName = $_POST['productName'];
    $price = $_POST['price'];
    $slika = $_POST['slika'];
    $username = $_SESSION['username'];

    $sql = "INSERT INTO kosarica (username, productName, price, slika) VALUES ('$username', '$productName', '$price', '$slika')";

    if ($conn->query($sql) === TRUE) {
        echo "Izdelek je bil dodan v košarico.";
    } else {
        echo "Napaka: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>