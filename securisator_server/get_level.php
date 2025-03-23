<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, X-Requested-With");
header('Content-Type: application/json');

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "securisator";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die(json_encode(["success" => false, "message" => "Connexion échouée : " . $conn->connect_error]));
}

if (!isset($_GET['user_id'])) {
    echo json_encode(["success" => false, "message" => "❌ Aucun user_id reçu"]);
    exit();
}

$user_id = $_GET['user_id'];

$sql = "SELECT level, party FROM users WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo json_encode(["success" => true, "level" => $row['level'], "party" => $row['party']]);
} else {
    echo json_encode(["success" => false, "message" => "❌ Utilisateur non trouvé"]);
}

$stmt->close();
$conn->close();
?>
