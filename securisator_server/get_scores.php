<?php
header('Content-Type: application/json');

// Informations de connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "securisator";

// Connexion à la base de données
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die(json_encode(["success" => false, "message" => "Connexion échouée : " . $conn->connect_error]));
}

// Requête SQL pour récupérer les scores et le login de l'utilisateur
$sql = "SELECT s.user_id, u.username, s.category, s.time_spent, s.party_number
        FROM scores s
        JOIN users u ON s.user_id = u.id
        ORDER BY s.time_spent";

$result = $conn->query($sql);

// Tableau pour stocker les scores
$scores = [];

while ($row = $result->fetch_assoc()) {
    // Ajouter chaque score avec le login de l'utilisateur
    $scores[] = [
        "user_id" => $row["user_id"],
        "login" => $row["username"],  
        "category" => $row["category"],
        "time_spent" => $row["time_spent"],
        "party_number" => $row["party_number"]
    ];
}

// Renvoyer la réponse JSON
echo json_encode($scores);

// Fermer la connexion à la base de données
$conn->close();
?>
