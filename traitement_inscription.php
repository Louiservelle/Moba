<?php
// Récupération des données du formulaire
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Calcul du score initial (mettez la valeur souhaitée)
$score = 0;

// Connexion à la base de données
$servername = "localhost";
$username_db = "root";
$password_db = "root";
$dbname = "moba";

$conn = new mysqli($servername, $username_db, $password_db, $dbname);

$conn = new mysqli($servername, $username_db, $password_db, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die("Erreur de connexion à la base de données : " . $conn->connect_error);
}

// Vérification si le nom d'utilisateur ou l'adresse e-mail existe déjà dans la base de données
$query = "SELECT * FROM users WHERE username='$username' OR email='$email'";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    // Nom d'utilisateur ou adresse e-mail déjà utilisé
    echo "Nom d'utilisateur ou adresse e-mail déjà utilisé. Veuillez choisir un autre nom d'utilisateur ou une autre adresse e-mail.";
} else {
    // Insertion du nouvel utilisateur dans la base de données
    $query = "INSERT INTO users (username, email, password, score) VALUES ('$username', '$email', '$password', '$score')";

    if ($conn->query($query) === TRUE) {
        // Succès de l'inscription
        echo "Inscription réussie ! Bienvenue sur le jeu MOBA.";
        header("Location: profile.php");
    } else {
        // Erreur lors de l'inscription
        echo "Erreur lors de l'inscription : " . $conn->error;
    }
}

// Fermeture de la connexion à la base de données
$conn->close();
?>
?>
