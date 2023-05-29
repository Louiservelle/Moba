<!DOCTYPE html>
<html>
<head>
  <title>Connexion - Votre jeu MOBA</title>
  <link rel="stylesheet" href="src/css/global.css">
  <link rel="stylesheet" href="src/css/connexion.css">
</head>
<body>
<nav>
    <a href="index.php">Home</a>
    <a href="connexion.php">Connexion</a>
    <a href="inscription.php">Inscription</a>
    <a href="classement.php">Classement</a>
  </nav>
  <h1>Connexion</h1>
  <div class="container">

  
  <div class="form-container">
  <form action="traitement_connexion.php" method="POST">
    <label for="username">Nom d'utilisateur :</label>
    <input type="text" id="username" name="username" required>

    <label for="password">Mot de passe :</label>
    <input type="password" id="password" name="password" required>

    <input type="submit" value="Se connecter">
  </form>
  </div>
  </div>
  <p>Pas encore inscrit ? <a href="inscription.php">Inscrivez-vous ici</a></p>
</body>
</html>
