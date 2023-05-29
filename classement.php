<!DOCTYPE html>
<html>
<head>
  <title>Classement - Votre jeu MOBA</title>
  <link rel="stylesheet" href="src/css/classement.css">
</head>
<body>  
  
  <nav>
    <a href="index.php">Home</a>
    <a href="connexion.php">Connexion</a>
    <a href="inscription.php">Inscription</a>
    <a href="classement.php">Classement</a>
  </nav>
  <h1>Classement des joueurs</h1>

  <table>
    <tr>
      <th>Classement</th>
      <th>Nom d'utilisateur</th>
      <th>Score</th>
    </tr>
    <?php
$servername = "localhost";
$username_db = "root";
$password_db = "root";
$dbname = "moba";

    $conn = new mysqli($servername, $username_db, $password_db, $dbname);

    if ($conn->connect_error) {
        die("Erreur de connexion à la base de données : " . $conn->connect_error);
    }


    $query = "SELECT username, score FROM users ORDER BY score DESC";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $ranking = 1;
        while ($row = $result->fetch_assoc()) {
            $username = $row['username'];
            $score = $row['score'];

            echo "<tr>";
            echo "<td>$ranking</td>";
            echo "<td>$username</td>";
            echo "<td>$score</td>";
            echo "</tr>";

            $ranking++;
        }
    } else {
        echo "<tr><td colspan='3'>Aucun joueur trouvé.</td></tr>";
    }

    $conn->close();
    ?>
  </table>
</body>
</html>
