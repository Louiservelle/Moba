<!DOCTYPE html>
<html>
<head>
  <title>Inscription - Votre jeu MOBA</title>
  <link rel="stylesheet" href="src/css/global.css">
  <link rel="stylesheet" href="src/css/inscription.css">
</head>
<body>
<nav>
    <a href="index.php">Home</a>
    <a href="connexion.php">Connexion</a>
    <a href="inscription.php">Inscription</a>
    <a href="classement.php">Classement</a>
  </nav>
  <h1>Inscription</h1>
  <div class="container">
  <div class="form-container">
  <form action="traitement_inscription.php" method="POST">
    <label for="username">Nom d'utilisateur :</label>
    <input type="text" id="username" name="username" required>

    <label for="email">Adresse e-mail :</label>
    <input type="email" id="email" name="email" required>

    <label for="password">Mot de passe :</label>
    <input type="password" id="password" name="password" required>

    <input type="submit" value="S'inscrire">
  </form>
  </div>
  </div>
  <p>Déjà inscrit ? <a href="connexion.php">Connectez-vous ici</a></p>
</body>
</html>
