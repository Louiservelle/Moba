<!DOCTYPE html>
<html>
<head>
  <title>Profil - Votre jeu MOBA</title>
  <link rel="stylesheet" href="src/css/global.css">
  <link rel="stylesheet" href="src/css/index.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    h1 {
      text-align: center;
      padding: 40px 0;
    }

    .profile-container {
      width: 300px;
      margin: 0 auto;
      text-align: center;
    }

    p {
      margin-bottom: 10px;
    }
  </style>
</head>
<body>
  <h1>Profil</h1>
  <nav>
    <a href="index.php">Home</a>
    <a href="connexion.php">Connexion</a>
    <a href="inscription.php">Inscription</a>
    <a href="classement.php">Classement</a>
  </nav>
  <div class="profile-container">
    <?php
    // Vérification de l'authentification de l'utilisateur
    session_start();

    // Redirection vers la page de connexion si l'utilisateur n'est pas connecté
    if (!isset($_SESSION['username'])) {
        header("Location: connexion.php");
        exit();
    }

    // Affichage des informations du profil de l'utilisateur
    $username = $_SESSION['username'];
    $score = $_SESSION['score'];

    echo "<p>Nom d'utilisateur : $username</p>";
    echo "<p>Score : $score</p>";
    ?>
 
