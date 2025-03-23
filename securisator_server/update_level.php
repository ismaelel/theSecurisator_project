<?php
session_start();
header('Content-Type: application/json'); // Format JSON

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "securisator";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die(json_encode(["success" => false, "message" => "Connexion échouée : " . $conn->connect_error]));
}

// Vérifier que user_id est bien reçu
if (!isset($_POST['user_id'])) {
    echo json_encode(["success" => false, "message" => "❌ Aucun user_id reçu"]);
    exit();
}

$user_id = $_POST['user_id'];

// Vérifier si l'utilisateur existe
$checkUserQuery = "SELECT level FROM users WHERE id = ?";
$stmt = $conn->prepare($checkUserQuery);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 0) {
    echo json_encode(["success" => false, "message" => "❌ Utilisateur non trouvé"]);
    exit();
}

// Mettre à jour le niveau
$sql = "UPDATE users SET level = level + 1 WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();

// Récupérer le nouveau niveau
$newLevelQuery = "SELECT level FROM users WHERE id = ?";
$stmt = $conn->prepare($newLevelQuery);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$newLevel = $result->fetch_assoc()['level'];

echo json_encode(["success" => true, "message" => "✅ Niveau mis à jour", "new_level" => $newLevel]);

$stmt->close();
$conn->close();
?>
