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

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $sql = "SELECT COUNT(*) as count FROM kosarica WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo json_encode(['count' => $row['count']]);
    } else {
        echo json_encode(['count' => 0]);
    }
} else {
    echo json_encode(['count' => 0]);
}

$conn->close();
?>