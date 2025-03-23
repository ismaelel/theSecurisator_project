<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "securisator";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user = $_POST['username'];
$hashedPassword = $_POST['password'];

$sql = "SELECT id, password, level, party FROM users WHERE username=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $user);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    $stmt->bind_result($id, $storedPassword, $level, $party);
    $stmt->fetch();

    if ($hashedPassword === $storedPassword) {
        echo "success|$id|$level|$party"; // Retourne "success" suivi de l'ID utilisateur et level
    } else {
        echo "invalid";
    }
} else {
    echo "invalid";
}

$stmt->close();
$conn->close();
?>
