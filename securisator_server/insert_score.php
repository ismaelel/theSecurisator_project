<?php
//require 'config.php'; // Fichier contenant la connexion à la base de données
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
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = intval($_POST["user_id"]);
    $category = $_POST["category"];
    $time_spent = intval($_POST["time_spent"]);
    $party_number = intval($_POST["party_number"]);

    if ($user_id > 0 && !empty($category) && $party_number > 0) {
        $sql = "INSERT INTO scores (user_id, category, time_spent, party_number) 
                VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("isdi", $user_id, $category, $time_spent, $party_number);

        if ($stmt->execute()) {
            echo "✅ Score ajouté avec succès !";
        } else {
            echo "❌ Erreur lors de l'ajout du score.";
        }
        $stmt->close();
    } else {
        echo "❌ Données invalides.";
    }
}
$conn->close();
?>
