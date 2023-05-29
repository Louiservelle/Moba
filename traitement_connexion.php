<?php
$servername = "localhost";
$username_db = "root";
$password_db = "root";
$dbname = "moba";

$conn = new mysqli($servername, $username_db, $password_db, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die("Erreur de connexion à la base de données : " . $conn->connect_error);
}

// Récupération des données du formulaire de connexion
$username = $_POST['username'];
$password = $_POST['password'];

// Vérification des informations de connexion dans la base de données
$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = $conn->query($query);

if ($result->num_rows == 1) {
    // L'utilisateur est authentifié avec succès

    // Récupération des informations du joueur
    $row = $result->fetch_assoc();
    $score = $row['score'];

    // Démarrage de la session et enregistrement des informations de l'utilisateur
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['score'] = $score;

    // Redirection vers la page de profil
    header("Location: profile.php");
    exit();
} else {
    // Identifiants de connexion invalides

    // Redirection vers la page de connexion avec un message d'erreur
    header("Location: connexion.php?error=1");
    exit();
}

// Fermeture de la connexion à la base de données
$conn->close();
?>
